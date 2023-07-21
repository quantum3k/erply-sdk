<?php

namespace quantum3k\ErplySDK\DTO;

class InventoryRegistrationRow extends BaseEntity
{
    public $productID;
    public $price;
    public $amount;
    public $cost;
    public $packageID;
    public $amountOfPackages;
    public $amountInPackage;
    public $packageType;
    public $packageTypeID;

    protected static $query_fields = [
        'productID', 'amount', 'price', 'packageID', 'amountOfPackages'
    ];
}
