<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveEmployees;

class SaveEmployeesBulk extends BaseEntityBulk
{
    /**
     * @return SaveEmployees[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}