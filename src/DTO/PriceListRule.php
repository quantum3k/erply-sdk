<?php

namespace quantum3k\ErplySDK\DTO;

class PriceListRule extends BaseEntity
{
    public $type = null;
    public $discountPercent = null;
    public $price = null;
    public $amount = null;
    public $id = null;
    public $ruleID = null;

    protected static $query_fields = ['type', 'id', 'price' ,'discountPercent', 'amount'];
}