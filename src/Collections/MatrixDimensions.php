<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\MatrixDimension;

class MatrixDimensions extends BaseEntityCollection
{
    protected static $entity = MatrixDimension::class;

    /**
     * @return MatrixDimension
     */
    public function current(): MatrixDimension
    {
        return parent::current();
    }

    /**
     * @return MatrixDimension[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}