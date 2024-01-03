<?php

namespace quantum3k\ErplySDK\DTO;

use quantum3k\ErplySDK\Collections\Attributes;
use quantum3k\ErplySDK\Traits\AddAttribute;

class DayClosing extends BaseEntity
{
    use AddAttribute;

    public $dayID;
    public $warehouseID;
    public $warehouseName;
    public $pointOfSaleID;
    public $pointOfSaleName;
    public $drawerID;
    public $shiftType;
    public $employees;
    public $openedUnixTime;
    public $openedByEmployeeID;
    public $openedByEmployeeName;
    public $openedSum;
    public $closedUnixTime;
    public $closedByEmployeeID;
    public $closedByEmployeeName;
    public $closedSum;
    public $bankedSum;
    public $notes;
    public $reasonID;
    public $currencyCode;

    /** @var Attributes */
    public $attributes;

    protected static $nested_fields = ['attributes' => Attributes::class];
}