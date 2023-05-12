<?php

namespace quantum3k\ErplySDK\DTO;

class Product extends BaseEntity
{
    public $productID;
    public $type;
    public $active;
    public $status;
    public $name;
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
    public $code;
    public $code2;
    public $code3;
    public $supplierCode;
    public $code5;
    public $code6;
    public $code7;
    public $code8;
    public $groupID;
    public $groupName;
    public $price;
    public $priceWithVAT;
    public $netPrice;
    public $displayedInWebshop;
    public $categoryID;
    public $categoryName;
    public $supplierID;
    public $supplierName;
    public $unitID;
    public $unitName;
    public $taxFree;
    public $deliveryTime;
    public $vatrateID;
    public $vatrate;
    public $hasQuickSelectButton;
    public $isGiftCard;
    public $isRegularGiftCard;
    public $nonDiscountable;
    public $nonRefundable;
    public $manufacturerName;
    public $priorityGroupID;
    public $countryOfOriginID;
    public $brandID;
    public $brandName;
    public $width;
    public $height;
    public $length;
    public $lengthInMinutes;
    public $setupTimeInMinutes;
    public $cleanupTimeInMinutes;
    public $walkInService;
    public $rewardPointsNotAllowed;
    public $nonStockProduct;
    public $hasSerialNumbers;
    public $soldInPackages;
    public $cashierMustEnterPrice;
    public $netWeight;
    public $grossWeight;
    public $volume;
    public $description;
    public $longdesc;
    public $descriptionEST;
    public $longdescEST;
    public $descriptionENG;
    public $longdescENG;
    public $descriptionRUS;
    public $longdescRUS;
    public $descriptionFIN;
    public $longdescFIN;
    public $cost;
    public $FIFOCost;
    public $purchasePrice;
    public $backbarCharges;
    public $added;
    public $addedByUsername;
    public $lastModified;
    public $lastModifiedByUsername;

    /** @var ProductPicture[] */
    public $images;

    public $warehouses;
    public $variationDescription;
    public $productVariations;
    public $variationList;
    public $parentProductID;
    public $containerID;
    public $containerName;
    public $containerCode;
    public $containerAmount;
    public $packagingType;
    public $packages;
    public $productPackages;
    public $replacementProducts;
    public $relatedProducts;
    public $relatedFiles;
    public $productComponents;
    public $priceListPrice;
    public $priceListPriceWithVat;
    public $priceCalculationSteps;
    public $locationInWarehouse;
    public $locationInWarehouseID;
    public $locationInWarehouseName;
    public $locationInWarehouseText;
    public $reorderMultiple;
    public $extraField1Title;
    public $extraField1ID;
    public $extraField1Code;
    public $extraField1Name;
    public $extraField2Title;
    public $extraField2ID;
    public $extraField2Code;
    public $extraField2Name;
    public $extraField3Title;
    public $extraField3ID;
    public $extraField3Code;
    public $extraField3Name;
    public $extraField4Title;
    public $extraField4ID;
    public $extraField4Code;
    public $extraField4Name;

    public $salesPackageClearBrownGlass;
    public $salesPackageGreenOtherGlass;
    public $salesPackagePlasticPpPe;
    public $salesPackagePlasticPet;
    public $salesPackageMetalFe;
    public $salesPackageMetalAl;
    public $salesPackageOtherMetal;
    public $salesPackageCardboard;
    public $salesPackageWood;
    public $groupPackagePaper;
    public $groupPackagePlastic;
    public $groupPackageMetal;
    public $groupPackageWood;
    public $transportPackageWood;
    public $transportPackagePlastic;
    public $transportPackageCardboard;

    public $registryNumber;
    public $alcoholPercentage;
    public $batches;
    public $exciseDeclaration;
    public $exciseFermentedProductUnder6;
    public $exciseWineOver6;
    public $exciseFermentedProductOver6;
    public $exciseIntermediateProduct;
    public $exciseOtherAlcohol;
    public $excisePackaging;

    /** @var Attribute[] */
    public $attributes;

    /** @var LongAttribute[] */
    public $longAttributes;

    public $parameters;
    public $productReplacementHistory;
    public $replacementProductIDs;
    public $relatedProductIDs;

    protected static $nested_fields = [
        'images' => ProductPicture::class,
        'attributes' => Attribute::class,
        'longAttributes' => LongAttribute::class,
    ];

    /**
     * todo проработать запросы для вложенных элементов: parameters, productComponents
     */

    protected static $query_fields = [
        'productID', 'type', 'groupID', 'unitID', 'brandID', 'supplierID', 'vatrateID', 'taxFree',
        'code', 'code2', 'code3', 'supplierCode', 'code5', 'code6', 'code7', 'code8', 'active', 'status', 'displayedInWebshop',
        'name', 'nameENG', 'nameSPA', 'nameGER', 'nameSWE', 'nameFIN', 'nameRUS', 'nameEST', 'nameLAT', 'nameLIT', 'nameGRE',
        'description', 'descriptionEST', 'descriptionENG', 'descriptionRUS', 'descriptionFIN', 'longdesc', 'longdescEST',
        'longdescENG', 'longdescRUS', 'longdescFIN', 'length', 'width', 'height', 'netWeight', 'grossWeight', 'volume',
        'netPrice', 'priceWithVAT', 'hasQuickSelectButton', 'isGiftCard', 'isRegularGiftCard', 'nonDiscountable',
        'nonRefundable', 'lengthInMinutes', 'setupTimeInMinutes', 'cleanupTimeInMinutes', 'rewardPointsNotAllowed', 'cost',
        'manufacturerName', 'categoryID', 'priorityGroupID', 'countryOfOriginID', 'containerID', 'containerAmount', 'deliveryTime',
        'backbarCharges', 'labelsNotNeeded', 'nonStockProduct', 'cashierMustEnterPrice', 'walkInService', 'packagingType',
        'extraField1ID', 'extraField2ID', 'extraField3ID', 'extraField4ID', 'reorderMultiple', 'replacementProductIDs',
        'relatedProductIDs', 'parentProductID', 'locationInWarehouseID', 'locationInWarehouseText', 'salesPackageClearBrownGlass',
        'salesPackageGreenOtherGlass', 'salesPackagePlasticPpPe', 'salesPackagePlasticPet', 'salesPackageMetalFe',
        'salesPackageMetalAl', 'salesPackageOtherMetal', 'salesPackageCardboard', 'salesPackageWood', 'groupPackagePaper',
        'groupPackagePlastic', 'groupPackageMetal', 'groupPackageWood', 'transportPackageWood', 'transportPackagePlastic',
        'transportPackageCardboard', 'registryNumber', 'alcoholPercentage', 'batches', 'exciseDeclaration',
        'exciseFermentedProductUnder6', 'exciseWineOver6', 'exciseFermentedProductOver6', 'exciseIntermediateProduct',
        'exciseOtherAlcohol', 'excisePackaging', 'attributes', 'longAttributes', 'parameters', 'productComponents'
    ];

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }

    public function addLongAttribute(): LongAttribute
    {
        return $this->longAttributes[] = new static::$nested_fields['longAttributes']();
    }

    public function addProductPicture(): ProductPicture
    {
        return $this->images[] = new static::$nested_fields['images']();
    }
}
