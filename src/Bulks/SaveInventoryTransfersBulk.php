<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveInventoryTransfers;

class SaveInventoryTransfersBulk extends BaseEntityBulk
{
    /**
     * @return SaveInventoryTransfers[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}