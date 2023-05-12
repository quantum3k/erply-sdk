<?php

namespace quantum3k\ErplySDK\DTO;

class ProductGroup extends BaseEntity
{
    public $productGroupID;
    public $name;
    public $nameEST;
    public $nameENG;
    public $nameLAT;
    public $nameRUS;
    public $nameFIN;
    public $showInWebshop;
    public $nonDiscountable;
    public $positionNo;
    public $parentGroupID;
    public $images;
    public $subGroups;

    /** @var Attribute[] */
    public $attributes;
    public $vatrates;

    protected static $nested_fields = ['attributes' => Attribute::class];

    protected static $query_fields = [
        'productGroupID', 'name', 'nameEST', 'nameENG', 'nameLAT', 'nameRUS',
        'nameFIN', 'parentGroupID', 'showInWebshop', 'nonDiscountable', 'attributes'
    ];

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }
}
