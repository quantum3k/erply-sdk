<?php

namespace quantum3k\ErplySDK\DTO;

class CustomerGroup extends BaseEntity
{
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

    /** @var Attribute[] */
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

    protected static $nested_fields = ['attributes' => Attribute::class];

    protected static $query_fields = [
        'customerGroupID', 'name', 'nameENG', 'nameSPA', 'nameGER', 'nameSWE', 'nameFIN',
        'nameRUS', 'nameEST', 'nameLAT', 'nameLIT', 'nameGRE', 'attributes'
    ];

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }
}