<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\ProductUnit;

class ProductUnits extends BaseEntityCollection
{
    protected static $entity = ProductUnit::class;

    /**
     * @return ProductUnit
     */
    public function current(): ProductUnit
    {
        return parent::current();
    }

    /**
     * @return ProductUnit[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}