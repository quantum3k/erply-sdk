<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\BaseEntityCollection;

class BulkResponse extends BaseEntityBulk
{
    /**
     * @return BaseEntityCollection[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}