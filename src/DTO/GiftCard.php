<?php

namespace quantum3k\ErplySDK\DTO;

class GiftCard extends BaseEntity
{
    public $giftCardID;
    public $typeID;
    public $code;
    public $value;
    public $balance;
    public $purchasingCustomerID;
    public $purchaseDateTime;
    public $redeemingCustomerID;
    public $redemptionDateTime;
    public $expirationDate;
    public $purchaseInvoiceID;
    public $purchaseWarehouseID;
    public $purchasePointOfSaleID;
    public $purchaseEmployeeID;
    public $redemptionWarehouseID;
    public $redemptionPointOfSaleID;
    public $redemptionInvoiceID;
    public $redemptionEmployeeID;
    public $vatrateID;
    public $information;
    public $added;
    public $lastModified;

    protected static $query_fields = [
        'giftCardID', 'typeID', 'code', 'value', 'balance', 'information', 'purchasingCustomerID',
        'purchaseDateTime', 'purchaseWarehouseID', 'purchasePointOfSaleID', 'purchaseInvoiceID', 'purchaseEmployeeID',
        'redeemingCustomerID', 'redemptionDateTime', 'redemptionWarehouseID', 'redemptionPointOfSaleID', 'redemptionInvoiceID',
        'redemptionEmployeeID', 'expirationDate', 'vatrateID'
    ];
}