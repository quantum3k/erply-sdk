<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\PriceList;

class PriceLists extends BaseEntityCollection
{
    protected static $entity = PriceList::class;

    /**
     * @return PriceList
     */
    public function current(): PriceList
    {
        return parent::current();
    }

    /**
     * @return PriceList[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}
