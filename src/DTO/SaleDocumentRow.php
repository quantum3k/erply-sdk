<?php

namespace quantum3k\ErplySDK\DTO;

class SaleDocumentRow extends BaseEntity
{
    public $rowID;
    public $stableRowID;
    public $productID;
    public $serviceID;
    public $itemName;
    public $code;
    public $barcode;
    public $vatrateID;
    public $amount;
    public $price;
    public $discount;
    public $finalNetPrice;
    public $finalPriceWithVAT;
    public $rowNetTotal;
    public $rowVAT;
    public $rowTotal;
    public $deliveryDate;
    public $returnReasonID;
    public $employeeID;
    public $campaignIDs;
    public $containerID;
    public $containerAmount;
    public $originalPriceIsZero;
    public $packageID;
    public $amountOfPackages;
    public $amountInPackage;
    public $packageType;
    public $packageTypeID;
    public $sourceWaybillID;
    public $billingStatementID;
    public $billingStartDate;
    public $billingEndDate;
    public $batch;
    public $warehouseValue;
    public $jdoc;

    protected static $query_fields = [
        'stableRowID', 'productID', 'serviceID', 'itemName', 'vatrateID', 'amount', 'price', 'discount',
        'employeeID', 'campaignIDs', 'campaignID', 'packageID', 'amountOfPackages', 'batch', 'ZIPCode',
        'State', 'County', 'City', 'Category', 'StateSalesTax', 'CountySalesTax', 'CitySalesTax',
        'TotalSalesTax', 'returnReasonID', 'deliveryDate', 'sourceWaybillID', 'billingStatementID',
        'billingReadingIDs', 'billingStartDate', 'billingEndDate'
    ];
}