<?php

namespace quantum3k\ErplySDK\DTO;

class InventoryTransferRow extends BaseEntity
{
    public $stableRowID;
    public $productID;
    public $price;
    public $amount;
    public $cost;
    public $packageID;
    public $amountOfPackages;
    public $amountInPackage;
    public $packageType;
    public $packageTypeID;
    public $jdoc;
    
    protected static $query_fields = [
        'stableRowID', 'stableRowID', 'amount', 'price', 'packageID', 'amountOfPackages'
    ];
}
