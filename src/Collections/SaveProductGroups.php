<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveProductGroup;

class SaveProductGroups extends BaseEntityCollection
{
    protected static $entity = SaveProductGroup::class;

    /**
     * @return SaveProductGroup
     */
    public function current(): SaveProductGroup
    {
        return parent::current();
    }

    /**
     * @return SaveProductGroup[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}