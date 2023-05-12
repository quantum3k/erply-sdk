<?php

namespace quantum3k\ErplySDK\DTO;

class SupplierGroup extends BaseEntity
{
    public $supplierGroupID;
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
    public $added;
    public $lastModified;

    protected static $query_fields = [
        'supplierGroupID', 'name', 'nameENG', 'nameSPA', 'nameGER', 'nameSWE', 'nameFIN', 'nameRUS', 'nameEST', 'nameLAT', 'nameLIT', 'nameGRE'
    ];
}
