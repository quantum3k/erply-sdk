<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\Customer;

class Customers extends BaseEntityCollection
{
    protected static $entity = Customer::class;

    /**
     * @return Customer
     */
    public function current(): Customer
    {
        return parent::current();
    }

    /**
     * @return Customer[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}
