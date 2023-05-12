<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\EarnedRewardPointRecord;

class EarnedRewardPointRecords extends BaseEntityCollection
{
    protected static $entity = EarnedRewardPointRecord::class;

    /**
     * @return EarnedRewardPointRecord
     */
    public function current(): EarnedRewardPointRecord
    {
        return parent::current();
    }

    /**
     * @return EarnedRewardPointRecord[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}