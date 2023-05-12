<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaleDocument;

class SaleDocuments extends BaseEntityCollection
{
    protected static $entity = SaleDocument::class;

    /**
     * @return SaleDocument
     */
    public function current(): SaleDocument
    {
        return parent::current();
    }

    /**
     * @return SaleDocument[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}
