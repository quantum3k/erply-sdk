<?php

namespace quantum3k\ErplySDK\DTO;

class Stocktaking extends BaseEntity
{
    public $stocktakingID;
    public $warehouses;
    public $prodgroupID;
    public $productCategoryID;
    public $brandID;
    public $supplierID;
    public $locationInWarehouse;
    public $onlyItemsWithoutWarehouseLocation;
    public $excludeReservations;
    public $status;
    public $numberOfRows;
    public $inventoryRegistrationID;
    public $inventoryWriteOffID;
    public $added;
    public $addedByUserName;
    public $addedByEmployeeID;
    public $confirmedTimestamp;
    public $confirmedByUserName;
    public $confirmedByEmployeeID;
    public $lastModified;

    public $warehouseID;
    public $confirmed;
    public $recordCurrentQuantities;
    public $includeProducts;
    public $productGroupID;

    protected static $query_fields = [
        'stocktakingID', 'warehouseID', 'confirmed', 'recordCurrentQuantities', 'includeProducts', 'productGroupID',
        'productCategoryID', 'brandID', 'supplierID', 'locationInWarehouse', 'excludeReservations', 'onlyItemsWithoutWarehouseLocation'
    ];
}