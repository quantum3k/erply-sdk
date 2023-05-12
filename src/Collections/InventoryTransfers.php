<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\InventoryTransfer;

class InventoryTransfers extends BaseEntityCollection
{
    protected static $entity = InventoryTransfer::class;

    /**
     * @return InventoryTransfer
     */
    public function current(): InventoryTransfer
    {
        return parent::current();
    }

    /**
     * @return InventoryTransfer[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}
