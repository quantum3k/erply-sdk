<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SavePriceList;

class SavePriceLists extends BaseEntityCollection
{
    protected static $entity = SavePriceList::class;

    /**
     * @return SavePriceList
     */
    public function current(): SavePriceList
    {
        return parent::current();
    }

    /**
     * @return SavePriceList[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}