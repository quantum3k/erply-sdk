<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveProductGroups;

class SaveProductGroupsBulk extends BaseEntityBulk
{
    /**
     * @return SaveProductGroups[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}