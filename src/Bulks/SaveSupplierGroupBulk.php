<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveSupplierGroups;

class SaveSupplierGroupBulk extends BaseEntityBulk
{
    /**
     * @return SaveSupplierGroups[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}