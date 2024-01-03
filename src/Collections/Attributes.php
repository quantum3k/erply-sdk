<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\Attribute;

class Attributes implements \Countable, \Iterator
{
    /**
     * @var Attribute[]
     */
    protected $attributes = [];

    protected $position = 0;

    public function __construct(array $record = null)
    {
        if ($record != null) {
            if (isset($record['attributes']) && is_array($record['attributes'])) {
                foreach ($record['attributes'] as $attribute) {
                    $attr = $this->add();
                    $attr->attributeName = $attribute['attributeName'];
                    $attr->attributeType = $attribute['attributeType'];

                    switch ($attribute['attributeType']) {
                        case Attribute::TYPE_INT:
                            $attr->attributeValue = (int)$attribute['attributeValue']; break;
                        case Attribute::TYPE_DOUBLE:
                            $attr->attributeValue = (double)$attribute['attributeValue']; break;
                        default:
                            $attr->attributeValue = $attribute['attributeValue']; break;
                    }
                }
            }
        }
    }

    public function add(): Attribute
    {
        return $this->attributes[] = new Attribute();
    }

    public function remove($name, $type = Attribute::TYPE_TEXT)
    {
        foreach ($this->attributes as $attribute) {
            if ($attribute->attributeName === $name && $attribute->attributeType === $type) {
                unset($attribute);
            }
        }
    }

    public function getValue($name, $type = Attribute::TYPE_TEXT)
    {
        foreach ($this->attributes as $attribute) {
            if ($attribute->attributeName === $name && $attribute->attributeType === $type) {
                return $attribute->attributeValue;
            }
        }

        return null;
    }

    public function count(): int
    {
        return count($this->attributes);
    }

    public function current(): Attribute
    {
        return $this->attributes[$this->position];
    }

    public function next()
    {
        $this->position++;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return ($this->position < $this->count());
    }

    public function rewind()
    {
        $this->position = 0;
    }
}