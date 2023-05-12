<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveAddMatrixDimensionItem;

class SaveAddMatrixDimensionItems extends BaseEntityCollection
{
    protected static $entity = SaveAddMatrixDimensionItem::class;

    /**
     * @return SaveAddMatrixDimensionItem
     */
    public function current(): SaveAddMatrixDimensionItem
    {
        return parent::current();
    }

    /**
     * @return SaveAddMatrixDimensionItem[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}