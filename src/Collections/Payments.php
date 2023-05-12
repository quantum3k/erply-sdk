<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\Payment;

class Payments extends BaseEntityCollection
{
    protected static $entity = Payment::class;

    /**
     * @return Payment
     */
    public function current(): Payment
    {
        return parent::current();
    }

    /**
     * @return Payment[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}
