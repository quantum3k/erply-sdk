<?php

namespace quantum3k\ErplySDK\DTO;

class EarnedRewardPointRecord extends BaseEntity
{
    public $transactionID;
    public $customerID;
    public $customerCardNumber;
    public $invoiceID;
    public $invoiceNo;
    public $earnedPoints;
    public $remainingPoints;
    public $createdUnixTime;
    public $expiryUnixTime;
    public $pointOfSaleID;
    public $pointOfSaleName;
    public $employeeID;
    public $employeeName;
    public $description;
    public $points;

    protected static $query_fields = ['customerID', 'invoiceID', 'points', 'createdUnixTime', 'expiryUnixTime', 'pointOfSaleID', 'employeeID', 'description'];
}