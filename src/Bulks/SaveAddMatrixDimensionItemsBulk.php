<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveAddMatrixDimensionItems;

class SaveAddMatrixDimensionItemsBulk extends BaseEntityBulk
{
    /**
     * @return SaveAddMatrixDimensionItems[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}