<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveProductCategories;

class SaveProductCategoriesBulk extends BaseEntityBulk
{
    /**
     * @return SaveProductCategories[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}