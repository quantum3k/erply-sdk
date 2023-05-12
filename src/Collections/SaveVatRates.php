<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveVatRate;

class SaveVatRates extends BaseEntityCollection
{
    protected static $entity = SaveVatRate::class;

    /**
     * @return SaveVatRate
     */
    public function current(): SaveVatRate
    {
        return parent::current();
    }

    /**
     * @return SaveVatRate[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}