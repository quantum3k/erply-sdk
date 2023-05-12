<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveCustomer;

class SaveCustomers extends BaseEntityCollection
{
    protected static $entity = SaveCustomer::class;

    /**
     * @return SaveCustomer
     */
    public function current(): SaveCustomer
    {
        return parent::current();
    }

    /**
     * @return SaveCustomer[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}