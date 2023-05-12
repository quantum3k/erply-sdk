<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\ProductPrice;

class ProductPrices extends BaseEntityCollection
{
    protected static $entity = ProductPrice::class;

    /**
     * @return ProductPrice
     */
    public function current(): ProductPrice
    {
        return parent::current();
    }

    /**
     * @return ProductPrice[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}