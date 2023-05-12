<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\Products;

class ProductsBulk extends BaseEntityBulk
{
    /**
     * @return Products[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}