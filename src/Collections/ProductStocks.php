<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\ProductStock;

class ProductStocks extends BaseEntityCollection
{
    protected static $entity = ProductStock::class;

    /**
     * @return ProductStock
     */
    public function current(): ProductStock
    {
        return parent::current();
    }

    /**
     * @return ProductStock[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}