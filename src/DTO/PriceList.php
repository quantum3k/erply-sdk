<?php

namespace quantum3k\ErplySDK\DTO;

class PriceList extends BaseEntity
{
    public $pricelistID;
    public $name;
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
    public $startDate;
    public $endDate;
    public $active;
    public $type;
    public $added;
    public $addedByUserName;
    public $lastModified;
    public $lastModifiedByUserName;

    /** @var PriceListRule[] */
    public $pricelistRules;

    /** @var Attribute[] */
    public $attributes;


    protected static $nested_fields = [
        'pricelistRules' => PriceListRule::class,
        'attributes' => Attribute::class
    ];

    protected static $query_fields = [
        'pricelistID', 'name', 'nameENG', 'nameSPA', 'nameGER',
        'nameSWE', 'nameFIN', 'nameRUS', 'nameEST', 'nameLAT', 'nameLIT', 'nameGRE', 'startDate',
        'endDate', 'active', 'type', 'pricelistRules', 'attributes'
    ];

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }

    public function addPriceListRules(): PriceListRule
    {
        return $this->pricelistRules[] = new static::$nested_fields['pricelistRules']();
    }
}
