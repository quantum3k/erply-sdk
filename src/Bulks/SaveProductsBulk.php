<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveProducts;

class SaveProductsBulk extends BaseEntityBulk
{
    /**
     * @return SaveProducts[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}