<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveInventoryTransfer;

class SaveInventoryTransfers extends BaseEntityCollection
{
    protected static $entity = SaveInventoryTransfer::class;

    /**
     * @return SaveInventoryTransfer
     */
    public function current(): SaveInventoryTransfer
    {
        return parent::current();
    }

    /**
     * @return SaveInventoryTransfer[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}