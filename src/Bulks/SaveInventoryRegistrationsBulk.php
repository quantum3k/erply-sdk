<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveInventoryRegistrations;

class SaveInventoryRegistrationsBulk extends BaseEntityBulk
{
    /**
     * @return SaveInventoryRegistrations[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}