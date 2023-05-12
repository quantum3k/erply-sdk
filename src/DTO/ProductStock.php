<?php

namespace quantum3k\ErplySDK\DTO;

class ProductStock extends BaseEntity
{
    public $productID;
    public $amountInStock;
    public $amountReserved;
    public $suggestedPurchasePrice;
    public $averagePurchasePrice;
    public $averageCost;
    public $firstPurchaseDate;
    public $lastPurchaseDate;
    public $lastSoldDate;
    public $reorderPoint;
    public $restockLevel;
}