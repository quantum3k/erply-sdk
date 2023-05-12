<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveCustomers;

class SaveCustomersBulk extends BaseEntityBulk
{
    /**
     * @return SaveCustomers[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}