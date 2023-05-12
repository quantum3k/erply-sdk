<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\Event;

class Events extends BaseEntityCollection
{
    protected static $entity = Event::class;

    /**
     * @return Event
     */
    public function current(): Event
    {
        return parent::current();
    }

    /**
     * @return Event[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}
