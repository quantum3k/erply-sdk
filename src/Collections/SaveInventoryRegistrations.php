<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveInventoryRegistration;

class SaveInventoryRegistrations extends BaseEntityCollection
{
    protected static $entity = SaveInventoryRegistration::class;

    /**
     * @return SaveInventoryRegistration
     */
    public function current(): SaveInventoryRegistration
    {
        return parent::current();
    }

    /**
     * @return SaveInventoryRegistration[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}