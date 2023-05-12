<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SalesDocumentActualReportsHTML;

class SalesDocumentActualReportsHTMLs extends BaseEntityCollection
{
    protected static $entity = SalesDocumentActualReportsHTML::class;

    /**
     * @return SalesDocumentActualReportsHTML
     */
    public function current(): SalesDocumentActualReportsHTML
    {
        return parent::current();
    }

    /**
     * @return SalesDocumentActualReportsHTML[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}