<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\GiftCard;

class GiftCards extends BaseEntityCollection
{
    protected static $entity = GiftCard::class;

    /**
     * @return GiftCard
     */
    public function current(): GiftCard
    {
        return parent::current();
    }

    /**
     * @return GiftCard[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}
