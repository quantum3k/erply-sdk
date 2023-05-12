<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\VatRate;

class VatRates extends BaseEntityCollection
{
    protected static $entity = VatRate::class;

    /**
     * @return VatRate
     */
    public function current(): VatRate
    {
        return parent::current();
    }

    /**
     * @return VatRate[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}