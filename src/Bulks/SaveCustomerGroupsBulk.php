<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveCustomerGroups;

class SaveCustomerGroupsBulk extends BaseEntityBulk
{
    /**
     * @return SaveCustomerGroups[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}