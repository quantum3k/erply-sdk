<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveInventoryWriteOffs;

class SaveInventoryWriteOffsBulk extends BaseEntityBulk
{
    /**
     * @return SaveInventoryWriteOffs[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}