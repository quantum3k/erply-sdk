<?php

namespace quantum3k\ErplySDK\DTO;

class UserOperationsLog extends BaseEntity
{
    public $logID;
    public $userName;
    public $timestamp;
    public $tableName;
    public $itemID;
    public $operation;
    public $module;

    protected static $query_fields = [
        'tableName', 'userName', 'timestamp', 'operation', 'itemID', 'module'
    ];
}