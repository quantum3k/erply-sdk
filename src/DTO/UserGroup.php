<?php

namespace quantum3k\ErplySDK\DTO;

use quantum3k\ErplySDK\Collections\Attributes;
use quantum3k\ErplySDK\Traits\AddAttribute;

class UserGroup extends BaseEntity
{
    use AddAttribute;

    public $userGroupID;
    public $name;
    public $added;
    public $addedByUserName;
    public $lastModified;
    public $lastModifiedByUserName;

    /** @var Attributes */
    public $attributes;

    protected static $nested_fields = ['attributes' => Attributes::class];
}