<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\SessionKeyUser;

class SessionKeyUsers extends BaseEntityCollection
{
    protected static $entity = SessionKeyUser::class;

    /**
     * @return SessionKeyUser
     */
    public function current(): SessionKeyUser
    {
        return parent::current();
    }

    /**
     * @return SessionKeyUser[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}