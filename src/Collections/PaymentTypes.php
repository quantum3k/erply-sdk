<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\PaymentType;

class PaymentTypes extends BaseEntityCollection
{
    protected static $entity = PaymentType::class;

    /**
     * @return PaymentType
     */
    public function current(): PaymentType
    {
        return parent::current();
    }

    /**
     * @return PaymentType[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}