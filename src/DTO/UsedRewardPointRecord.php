<?php

namespace quantum3k\ErplySDK\DTO;

class UsedRewardPointRecord extends BaseEntity
{
    public $transactionID;
    public $customerID;
    public $customerCardNumber;
    public $invoiceID;
    public $invoiceNo;
    public $campaignID;
    public $warehouseID;
    public $pointOfSaleID;
    public $pointOfSaleName;
    public $employeeID;
    public $employeeName;
    public $usedPoints;
    public $createdUnixTime;
    public $issuedCouponID;
    public $description;
}