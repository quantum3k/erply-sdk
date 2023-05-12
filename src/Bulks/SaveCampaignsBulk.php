<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveCampaigns;

class SaveCampaignsBulk extends BaseEntityBulk
{
    /**
     * @return SaveCampaigns[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}