<?php

namespace quantum3k\ErplySDK\DTO;

class IssuedCoupon extends BaseEntity
{
    public $issuedCouponID;
    public $couponID;
    public $couponCode;
    public $campaignName;
    public $uniqueIdentifier;
    public $issuedTimestamp;
    public $expiryDate;
    public $issuedInvoiceID;
    public $issuedInvoiceNo;
    public $issuedCustomerID;
    public $issuedCustomerCardNumber;
    public $issuedWarehouseID;
    public $issuedWarehouseCode;
    public $issuedPointOfSaleID;
    public $issuedEmployeeID;
    public $isPrintedAutomatically;
    public $redeemedTimestamp;
    public $redeemedInvoiceID;
    public $redeemedInvoiceNo;
    public $redeemedCustomerID;
    public $redeemedCustomerCardNumber;
    public $redeemedWarehouseID;
    public $redeemedWarehouseCode;
    public $redeemedPointOfSaleID;
    public $redeemedEmployeeID;
    public $invoiceID;
    public $customerID;
    public $warehouseID;
    public $pointOfSaleID;
    public $employeeID;
    public $timestamp;
    public $doNotSubtractRewardPoints;
    public $status;
    public $added;
    public $lastModified;

    protected static $query_fields = [
        'issuedCouponID', 'couponID', 'uniqueIdentifier', 'invoiceID', 'customerID',
        'warehouseID', 'pointOfSaleID', 'employeeID', 'timestamp', 'expiryDate', 'isPrintedAutomatically',
        'doNotSubtractRewardPoints', 'redeemedInvoiceID', 'redeemedCustomerID', 'redeemedTimestamp',
        'redeemedWarehouseID', 'redeemedPointOfSaleID', 'redeemedEmployeeID'
    ];
}