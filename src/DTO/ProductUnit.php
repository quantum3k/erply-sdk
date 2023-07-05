<?php

namespace quantum3k\ErplySDK\DTO;

class ProductUnit extends BaseEntity
{
    public $unitID;
    public $productUnitID;
    public $name;
    public $nameEST;
    public $nameENG;
    public $nameLAT;
    public $nameRUS;
    public $nameFIN;

    protected static $query_fields = ['productUnitID', 'name', 'nameEST', 'nameENG', 'nameLAT', 'nameRUS', 'nameFIN'];
}