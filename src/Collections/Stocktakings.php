<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\Stocktaking;

class Stocktakings extends BaseEntityCollection
{
    protected static $entity = Stocktaking::class;

    /**
     * @return Stocktaking
     */
    public function current(): Stocktaking
    {
        return parent::current();
    }

    /**
     * @return Stocktaking[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}