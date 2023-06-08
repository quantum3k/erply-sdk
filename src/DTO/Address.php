<?php

namespace quantum3k\ErplySDK\DTO;

class Address extends BaseEntity
{
    public $addressID;
    public $ownerID;
    public $typeID;
    public $typeName;
    public $typeActivelyUsed;
    public $street;
    public $address2;
    public $city;
    public $postalCode;
    public $state;
    public $country;
    public $added;
    public $lastModified;
    public $lastModifierUsername;
    public $lastModifierEmployeeID;

    /** @var Attribute[] */
    public $attributes;

    public static $nested_fields = ['attributes' => Attribute::class];

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }
}
