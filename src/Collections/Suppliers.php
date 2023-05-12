<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\Supplier;

class Suppliers extends BaseEntityCollection
{
    protected static $entity = Supplier::class;

    /**
     * @return Supplier
     */
    public function current(): Supplier
    {
        return parent::current();
    }

    /**
     * @return Supplier[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}