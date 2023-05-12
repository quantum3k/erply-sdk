<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\UserGroup;

class UserGroups extends BaseEntityCollection
{
    protected static $entity = UserGroup::class;

    /**
     * @return UserGroup
     */
    public function current(): UserGroup
    {
        return parent::current();
    }

    /**
     * @return UserGroup[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}