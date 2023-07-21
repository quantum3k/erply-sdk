<?php

namespace quantum3k\ErplySDK\DTO;

class InventoryWriteOffRow extends BaseEntity
{
    public $stableRowID;
    public $productID;
    public $price;
    public $amount;
    public $cost;
    public $jdoc;
    
    protected static $query_fields = [
        'stableRowID', 'productID', 'amount', 'price'
    ];
}
