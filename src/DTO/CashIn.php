<?php

namespace quantum3k\ErplySDK\DTO;

class CashIn extends BaseEntity
{
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

    /** @var Attribute[] */
    public $attributes;

    protected static $nested_fields = ['attributes' => Attribute::class];

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }
}