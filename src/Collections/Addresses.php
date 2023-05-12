<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\Address;

class Addresses extends BaseEntityCollection
{
    protected static $entity = Address::class;

    /**
     * @return Address
     */
    public function current(): Address
    {
        return parent::current();
    }

    /**
     * @return Address[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}
