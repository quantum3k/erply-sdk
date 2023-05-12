<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveCampaign;

class SaveCampaigns extends BaseEntityCollection
{
    protected static $entity = SaveCampaign::class;

    /**
     * @return SaveCampaign
     */
    public function current(): SaveCampaign
    {
        return parent::current();
    }

    /**
     * @return SaveCampaign[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}