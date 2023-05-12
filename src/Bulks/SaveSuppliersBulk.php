<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveSuppliers;

class SaveSuppliersBulk extends BaseEntityBulk
{
    /**
     * @return SaveSuppliers[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}