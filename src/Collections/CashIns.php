<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\CashIn;

class CashIns extends BaseEntityCollection
{
    protected static $entity = CashIn::class;

    /**
     * @return CashIn
     */
    public function current(): CashIn
    {
        return parent::current();
    }

    /**
     * @return CashIn[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}