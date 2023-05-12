<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveProductCategory;

class SaveProductCategories extends BaseEntityCollection
{
    protected static $entity = SaveProductCategory::class;

    /**
     * @return SaveProductCategory
     */
    public function current(): SaveProductCategory
    {
        return parent::current();
    }

    /**
     * @return SaveProductCategory[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}