<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\AddressType;

class AddressTypes extends BaseEntityCollection
{
    protected static $entity = AddressType::class;

    /**
     * @return AddressType
     */
    public function current(): AddressType
    {
        return parent::current();
    }

    /**
     * @return AddressType[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}
