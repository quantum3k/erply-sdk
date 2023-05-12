<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveCurrencies;

class SaveCurrenciesBulk extends BaseEntityBulk
{
    /**
     * @return SaveCurrencies[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}