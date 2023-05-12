<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveWarehouse;

class SaveWarehouses extends BaseEntityCollection
{
    protected static $entity = SaveWarehouse::class;

    /**
     * @return SaveWarehouse
     */
    public function current(): SaveWarehouse
    {
        return parent::current();
    }

    /**
     * @return SaveWarehouse[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}