<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveMatrixDimensions;

class SaveMatrixDimensionsBulk extends BaseEntityBulk
{
    /**
     * @return SaveMatrixDimensions[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}