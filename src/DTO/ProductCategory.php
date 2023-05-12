<?php

namespace quantum3k\ErplySDK\DTO;

class ProductCategory extends BaseEntity
{
    public $productCategoryID;
    public $parentCategoryID;
    public $productCategoryName;
    public $name;
    public $nameEST;
    public $nameENG;
    public $nameLAT;
    public $nameRUS;
    public $nameFIN;

    /** @var Attribute[] */
    public $attributes;

    public $added;
    public $lastModified;

    protected static $nested_fields = ['attributes' => Attribute::class];

    protected static $query_fields = [
        'productCategoryID', 'name', 'nameEST', 'nameENG',
        'nameLAT', 'nameRUS', 'nameFIN', 'parentCategoryID', 'attributes'
    ];

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }
}
