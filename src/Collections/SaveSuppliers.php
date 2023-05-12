<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveSupplier;

class SaveSuppliers extends BaseEntityCollection
{
    protected static $entity = SaveSupplier::class;

    /**
     * @return SaveSupplier
     */
    public function current(): SaveSupplier
    {
        return parent::current();
    }

    /**
     * @return SaveSupplier[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}