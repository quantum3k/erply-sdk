<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveWarehouses;

class SaveWarehousesBulk extends BaseEntityBulk
{
    /**
     * @return SaveWarehouses[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}