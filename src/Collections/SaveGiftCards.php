<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveGiftCard;

class SaveGiftCards extends BaseEntityCollection
{
    protected static $entity = SaveGiftCard::class;

    /**
     * @return SaveGiftCard
     */
    public function current(): SaveGiftCard
    {
        return parent::current();
    }

    /**
     * @return SaveGiftCard[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}