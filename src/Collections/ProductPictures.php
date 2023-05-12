<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\ProductPicture;

class ProductPictures extends BaseEntityCollection
{
    protected static $entity = ProductPicture::class;

    /**
     * @return ProductPicture
     */
    public function current(): ProductPicture
    {
        return parent::current();
    }

    /**
     * @return ProductPicture[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}