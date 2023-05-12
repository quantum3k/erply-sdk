<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SavePurchaseDocuments;

class SavePurchaseDocumentsBulk extends BaseEntityBulk
{
    /**
     * @return SavePurchaseDocuments[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}