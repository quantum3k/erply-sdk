<?php

namespace quantum3k\ErplySDK\DTO;

/**
 * todo Добавить вложенную модель Rows
 */
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
    public $rows;

    /** @var Attribute[] */
    public $attributes;

    protected static $nested_fields = ['attributes' => Attribute::class];

    protected static $query_fields = [
        'inventoryRegistrationID', 'creatorID', 'warehouseID', 'stocktakingID',
        'supplierID', 'reasonID', 'currencyCode', 'date', 'cause', 'confirmed', 'rows', 'attributes'
    ];

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }
}
