<?php

namespace quantum3k\ErplySDK\DTO;

class Warehouse extends BaseEntity
{
    public $warehouseID;
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
    public $code;
    public $addressID;
    public $address;
    public $street;
    public $address2;
    public $city;
    public $ZIPcode;
    public $state;
    public $country;
    public $companyName;
    public $companyCode;
    public $companyVatNumber;
    public $phone;
    public $fax;
    public $email;
    public $website;
    public $bankName;
    public $bankAccountNumber;
    public $iban;
    public $swift;
    public $storeRegionID;
    public $assortmentID;
    public $pricelistID;
    public $pricelistID2;
    public $pricelistID3;
    public $pricelistID4;
    public $pricelistID5;
    public $storeGroups;
    public $stateGroup;
    public $defaultCustomerGroupID;
    public $onlineAppointmentsEnabled;
    public $isOfflineInventory;
    public $timeZone;

    /** @var Attribute[] */
    public $attributes;

    public $bank;
    public $account;
    public $shift1Start;
    public $shift1End;
    public $shift2Start;
    public $shift2End;
    public $addAccessForAllUsers;

    protected static $nested_fields = ['attributes' => Attribute::class];

    protected static $query_fields = [
        'warehouseID', 'name', 'nameENG', 'nameSPA', 'nameGER', 'nameSWE', 'nameFIN', 'nameRUS', 'nameEST',
        'nameLAT', 'nameLIT', 'nameGRE', 'code', 'storeRegionID', 'assortmentID', 'priceListID', 'priceListID2',
        'priceListID3', 'storeGroups', 'stateGroup', 'companyName', 'companyCode', 'companyVatNumber', 'addressID',
        'timeZone', 'phone', 'fax', 'email', 'website', 'bank', 'account', 'swift', 'iban', 'shift1Start', 'shift1End',
        'shift2Start', 'shift2End', 'addAccessForAllUsers', 'attributes'
    ];

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }
}
