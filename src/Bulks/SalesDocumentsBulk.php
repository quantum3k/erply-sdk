<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaleDocuments;

class SalesDocumentsBulk extends BaseEntityBulk
{
    /**
     * @return SaleDocuments[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}