<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\Brand;

class Brands extends BaseEntityCollection
{
    protected static $entity = Brand::class;

    /**
     * @return Brand
     */
    public function current(): Brand
    {
        return parent::current();
    }

    /**
     * @return Brand[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}