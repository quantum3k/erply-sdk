<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\ProductPictures;

class ProductPicturesBulk extends BaseEntityBulk
{
    /**
     * @return ProductPictures[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}