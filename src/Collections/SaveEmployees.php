<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveEmployee;

class SaveEmployees extends BaseEntityCollection
{
    protected static $entity = SaveEmployee::class;

    /**
     * @return SaveEmployee
     */
    public function current(): SaveEmployee
    {
        return parent::current();
    }

    /**
     * @return SaveEmployee[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}