<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SavePayment;

class SavePayments extends BaseEntityCollection
{
    protected static $entity = SavePayment::class;

    /**
     * @return SavePayment
     */
    public function current(): SavePayment
    {
        return parent::current();
    }

    /**
     * @return SavePayment[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}