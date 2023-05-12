<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveInventoryWriteOff;

class SaveInventoryWriteOffs extends BaseEntityCollection
{
    protected static $entity = SaveInventoryWriteOff::class;

    /**
     * @return SaveInventoryWriteOff
     */
    public function current(): SaveInventoryWriteOff
    {
        return parent::current();
    }

    /**
     * @return SaveInventoryWriteOff[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}