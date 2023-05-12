<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\CustomerGroup;

class CustomerGroups extends BaseEntityCollection
{
    protected static $entity = CustomerGroup::class;

    /**
     * @return CustomerGroup
     */
    public function current(): CustomerGroup
    {
        return parent::current();
    }

    /**
     * @return CustomerGroup[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}
