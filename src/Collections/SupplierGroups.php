<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SupplierGroup;

class SupplierGroups extends BaseEntityCollection
{
    protected static $entity = SupplierGroup::class;

    /**
     * @return SupplierGroup
     */
    public function current(): SupplierGroup
    {
        return parent::current();
    }

    /**
     * @return SupplierGroup[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}