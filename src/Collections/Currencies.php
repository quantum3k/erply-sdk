<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\Currency;

class Currencies extends BaseEntityCollection
{
    protected static $entity = Currency::class;

    /**
     * @return Currency
     */
    public function current(): Currency
    {
        return parent::current();
    }

    /**
     * @return Currency[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}