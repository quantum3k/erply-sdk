<?php

namespace quantum3k\ErplySDK\DTO;

class Currency extends BaseEntity
{
    public $currencyID;
    public $code;
    public $name;
    public $rate;
    public $default;
    public $nameShort;
    public $nameFraction;
    public $prefix;
    public $suffix;
    public $added;
    public $lastModified;

    public $nameEST;
    public $nameENG;
    public $nameLAT;
    public $nameRUS;
    public $nameFIN;
    public $nameShortEST;
    public $nameShortENG;
    public $nameShortLAT;
    public $nameShortRUS;
    public $nameShortFIN;
    public $nameFractionEST;
    public $nameFractionENG;
    public $nameFractionLAT;
    public $nameFractionRUS;
    public $nameFractionFIN;

    protected static $query_fields = ['currencyID', 'name', 'nameEST', 'nameENG', 'nameLAT', 'nameRUS', 'nameFIN', 'nameShort',
        'nameShortEST', 'nameShortENG', 'nameShortLAT', 'nameShortRUS', 'nameShortFIN', 'nameFraction', 'nameFractionEST',
        'nameFractionENG', 'nameFractionLAT', 'nameFractionRUS', 'nameFractionFIN', 'rate', 'code'];
}
