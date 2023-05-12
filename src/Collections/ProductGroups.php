<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\ProductGroup;

class ProductGroups extends BaseEntityCollection
{
    protected static $entity = ProductGroup::class;

    /**
     * @return ProductGroup
     */
    public function current(): ProductGroup
    {
        return parent::current();
    }

    /**
     * @return ProductGroup[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}
