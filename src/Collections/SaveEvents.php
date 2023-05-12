<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SaveEvent;

class SaveEvents extends BaseEntityCollection
{
    protected static $entity = SaveEvent::class;

    /**
     * @return SaveEvent
     */
    public function current(): SaveEvent
    {
        return parent::current();
    }

    /**
     * @return SaveEvent[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}