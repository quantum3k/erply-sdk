<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveCurrency;

class SaveCurrencies extends BaseEntityCollection
{
    protected static $entity = SaveCurrency::class;

    /**
     * @return SaveCurrency
     */
    public function current(): SaveCurrency
    {
        return parent::current();
    }

    /**
     * @return SaveCurrency[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}