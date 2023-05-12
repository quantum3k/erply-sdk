<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\PointOfSale;

class PointOfSales extends BaseEntityCollection
{
    protected static $entity = PointOfSale::class;

    /**
     * @return PointOfSale
     */
    public function current(): PointOfSale
    {
        return parent::current();
    }

    /**
     * @return PointOfSale[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}
