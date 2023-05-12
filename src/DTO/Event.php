<?php

namespace quantum3k\ErplySDK\DTO;

class Event extends BaseEntity
{
    public $id;
    public $eventID;
    public $description;
    public $typeID;
    public $typeName;
    public $startTime;
    public $endTime;
    public $customerID;
    public $customerName;
    public $contactID;
    public $contactName;
    public $projectID;
    public $projectName;
    public $employeeID;
    public $employeeName;
    public $submitterID;
    public $submitterName;
    public $supplierID;
    public $supplierName;
    public $statusID;
    public $statusName;
    public $completed;
    public $resourceID;
    public $resourceName;
    public $productID;
    public $productName;
    public $warehouseID;
    public $checkInTime;
    public $checkOutTime;
    public $serviceStartTime;
    public $type;
    public $status;
    public $notes;
    public $lastModified;

    /** @var Attribute[] */
    public $attributes;

    public $added;
    public $notOverlapping;
    
    protected static $nested_fields = ['attributes' => Attribute::class];

    protected static $query_fields = [
        'id', 'description', 'typeID', 'type', 'startTime', 'endTime', 'customerID',
        'contactID', 'projectID', 'employeeID', 'submitterID', 'supplierID', 'statusID', 'status', 'resourceID',
        'productID', 'warehouseID', 'checkInTime', 'checkOutTime', 'serviceStartTime', 'completed', 'notes',
        'notOverlapping', 'attributes'
    ];

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }
}
