<?php

namespace quantum3k\ErplySDK\DTO;

class CustomerRewardPoint extends BaseEntity
{
    public $points;

    public $transactionID;
    public $customerID;
    public $createdUnixTime;
    public $expiryUnixTime;
    public $invoiceID;
    public $pointOfSaleID;
    public $employeeID;
    public $description;

    protected static $query_fields = ['customerID', 'invoiceID', 'points', 'createdUnixTime',
        'expiryUnixTime', 'pointOfSaleID', 'employeeID', 'description'];
}