<?php

namespace quantum3k\ErplySDK\DTO;

class ProductPrice extends BaseEntity
{
    public $productID;
    public $defaultPrice;
    public $defaultPriceWithVAT;
    public $specialPrice;
    public $specialPriceWithVAT;
    public $priceCalculationSteps;
}