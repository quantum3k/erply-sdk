<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveSalesDocuments;

class SaveSalesDocumentsBulk extends BaseEntityBulk
{
    /**
     * @return SaveSalesDocuments[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}