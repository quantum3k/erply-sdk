<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\ProductPrices;

class ProductPriceBulk extends BaseEntityBulk
{
    /**
     * @return ProductPrices[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}