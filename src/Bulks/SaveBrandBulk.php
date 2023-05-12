<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveBrands;

class SaveBrandBulk extends BaseEntityBulk
{
    /**
     * @return SaveBrands[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}