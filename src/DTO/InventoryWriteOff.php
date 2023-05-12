<?php

namespace quantum3k\ErplySDK\DTO;

/**
 * todo Добавить вложенную модель Rows
 */
class InventoryWriteOff extends BaseEntity
{
    public $inventoryWriteOffID;
    public $inventoryWriteOffNo;
    public $creatorID;
    public $warehouseID;
    public $stocktakingID;
    public $inventoryID;
    public $recipientID;
    public $currencyCode;
    public $currencyRate;
    public $date;
    public $inventoryTransactionDate;
    public $comments;
    public $reasonID;
    public $confirmed;
    public $added;
    public $lastModified;
    public $rows;

    /** @var Attribute[] */
    public $attributes;

    protected static $nested_fields = ['attributes' => Attribute::class];

    protected static $query_fields = [
        'inventoryWriteOffID', 'creatorID', 'reasonID', 'warehouseID', 'stocktakingID',
        'recipientID', 'currencyCode', 'date', 'comments', 'confirmed', 'rows', 'attributes'
    ];

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }
}
