<?php

namespace quantum3k\ErplySDK\DTO;

use quantum3k\ErplySDK\Collections\Attributes;
use quantum3k\ErplySDK\Traits\AddAttribute;

class InventoryRegistration extends BaseEntity
{
    use AddAttribute;

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

    /** @var Attributes */
    public $attributes;

    protected static $nested_fields = [
        'rows' => InventoryRegistrationRow::class,
        'attributes' => Attributes::class
    ];

    protected static $query_fields = [
        'inventoryRegistrationID', 'creatorID', 'warehouseID', 'stocktakingID',
        'supplierID', 'reasonID', 'currencyCode', 'date', 'cause', 'confirmed', 'rows', 'attributes'
    ];

    public function addRow(): InventoryRegistrationRow
    {
        return $this->rows[] = new static::$nested_fields['rows']();
    }
}
