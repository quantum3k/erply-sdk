<?php

namespace quantum3k\ErplySDK\DTO;

class UserGroup extends BaseEntity
{
    public $userGroupID;
    public $name;
    public $added;
    public $addedByUserName;
    public $lastModified;
    public $lastModifiedByUserName;

    /** @var Attribute[] */
    public $attributes;

    protected static $nested_fields = ['attributes' => Attribute::class];

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }
}