<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveBrand;

class SaveBrands extends BaseEntityCollection
{
    protected static $entity = SaveBrand::class;

    /**
     * @return SaveBrand
     */
    public function current(): SaveBrand
    {
        return parent::current();
    }

    /**
     * @return SaveBrand[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}