<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SavePriceLists;

class SavePriceListsBulk extends BaseEntityBulk
{
    /**
     * @return SavePriceLists[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}