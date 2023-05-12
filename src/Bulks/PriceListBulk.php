<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\PriceLists;

class PriceListBulk extends BaseEntityBulk
{
    /**
     * @return PriceLists[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}