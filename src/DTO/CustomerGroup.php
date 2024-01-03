<?php

namespace quantum3k\ErplySDK\DTO;

use quantum3k\ErplySDK\Collections\Attributes;
use quantum3k\ErplySDK\Traits\AddAttribute;

class CustomerGroup extends BaseEntity
{
    use AddAttribute;

    public $customerGroupID;
    public $parentID;
    public $name;
    public $pricelistID;
    public $pricelistID2;
    public $pricelistID3;
    public $pricelistID4;
    public $pricelistID5;
    public $added;
    public $lastModified;

    /** @var Attributes */
    public $attributes;

    public $nameENG;
    public $nameSPA;
    public $nameGER;
    public $nameSWE;
    public $nameFIN;
    public $nameRUS;
    public $nameEST;
    public $nameLAT;
    public $nameLIT;
    public $nameGRE;

    protected static $nested_fields = ['attributes' => Attributes::class];

    protected static $query_fields = [
        'customerGroupID', 'name', 'nameENG', 'nameSPA', 'nameGER', 'nameSWE', 'nameFIN',
        'nameRUS', 'nameEST', 'nameLAT', 'nameLIT', 'nameGRE', 'attributes'
    ];
}