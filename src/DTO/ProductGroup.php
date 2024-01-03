<?php

namespace quantum3k\ErplySDK\DTO;

use quantum3k\ErplySDK\Collections\Attributes;
use quantum3k\ErplySDK\Traits\AddAttribute;

class ProductGroup extends BaseEntity
{
    use AddAttribute;

    public $productGroupID;
    public $name;
    public $nameEST;
    public $nameENG;
    public $nameLAT;
    public $nameRUS;
    public $nameFIN;
    public $showInWebshop;
    public $nonDiscountable;
    public $positionNo;
    public $parentGroupID;
    public $images;
    public $subGroups;

    /** @var Attributes */
    public $attributes;
    public $vatrates;

    protected static $nested_fields = ['attributes' => Attributes::class];

    protected static $query_fields = [
        'productGroupID', 'name', 'nameEST', 'nameENG', 'nameLAT', 'nameRUS',
        'nameFIN', 'parentGroupID', 'showInWebshop', 'nonDiscountable', 'attributes'
    ];
}
