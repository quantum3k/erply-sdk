<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveSupplierGroup;

class SaveSupplierGroups extends BaseEntityCollection
{
    protected static $entity = SaveSupplierGroup::class;

    /**
     * @return SaveSupplierGroup
     */
    public function current(): SaveSupplierGroup
    {
        return parent::current();
    }

    /**
     * @return SaveSupplierGroup[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}