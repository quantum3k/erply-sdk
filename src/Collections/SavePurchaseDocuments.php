<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SavePurchaseDocument;

class SavePurchaseDocuments extends BaseEntityCollection
{
    protected static $entity = SavePurchaseDocument::class;

    /**
     * @return SavePurchaseDocument
     */
    public function current(): SavePurchaseDocument
    {
        return parent::current();
    }

    /**
     * @return SavePurchaseDocument[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}