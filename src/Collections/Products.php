<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\Product;

class Products extends BaseEntityCollection
{
    protected static $entity = Product::class;

    /**
     * @return Product
     */
    public function current(): Product
    {
        return parent::current();
    }

    /**
     * @return Product[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}