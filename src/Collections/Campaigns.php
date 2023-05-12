<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\Campaign;

class Campaigns extends BaseEntityCollection
{
    protected static $entity = Campaign::class;

    /**
     * @return Campaign
     */
    public function current(): Campaign
    {
        return parent::current();
    }

    /**
     * @return Campaign[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}
