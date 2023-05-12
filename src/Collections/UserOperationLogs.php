<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\UserOperationsLog;

class UserOperationLogs extends BaseEntityCollection
{
    protected static $entity = UserOperationsLog::class;

    /**
     * @return UserOperationsLog
     */
    public function current(): UserOperationsLog
    {
        return parent::current();
    }

    /**
     * @return UserOperationsLog[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}