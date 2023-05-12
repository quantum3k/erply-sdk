<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveVatRates;

class SaveVatRatesBulk extends BaseEntityBulk
{
    /**
     * @return SaveVatRates[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}