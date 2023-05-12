<?php

namespace quantum3k\ErplySDK\DTO;

class Brand extends BaseEntity
{
    public $brandID;
    public $name;
    public $added;
    public $lastModified;

    protected static $query_fields = ['brandID', 'name'];
}