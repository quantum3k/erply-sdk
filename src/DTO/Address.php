<?php

namespace quantum3k\ErplySDK\DTO;

use quantum3k\ErplySDK\Collections\Attributes;
use quantum3k\ErplySDK\Traits\AddAttribute;

class Address extends BaseEntity
{
    use AddAttribute;

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

    /** @var Attributes */
    public $attributes;

    public static $nested_fields = ['attributes' => Attributes::class];
}
