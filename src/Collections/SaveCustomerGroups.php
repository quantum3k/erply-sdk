<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveCustomerGroup;

class SaveCustomerGroups extends BaseEntityCollection
{
    protected static $entity = SaveCustomerGroup::class;

    /**
     * @return SaveCustomerGroup
     */
    public function current(): SaveCustomerGroup
    {
        return parent::current();
    }

    /**
     * @return SaveCustomerGroup[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}