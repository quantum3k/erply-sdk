<?php

namespace quantum3k\ErplySDK\DTO;

class MatrixDimension extends BaseEntity
{
    public $dimensionID = null;
    public $name = null;

    /** @var MatrixDimensionVariation[] */
    public $variations = null;

    protected static $nested_fields = ['variations' => MatrixDimensionVariation::class];

    public function getQuery(): array
    {
        $query = parent::getQuery();

        if (is_array($this->variations)) {
            foreach ($this->variations as $key => $variation) {
                $index = ($key + 1);
                $query["valueName$index"] = $variation->name;
                $query["valueCode$index"] = $variation->code;
            }
        }

        unset($query['variations']);

        return $query;
    }

    public function addVariation(): MatrixDimensionVariation
    {
        return $this->variations[] = new static::$nested_fields['variations']();
    }

}