<?php

namespace quantum3k\ErplySDK\DTO;

use quantum3k\ErplySDK\Collections\Attributes;
use quantum3k\ErplySDK\Traits\AddAttribute;

class PointOfSale extends BaseEntity
{
    use AddAttribute;

    public $pointOfSaleID;
    public $type;
    public $name;
    public $warehouseID;
    public $warehouseName;
    public $address;
    public $phone;
    public $storeHours;
    public $geoLatitude;
    public $geoLongitude;
    public $paymentServiceProvider;
    public $receiptWidth;
    public $vatrateID;
    public $vatrate;
    public $vatSumRange1;
    public $vatrateIDrange1;
    public $vatSumRange2;
    public $vatrateIDrange2;
    public $printSalesPersonName;
    public $shopName;
    public $defaultCustomerID;
    public $storeCreditEnabled;
    public $lastInvoiceNo;
    public $lastCouponNo;
    public $quickButtons;
    public $added;
    public $lastModified;

    /** @var Attributes */
    public $attributes;

    protected static $nested_fields = ['attributes' => Attributes::class];
}
