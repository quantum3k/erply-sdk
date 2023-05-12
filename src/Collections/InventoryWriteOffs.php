<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\InventoryWriteOff;

class InventoryWriteOffs extends BaseEntityCollection
{
    protected static $entity = InventoryWriteOff::class;

    /**
     * @return InventoryWriteOff
     */
    public function current(): InventoryWriteOff
    {
        return parent::current();
    }

    /**
     * @return InventoryWriteOff[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}
