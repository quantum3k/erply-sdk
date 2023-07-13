<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\InvoicePaymentType;

class InvoicePaymentTypes extends BaseEntityCollection
{
    protected static $entity = InvoicePaymentType::class;

    /**
     * @return InvoicePaymentType
     */
    public function current(): InvoicePaymentType
    {
        return parent::current();
    }

    /**
     * @return InvoicePaymentType[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}