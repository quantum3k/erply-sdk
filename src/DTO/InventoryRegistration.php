<?php

namespace quantum3k\ErplySDK\DTO;

class InventoryRegistration extends BaseEntity
{
    public $inventoryRegistrationID;
    public $inventoryRegistrationNo;
    public $creatorID;
    public $warehouseID;
    public $stocktakingID;
    public $inventoryID;
    public $supplierID;
    public $reasonID;
    public $currencyCode;
    public $currencyRate;
    public $date;
    public $inventoryTransactionDate;
    public $cause;
    public $confirmed;
    public $added;
    public $lastModified;

    /** @var InventoryRegistrationRow[] */
    public $rows;

    /** @var Attribute[] */
    public $attributes;

    protected static $nested_fields = [
        'rows' => InventoryRegistrationRow::class,
        'attributes' => Attribute::class
    ];

    protected static $query_fields = [
        'inventoryRegistrationID', 'creatorID', 'warehouseID', 'stocktakingID',
        'supplierID', 'reasonID', 'currencyCode', 'date', 'cause', 'confirmed', 'rows', 'attributes'
    ];

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }

    public function addRow(): InventoryRegistrationRow
    {
        return $this->rows[] = new static::$nested_fields['rows']();
    }
}
