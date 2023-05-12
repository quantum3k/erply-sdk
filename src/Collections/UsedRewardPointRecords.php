<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\UsedRewardPointRecord;

class UsedRewardPointRecords extends BaseEntityCollection
{
    protected static $entity = UsedRewardPointRecord::class;

    /**
     * @return UsedRewardPointRecord
     */
    public function current(): UsedRewardPointRecord
    {
        return parent::current();
    }

    /**
     * @return UsedRewardPointRecord[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}