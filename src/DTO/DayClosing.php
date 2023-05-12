<?php

namespace quantum3k\ErplySDK\DTO;

class DayClosing extends BaseEntity
{
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

    /** @var Attribute[] */
    public $attributes;

    protected static $nested_fields = ['attributes' => Attribute::class];

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }
}