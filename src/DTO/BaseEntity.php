<?php

namespace quantum3k\ErplySDK\DTO;

abstract class BaseEntity
{
    protected static $query_fields = [];
    protected static $nested_fields = [];

    private static $fields = [];

    public function __construct(array $record = null)
    {
        echo __METHOD__, '...';
        if ($record != null) {
            foreach ($record as $field => $value) {
                if ($prop = $this->getEntityField($field)) {
                    if (isset(static::$nested_fields[$field])) {
                        if (is_subclass_of(static::$nested_fields[$field], BaseEntity::class)) {
                            if (is_array($value)) {
                                foreach ($value as $nested_value) {
                                    $this->{$prop}[] = new static::$nested_fields[$field]($nested_value);
                                }
                            } else {
                                $this->{$prop} = $value;
                            }
                        } else {
                            // Если вложенное поле не является частью BaseEntity,
                            // то мы просто вызываем конструктор этого объекта и передаем в него всю запись,
                            // тем самым объект сам решит как ему обработать данные.
                            $this->{$prop} = new static::$nested_fields[$field]($record);
                        }
                    } else {
                        $this->{$prop} = $value;
                    }
                }
            }

            foreach($this->getEntityFields() as $field) {
                if ($this->{$field} === null) {
                    if (isset(static::$nested_fields[$field])) {
                        if (!is_subclass_of(static::$nested_fields[$field], BaseEntity::class)) {
                            $this->{$field} = new static::$nested_fields[$field]();
                            continue;
                        }
                    }

                    unset($this->{$field});
                }
            }
        }
    }

    public function getQuery(): array
    {
        $query = [];

        foreach (get_object_vars($this) as $field => $value) {
            if (!empty(static::$query_fields) && !in_array($field, static::$query_fields))
                continue;

            if ($value !== null) {
                if (isset(static::$nested_fields[$field]) && self::is_iterable($value)) {
                    $index = 0;
                    foreach ($value as $nested_obj) {
                        if ($nested_obj instanceof BaseEntity) {
                            $index++;
                            $elements = $nested_obj->getQuery();
                            foreach ($elements as $prop_name => $prop_value) {
                                $query[$prop_name.$index] = $prop_value;
                            }
                        }
                    }
                } else {
                    $query[$field] = $value;
                }
            }
        }

        return $query;
    }

    /**
     * Get all fields of model
     * @return array
     */
    private function getEntityFields(): array
    {
        if (empty(self::$fields[static::class])) {
            $reflector = new \ReflectionClass(static::class);
            $properties = $reflector->getProperties(\ReflectionProperty::IS_PUBLIC & ~\ReflectionProperty::IS_STATIC);

            foreach ($properties as $prop)
                self::$fields[static::class][strtolower($prop->getName())] = $prop->getName();
        }

        return self::$fields[static::class] ?? [];
    }

    /**
     * Get canonical field name
     * @param string $field Case-insensitive field name
     * @return string|null
     */
    private function getEntityField(string $field)
    {
        return $this->getEntityFields()[strtolower($field)] ?? null;
    }

    /**
     * Analogue of \is_iterable() function in PHP >= 7.1
     * @param $var
     * @return bool
     */
    private static function is_iterable($var): bool
    {
        return is_array($var) || $var instanceof \Traversable;
    }
}