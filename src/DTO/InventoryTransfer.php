<?php

namespace quantum3k\ErplySDK\DTO;

class InventoryTransfer extends BaseEntity
{
    public $inventoryTransferID;
    public $inventoryTransferNo;
    public $creatorID;
    public $warehouseFromID;
    public $warehouseToID;
    public $deliveryAddressID;
    public $currencyCode;
    public $currencyRate;
    public $type;
    public $inventoryTransferOrderID;
    public $followupInventoryTransferID;
    public $date;
    public $shippingDate;
    public $shippingDateActual;
    public $inventoryTransactionDate;
    public $status;
    public $notes;
    public $confirmed;
    public $added;
    public $lastModified;

    /** @var InventoryTransferRow */
    public $rows;

    /** @var Attribute[] */
    public $attributes;

    protected static $nested_fields = [
        'rows' => InventoryTransferRow::class,
        'attributes' => Attribute::class
    ];
    
    protected static $query_fields = [
        'inventoryTransferID', 'creatorID', 'warehouseFromID', 'warehouseToID',
        'deliveryAddressID', 'currencyCode', 'type', 'date', 'shippingDate', 'shippingDateActual',
        'inventoryTransferOrderID', 'status', 'notes', 'confirmed', 'rows', 'attributes'
    ];

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }

    public function addRow(): InventoryTransferRow
    {
        return $this->rows[] = new static::$nested_fields['rows']();
    }
}
