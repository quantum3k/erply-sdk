<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\ProductCategory;

class ProductCategories extends BaseEntityCollection
{
    protected static $entity = ProductCategory::class;

    /**
     * @return ProductCategory
     */
    public function current(): ProductCategory
    {
        return parent::current();
    }

    /**
     * @return ProductCategory[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}
