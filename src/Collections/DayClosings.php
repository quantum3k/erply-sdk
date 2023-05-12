<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\DayClosing;

class DayClosings extends BaseEntityCollection
{
    protected static $entity = DayClosing::class;

    /**
     * @return DayClosing
     */
    public function current(): DayClosing
    {
        return parent::current();
    }

    /**
     * @return DayClosing[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}