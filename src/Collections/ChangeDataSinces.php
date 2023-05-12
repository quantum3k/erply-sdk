<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\ChangeDataSince;

class ChangeDataSinces extends BaseEntityCollection
{
    protected static $entity = ChangeDataSince::class;

    /**
     * @return ChangeDataSince
     */
    public function current(): ChangeDataSince
    {
        return parent::current();
    }

    /**
     * @return ChangeDataSince[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}