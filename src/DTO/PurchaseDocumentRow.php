<?php

namespace quantum3k\ErplySDK\DTO;

class PurchaseDocumentRow extends BaseEntity
{
    public $stableRowID = null;
    public $productID = null;
    public $serviceID = null;
    public $itemName = null;
    public $code = null;
    public $code2 = null;
    public $vatrateID = null;
    public $amount = null;
    public $price = null;
    public $discount = null;
    public $deliveryDate = null;
    public $unitCost = null;
    public $costTotal = null;
    public $packageID = null;
    public $amountOfPackages = null;
    public $amountInPackage = null;
    public $packageType = null;
    public $packageTypeID = null;
    public $jdoc = null;
    public $supplierPriceListSupplierCode = null;
    public $supplierPriceListImportCode = null;
    public $supplierPriceListNotes = null;

    protected static $query_fields = [
        'stableRowID', 'productID', 'serviceID', 'itemName', 'vatrateID', 'amount',
        'price', 'discount', 'packageID', 'amountOfPackages', 'deliveryDate',
        'supplierPriceListSupplierCode', 'supplierPriceListImportCode', 'supplierPriceListNotes'
    ];
}