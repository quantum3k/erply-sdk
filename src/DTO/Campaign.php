<?php

namespace quantum3k\ErplySDK\DTO;

/**
 * todo: есть ещё вложенные поля
 */
class Campaign extends BaseEntity
{
    public $campaignID;
    public $startDate;
    public $endDate;
    public $startTime;
    public $endTime;
    public $name;
    public $type;
    public $formula;
    public $warehouseIDs;
    public $warehouseID;
    public $tierID;
    public $storeGroup;
    public $storeRegions;
    public $customerGroups;
    public $canBeAppliedManuallyMultipleTimes;
    public $subsidy;
    public $subsidyValue;
    public $subsidyTypeID;
    public $page;
    public $positionOnPage;
    public $forecastUnits;
    public $purchaseTotalValue;
    public $purchaseTotalValueMax;
    public $purchasedProductGroupID;
    public $purchasedProductCategoryID;
    public $purchasedProductGroupIDs;
    public $purchasedProductCategoryIDs;
    public $purchasedBrandIDs;
    public $purchasedProducts;
    public $purchasedAmount;
    public $rewardPoints;
    public $requiredCouponID;
    public $requiredCouponCode;
    public $priceAtLeast;
    public $priceAtMost;
    public $requiresManagerOverride;
    public $percentageOffEntirePurchase;
    public $excludeDiscountedFromPercentageOffEntirePurchase;
    public $excludePromotionItemsFromPercentageOffEntirePurchase;
    public $percentageOffExcludedProducts;
    public $percentageOffIncludedProducts;
    public $sumOffEntirePurchase;
    public $percentageOffMatchingItems;
    public $sumOffMatchingItems;
    public $maximumNumberOfMatchingItems;
    public $sumOffExcludedProducts;
    public $sumOffIncludedProducts;
    public $specialPrice;
    public $awardedProductGroupID;
    public $awardedProductCategoryID;
    public $awardedProductGroupIDs;
    public $awardedProductCategoryIDs;
    public $awardedBrandIDs;
    public $awardedProducts;
    public $awardedAmount;
    public $excludedProducts;
    public $reasonID;
    public $lowestPriceItemIsAwarded;
    public $percentageOFF;
    public $discountForOneLine;
    public $enabled;
    public $sumOFF;
    public $maximumPointsDiscount;
    public $customerCanUseOnlyOnce;
    public $isBirthdayPromotion;
    public $oncePerBirthday;
    public $oncePerDay;
    public $onlyForDiscountedItems;
    public $restrictOnNoWarehouses;
    public $specialUnitPrice;
    public $maxItemsWithSpecialUnitPrice;
    public $redemptionLimit;
    public $isStackable;
    public $isHQPromotion;
    public $added;
    public $lastModified;

    /** @var Attribute[] */
    public $attributes;

    public $nameENG;
    public $nameSPA;
    public $nameGER;
    public $nameSWE;
    public $nameFIN;
    public $nameRUS;
    public $nameEST;
    public $nameLAT;
    public $nameLIT;
    public $nameGRE;
    public $storeRegionIDs;
    public $customerGroupIDs;
    public $purchasedProductSubsidies;
    public $awardedProductSubsidies;

    protected static $nested_fields = ['attributes' => Attribute::class];

    protected static $query_fields = [
        'campaignID', 'startDate', 'endDate', 'startTime', 'endTime', 'enabled',
        'name', 'nameENG', 'nameSPA', 'nameGER', 'nameSWE', 'nameFIN', 'nameRUS', 'nameEST', 'nameLAT', 'nameLIT', 'nameGRE',
        'type', 'warehouseID', 'warehouseIDs', 'tierID', 'storeGroup', 'storeRegionIDs', 'customerGroupIDs', 'subsidy',
        'subsidyValue', 'subsidyTypeID', 'page', 'positionOnPage', 'forecastUnits', 'purchaseTotalValue', 'purchaseTotalValueMax',
        'purchasedProductGroupID', 'purchasedProductCategoryID', 'purchasedProductGroupIDs', 'purchasedProductCategoryIDs',
        'purchasedBrandIDs', 'purchasedProducts', 'purchasedProductSubsidies', 'purchasedAmount', 'rewardPoints', 'priceAtLeast',
        'priceAtMost', 'percentageOffEntirePurchase', 'excludeDiscountedFromPercentageOffEntirePurchase',
        'excludePromotionItemsFromPercentageOffEntirePurchase', 'percentageOffExcludedProducts', 'percentageOffIncludedProducts',
        'sumOffEntirePurchase', 'sumOffExcludedProducts', 'sumOffIncludedProducts', 'specialPrice', 'awardedAmount', 'awardedProductGroupID',
        'awardedProductCategoryID', 'awardedProductGroupIDs', 'awardedProductCategoryIDs', 'awardedBrandIDs', 'awardedProducts',
        'awardedProductSubsidies', 'excludedProducts', 'lowestPriceItemIsAwarded', 'percentageOFF', 'discountForOneLine', 'sumOFF',
        'percentageOffMatchingItems', 'sumOffMatchingItems', 'maximumNumberOfMatchingItems', 'maximumPointsDiscount', 'customerCanUseOnlyOnce',
        'oncePerDay', 'isBirthdayPromotion', 'oncePerBirthday', 'onlyForDiscountedItems', 'restrictOnNoWarehouses', 'requiresManagerOverride',
        'reasonID', 'specialUnitPrice', 'maxItemsWithSpecialUnitPrice', 'redemptionLimit', 'isStackable'
    ];

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }
}
