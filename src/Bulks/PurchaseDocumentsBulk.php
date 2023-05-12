<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\PurchaseDocuments;

class PurchaseDocumentsBulk extends BaseEntityBulk
{
    /**
     * @return PurchaseDocuments[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}