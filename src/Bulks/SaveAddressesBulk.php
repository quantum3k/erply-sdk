<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveAddresses;

class SaveAddressesBulk extends BaseEntityBulk
{
    /**
     * @return SaveAddresses[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}