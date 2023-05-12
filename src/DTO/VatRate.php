<?php

namespace quantum3k\ErplySDK\DTO;

class VatRate extends BaseEntity
{
    public $id;
    public $name;
    public $nameEST;
    public $nameENG;
    public $nameLAT;
    public $nameRUS;
    public $nameFIN;
    public $rate;
    public $code;
    public $active;
    public $isReverseVat;
    public $reverseRate;
    public $gstExemptTaxRateID;

    /** @var Attribute[] */
    public $attributes;

    public $ZIPCode;
    public $category;
    public $state;
    public $county;
    public $city;
    public $components;
    public $vatRateID;
    public $stateTaxRate;
    public $countyTaxRate;
    public $cityTaxRate;
    public $otherTaxName;
    public $otherTaxRate;

    protected static $nested_fields = ['attributes' => Attribute::class];

    protected static $query_fields = [
        'vatRateID', 'name', 'nameEST', 'nameENG', 'nameLAT', 'nameRUS', 'nameFIN', 'rate', 'code', 'active',
        'isReverseVat', 'reverseRate', 'gstExemptTaxRateID', 'attributes', 'ZIPCode', 'category', 'state',
        'stateTaxRate', 'county', 'countyTaxRate', 'city', 'cityTaxRate', 'otherTaxName', 'otherTaxRate'
    ];

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }
}
