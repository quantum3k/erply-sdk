<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\Employee;

class Employees extends BaseEntityCollection
{
    protected static $entity = Employee::class;

    /**
     * @return Employee
     */
    public function current(): Employee
    {
        return parent::current();
    }

    /**
     * @return Employee[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}
