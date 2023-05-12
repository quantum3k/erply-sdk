<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveAddress;

class SaveAddresses extends BaseEntityCollection
{
    protected static $entity = SaveAddress::class;

    /**
     * @return SaveAddress
     */
    public function current(): SaveAddress
    {
        return parent::current();
    }

    /**
     * @return SaveAddress[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}
