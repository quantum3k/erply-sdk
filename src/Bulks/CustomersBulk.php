<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\Customers;

class CustomersBulk extends BaseEntityBulk
{
    /**
     * @return Customers[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}