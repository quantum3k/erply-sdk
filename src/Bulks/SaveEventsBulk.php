<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveEvents;

class SaveEventsBulk extends BaseEntityBulk
{
    /**
     * @return SaveEvents[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}