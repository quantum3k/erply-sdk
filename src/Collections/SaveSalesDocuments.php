<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveSalesDocument;

class SaveSalesDocuments extends BaseEntityCollection
{
    protected static $entity = SaveSalesDocument::class;

    /**
     * @return SaveSalesDocument
     */
    public function current(): SaveSalesDocument
    {
        return parent::current();
    }

    /**
     * @return SaveSalesDocument[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}