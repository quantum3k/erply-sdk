<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveProduct;

class SaveProducts extends BaseEntityCollection
{
    protected static $entity = SaveProduct::class;

    /**
     * @return SaveProduct
     */
    public function current(): SaveProduct
    {
        return parent::current();
    }

    /**
     * @return SaveProduct[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}