<?php

namespace quantum3k\ErplySDK\DTO;

/**
 * todo Добавить вложенную модель Rows
 */
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
    public $rows;

    /** @var Attribute[] */
    public $attributes;
    
    protected static $query_fields = [
        'inventoryTransferID', 'creatorID', 'warehouseFromID', 'warehouseToID',
        'deliveryAddressID', 'currencyCode', 'type', 'date', 'shippingDate', 'shippingDateActual',
        'inventoryTransferOrderID', 'status', 'notes', 'confirmed', 'rows', 'attributes'
    ];
}
