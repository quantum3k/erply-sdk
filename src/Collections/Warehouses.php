<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\Warehouse;

class Warehouses extends BaseEntityCollection
{
    protected static $entity = Warehouse::class;

    /**
     * @return Warehouse
     */
    public function current(): Warehouse
    {
        return parent::current();
    }

    /**
     * @return Warehouse[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}