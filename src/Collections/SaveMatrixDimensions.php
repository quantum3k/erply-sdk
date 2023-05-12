<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveMatrixDimension;

class SaveMatrixDimensions extends BaseEntityCollection
{
    protected static $entity = SaveMatrixDimension::class;

    /**
     * @return SaveMatrixDimension
     */
    public function current(): SaveMatrixDimension
    {
        return parent::current();
    }

    /**
     * @return SaveMatrixDimension[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}