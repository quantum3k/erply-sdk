<?php

namespace quantum3k\ErplySDK\DTO;

use quantum3k\ErplySDK\Collections\Attributes;
use quantum3k\ErplySDK\Traits\AddAttribute;

class InventoryTransfer extends BaseEntity
{
    use AddAttribute;

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

    /** @var InventoryTransferRow[] */
    public $rows;

    /** @var Attributes */
    public $attributes;

    protected static $nested_fields = [
        'rows' => InventoryTransferRow::class,
        'attributes' => Attributes::class
    ];
    
    protected static $query_fields = [
        'inventoryTransferID', 'creatorID', 'warehouseFromID', 'warehouseToID',
        'deliveryAddressID', 'currencyCode', 'type', 'date', 'shippingDate', 'shippingDateActual',
        'inventoryTransferOrderID', 'status', 'notes', 'confirmed', 'rows', 'attributes'
    ];

    public function addRow(): InventoryTransferRow
    {
        return $this->rows[] = new static::$nested_fields['rows']();
    }
}
