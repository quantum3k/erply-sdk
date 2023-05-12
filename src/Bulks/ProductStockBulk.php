<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\ProductStocks;

class ProductStockBulk extends BaseEntityBulk
{
    /**
     * @return ProductStocks[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}