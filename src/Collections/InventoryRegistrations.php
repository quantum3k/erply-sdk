<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\InventoryRegistration;

class InventoryRegistrations extends BaseEntityCollection
{
    protected static $entity = InventoryRegistration::class;

    /**
     * @return InventoryRegistration
     */
    public function current(): InventoryRegistration
    {
        return parent::current();
    }

    /**
     * @return InventoryRegistration[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}
