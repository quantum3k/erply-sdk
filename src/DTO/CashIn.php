<?php

namespace quantum3k\ErplySDK\DTO;

use quantum3k\ErplySDK\Collections\Attributes;
use quantum3k\ErplySDK\Traits\AddAttribute;

class CashIn extends BaseEntity
{
    use AddAttribute;

    public $transactionID;
    public $sum;
    public $currencyCode;
    public $currencyRate;
    public $warehouseID;
    public $warehouseName;
    public $pointOfSaleID;
    public $pointOfSaleName;
    public $employeeID;
    public $employeeName;
    public $dateTime;
    public $reasonID;
    public $comment;
    public $added;
    public $lastModified;

    /** @var Attributes */
    public $attributes;

    protected static $nested_fields = ['attributes' => Attributes::class];
}