<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\PurchaseDocument;

class PurchaseDocuments extends BaseEntityCollection
{
    protected static $entity = PurchaseDocument::class;

    /**
     * @return PurchaseDocument
     */
    public function current(): PurchaseDocument
    {
        return parent::current();
    }

    /**
     * @return PurchaseDocument[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}
