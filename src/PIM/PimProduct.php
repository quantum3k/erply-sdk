<?php


namespace quantum3k\ErplySDK\PIM;


class PimProduct
{

    private $id = null;
    private $type = null;
    private $group_id = null;
    private $unit_id = null;
    private $name = null;
    private $description = null;
    private $code = null;
    private $code2 = null;
    private $code3 = null;
    private $code5 = null;
    private $code6 = null;
    private $code7 = null;
    private $code8 = null;
    private $extra_field1_id = null;
    private $extra_field2_id = null;
    private $extra_field3_id = null;
    private $extra_field4_id = null;
    private $supplier_code = null;
    private $tax_rate_id = null;
    private $price = null;
    private $price_with_tax = null;
    private $net_weight = null;
    private $gross_weight = null;
    private $length = null;
    private $width = null;
    private $height = null;
    private $is_gift_card = null;
    private $non_discountable = null;
    private $non_refundable = null;
    private $volume = null;
    private $category_id = null;
    private $brand_id = null;
    private $supplier_id = null;
    private $priority_group_id = null;
    private $country_of_origin_id = null;
    private $manufacturer_name = null;
    private $cost = null;
    private $status = null;
    private $displayed_in_webshop = null;
    private $location_in_warehouse_id = null;
    private $location_in_warehouse_text = null;
    private $parent_product_id = null;
    private $deposit_fee_id = null;
    private $family_id = null;
    private $age_restriction = null;
    private $added = null;
    private $addedby = null;
    private $changed = null;
    private $changedby = null;
    private $delivery_time = null;
    private $packaging_type = null;
    private $alcohol_registry_number = null;
    private $alcohol_percentage = null;
    private $batches = null;
    private $excise_declaration_number = null;
    private $tax_free = null;
    private $is_regular_gift_card = null;
    private $reward_points_not_allowed = null;
    private $non_stock_product = null;
    private $cashier_must_enter_price = null;
    private $labels_not_needed = null;
    private $deposit_fee_amount = null;
    private $product_reorder_multiples = null;

    public function __construct($record)
    {
        if (property_exists($record, 'id')) {
            $this->id = $record->id;
        }
        if (property_exists($record, 'type')) {
            $this->type = $record->type;
        }
        if (property_exists($record, 'group_id')) {
            $this->group_id = $record->group_id;
        }
        if (property_exists($record, 'unit_id')) {
            $this->unit_id = $record->unit_id;
        }
        if (property_exists($record, 'name')) {
            $this->name = $record->name->en;
        }
        if (property_exists($record, 'description')) {
            $this->description = $record->description->en;
        }
        if (property_exists($record, 'code')) {
            $this->code = $record->code;
        }
        if (property_exists($record, 'code2')) {
            $this->code2 = $record->code2;
        }
        if (property_exists($record, 'code3')) {
            $this->code3 = $record->code3;
        }
        if (property_exists($record, 'code5')) {
            $this->code5 = $record->code5;
        }
        if (property_exists($record, 'code6')) {
            $this->code6 = $record->code6;
        }
        if (property_exists($record, 'code7')) {
            $this->code7 = $record->code7;
        }
        if (property_exists($record, 'code8')) {
            $this->code8 = $record->code8;
        }
        if (property_exists($record, 'extra_field1_id')) {
            $this->extra_field1_id = $record->extra_field1_id;
        }
        if (property_exists($record, 'extra_field2_id')) {
            $this->extra_field2_id = $record->extra_field2_id;
        }
        if (property_exists($record, 'extra_field3_id')) {
            $this->extra_field3_id = $record->extra_field3_id;
        }
        if (property_exists($record, 'extra_field4_id')) {
            $this->extra_field4_id = $record->extra_field4_id;
        }
        if (property_exists($record, 'supplier_code')) {
            $this->supplier_code = $record->supplier_code;
        }
        if (property_exists($record, 'tax_rate_id')) {
            $this->tax_rate_id = $record->tax_rate_id;
        }
        if (property_exists($record, 'price')) {
            $this->price = $record->price;
        }
        if (property_exists($record, 'price_with_tax')) {
            $this->price_with_tax = $record->price_with_tax;
        }
        if (property_exists($record, 'net_weight')) {
            $this->net_weight = $record->net_weight;
        }
        if (property_exists($record, 'gross_weight')) {
            $this->gross_weight = $record->gross_weight;
        }
        if (property_exists($record, 'length')) {
            $this->length = $record->length;
        }
        if (property_exists($record, 'width')) {
            $this->width = $record->width;
        }
        if (property_exists($record, 'height')) {
            $this->height = $record->height;
        }
        if (property_exists($record, 'is_gift_card')) {
            $this->is_gift_card = $record->is_gift_card;
        }
        if (property_exists($record, 'non_discountable')) {
            $this->non_discountable = $record->non_discountable;
        }
        if (property_exists($record, 'non_refundable')) {
            $this->non_refundable = $record->non_refundable;
        }
        if (property_exists($record, 'volume')) {
            $this->volume = $record->volume;
        }
        if (property_exists($record, 'category_id')) {
            $this->category_id = $record->category_id;
        }
        if (property_exists($record, 'brand_id')) {
            $this->brand_id = $record->brand_id;
        }
        if (property_exists($record, 'supplier_id')) {
            $this->supplier_id = $record->supplier_id;
        }
        if (property_exists($record, 'priority_group_id')) {
            $this->priority_group_id = $record->priority_group_id;
        }
        if (property_exists($record, 'country_of_origin_id')) {
            $this->country_of_origin_id = $record->country_of_origin_id;
        }
        if (property_exists($record, 'manufacturer_name')) {
            $this->manufacturer_name = $record->manufacturer_name;
        }
        if (property_exists($record, 'cost')) {
            $this->cost = $record->cost;
        }
        if (property_exists($record, 'status')) {
            $this->status = $record->status;
        }
        if (property_exists($record, 'displayed_in_webshop')) {
            $this->displayed_in_webshop = $record->displayed_in_webshop;
        }
        if (property_exists($record, 'location_in_warehouse_id')) {
            $this->location_in_warehouse_id = $record->location_in_warehouse_id;
        }
        if (property_exists($record, 'location_in_warehouse_text')) {
            $this->location_in_warehouse_text = $record->location_in_warehouse_text;
        }
        if (property_exists($record, 'parent_product_id')) {
            $this->parent_product_id = $record->parent_product_id;
        }
        if (property_exists($record, 'deposit_fee_id')) {
            $this->deposit_fee_id = $record->deposit_fee_id;
        }
        if (property_exists($record, 'family_id')) {
            $this->family_id = $record->family_id;
        }
        if (property_exists($record, 'age_restriction')) {
            $this->age_restriction = $record->age_restriction;
        }
        if (property_exists($record, 'added')) {
            $this->added = $record->added;
        }
        if (property_exists($record, 'addedby')) {
            $this->addedby = $record->addedby;
        }
        if (property_exists($record, 'changed')) {
            $this->changed = $record->changed;
        }
        if (property_exists($record, 'changedby')) {
            $this->changedby = $record->changedby;
        }
        if (property_exists($record, 'delivery_time')) {
            $this->delivery_time = $record->delivery_time;
        }
        if (property_exists($record, 'packaging_type')) {
            $this->packaging_type = $record->packaging_type;
        }
        if (property_exists($record, 'alcohol_registry_number')) {
            $this->alcohol_registry_number = $record->alcohol_registry_number;
        }
        if (property_exists($record, 'alcohol_percentage')) {
            $this->alcohol_percentage = $record->alcohol_percentage;
        }
        if (property_exists($record, 'batches')) {
            $this->batches = $record->batches;
        }
        if (property_exists($record, 'excise_declaration_number')) {
            $this->excise_declaration_number = $record->excise_declaration_number;
        }
        if (property_exists($record, 'tax_free')) {
            $this->tax_free = $record->tax_free;
        }
        if (property_exists($record, 'is_regular_gift_card')) {
            $this->is_regular_gift_card = $record->is_regular_gift_card;
        }
        if (property_exists($record, 'reward_points_not_allowed')) {
            $this->reward_points_not_allowed = $record->reward_points_not_allowed;
        }
        if (property_exists($record, 'non_stock_product')) {
            $this->non_stock_product = $record->non_stock_product;
        }
        if (property_exists($record, 'cashier_must_enter_price')) {
            $this->cashier_must_enter_price = $record->cashier_must_enter_price;
        }
        if (property_exists($record, 'labels_not_needed')) {
            $this->labels_not_needed = $record->labels_not_needed;
        }
        if (property_exists($record, 'deposit_fee_amount')) {
            $this->deposit_fee_amount = $record->deposit_fee_amount;
        }
        if (property_exists($record, 'product_reorder_multiples')) {
            $this->product_reorder_multiples = $record->product_reorder_multiples;
        }
    }


    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param null $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return null
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * @param null $group_id
     */
    public function setGroupId($group_id)
    {
        $this->group_id = $group_id;
    }

    /**
     * @return null
     */
    public function getUnitId()
    {
        return $this->unit_id;
    }

    /**
     * @param null $unit_id
     */
    public function setUnitId($unit_id)
    {
        $this->unit_id = $unit_id;
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param null $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param null $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return null
     */
    public function getCode2()
    {
        return $this->code2;
    }

    /**
     * @param null $code2
     */
    public function setCode2($code2)
    {
        $this->code2 = $code2;
    }

    /**
     * @return null
     */
    public function getCode3()
    {
        return $this->code3;
    }

    /**
     * @param null $code3
     */
    public function setCode3($code3)
    {
        $this->code3 = $code3;
    }

    /**
     * @return null
     */
    public function getCode5()
    {
        return $this->code5;
    }

    /**
     * @param null $code5
     */
    public function setCode5($code5)
    {
        $this->code5 = $code5;
    }

    /**
     * @return null
     */
    public function getCode6()
    {
        return $this->code6;
    }

    /**
     * @param null $code6
     */
    public function setCode6($code6)
    {
        $this->code6 = $code6;
    }

    /**
     * @return null
     */
    public function getCode7()
    {
        return $this->code7;
    }

    /**
     * @param null $code7
     */
    public function setCode7($code7)
    {
        $this->code7 = $code7;
    }

    /**
     * @return null
     */
    public function getCode8()
    {
        return $this->code8;
    }

    /**
     * @param null $code8
     */
    public function setCode8($code8)
    {
        $this->code8 = $code8;
    }

    /**
     * @return null
     */
    public function getExtraField1Id()
    {
        return $this->extra_field1_id;
    }

    /**
     * @param null $extra_field1_id
     */
    public function setExtraField1Id($extra_field1_id)
    {
        $this->extra_field1_id = $extra_field1_id;
    }

    /**
     * @return null
     */
    public function getExtraField2Id()
    {
        return $this->extra_field2_id;
    }

    /**
     * @param null $extra_field2_id
     */
    public function setExtraField2Id($extra_field2_id)
    {
        $this->extra_field2_id = $extra_field2_id;
    }

    /**
     * @return null
     */
    public function getExtraField3Id()
    {
        return $this->extra_field3_id;
    }

    /**
     * @param null $extra_field3_id
     */
    public function setExtraField3Id($extra_field3_id)
    {
        $this->extra_field3_id = $extra_field3_id;
    }

    /**
     * @return null
     */
    public function getExtraField4Id()
    {
        return $this->extra_field4_id;
    }

    /**
     * @param null $extra_field4_id
     */
    public function setExtraField4Id($extra_field4_id)
    {
        $this->extra_field4_id = $extra_field4_id;
    }

    /**
     * @return null
     */
    public function getSupplierCode()
    {
        return $this->supplier_code;
    }

    /**
     * @param null $supplier_code
     */
    public function setSupplierCode($supplier_code)
    {
        $this->supplier_code = $supplier_code;
    }

    /**
     * @return null
     */
    public function getTaxRateId()
    {
        return $this->tax_rate_id;
    }

    /**
     * @param null $tax_rate_id
     */
    public function setTaxRateId($tax_rate_id)
    {
        $this->tax_rate_id = $tax_rate_id;
    }

    /**
     * @return null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param null $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return null
     */
    public function getPriceWithTax()
    {
        return $this->price_with_tax;
    }

    /**
     * @param null $price_with_tax
     */
    public function setPriceWithTax($price_with_tax)
    {
        $this->price_with_tax = $price_with_tax;
    }

    /**
     * @return null
     */
    public function getNetWeight()
    {
        return $this->net_weight;
    }

    /**
     * @param null $net_weight
     */
    public function setNetWeight($net_weight)
    {
        $this->net_weight = $net_weight;
    }

    /**
     * @return null
     */
    public function getGrossWeight()
    {
        return $this->gross_weight;
    }

    /**
     * @param null $gross_weight
     */
    public function setGrossWeight($gross_weight)
    {
        $this->gross_weight = $gross_weight;
    }

    /**
     * @return null
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param null $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return null
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param null $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return null
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param null $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return null
     */
    public function getIsGiftCard()
    {
        return $this->is_gift_card;
    }

    /**
     * @param null $is_gift_card
     */
    public function setIsGiftCard($is_gift_card)
    {
        $this->is_gift_card = $is_gift_card;
    }

    /**
     * @return null
     */
    public function getNonDiscountable()
    {
        return $this->non_discountable;
    }

    /**
     * @param null $non_discountable
     */
    public function setNonDiscountable($non_discountable)
    {
        $this->non_discountable = $non_discountable;
    }

    /**
     * @return null
     */
    public function getNonRefundable()
    {
        return $this->non_refundable;
    }

    /**
     * @param null $non_refundable
     */
    public function setNonRefundable($non_refundable)
    {
        $this->non_refundable = $non_refundable;
    }

    /**
     * @return null
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param null $volume
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    /**
     * @return null
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param null $category_id
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * @return null
     */
    public function getBrandId()
    {
        return $this->brand_id;
    }

    /**
     * @param null $brand_id
     */
    public function setBrandId($brand_id)
    {
        $this->brand_id = $brand_id;
    }

    /**
     * @return null
     */
    public function getSupplierId()
    {
        return $this->supplier_id;
    }

    /**
     * @param null $supplier_id
     */
    public function setSupplierId($supplier_id)
    {
        $this->supplier_id = $supplier_id;
    }

    /**
     * @return null
     */
    public function getPriorityGroupId()
    {
        return $this->priority_group_id;
    }

    /**
     * @param null $priority_group_id
     */
    public function setPriorityGroupId($priority_group_id)
    {
        $this->priority_group_id = $priority_group_id;
    }

    /**
     * @return null
     */
    public function getCountryOfOriginId()
    {
        return $this->country_of_origin_id;
    }

    /**
     * @param null $country_of_origin_id
     */
    public function setCountryOfOriginId($country_of_origin_id)
    {
        $this->country_of_origin_id = $country_of_origin_id;
    }

    /**
     * @return null
     */
    public function getManufacturerName()
    {
        return $this->manufacturer_name;
    }

    /**
     * @param null $manufacturer_name
     */
    public function setManufacturerName($manufacturer_name)
    {
        $this->manufacturer_name = $manufacturer_name;
    }

    /**
     * @return null
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param null $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    /**
     * @return null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param null $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return null
     */
    public function getDisplayedInWebshop()
    {
        return $this->displayed_in_webshop;
    }

    /**
     * @param null $displayed_in_webshop
     */
    public function setDisplayedInWebshop($displayed_in_webshop)
    {
        $this->displayed_in_webshop = $displayed_in_webshop;
    }

    /**
     * @return null
     */
    public function getLocationInWarehouseId()
    {
        return $this->location_in_warehouse_id;
    }

    /**
     * @param null $location_in_warehouse_id
     */
    public function setLocationInWarehouseId($location_in_warehouse_id)
    {
        $this->location_in_warehouse_id = $location_in_warehouse_id;
    }

    /**
     * @return null
     */
    public function getLocationInWarehouseText()
    {
        return $this->location_in_warehouse_text;
    }

    /**
     * @param null $location_in_warehouse_text
     */
    public function setLocationInWarehouseText($location_in_warehouse_text)
    {
        $this->location_in_warehouse_text = $location_in_warehouse_text;
    }

    /**
     * @return null
     */
    public function getParentProductId()
    {
        return $this->parent_product_id;
    }

    /**
     * @param null $parent_product_id
     */
    public function setParentProductId($parent_product_id)
    {
        $this->parent_product_id = $parent_product_id;
    }

    /**
     * @return null
     */
    public function getDepositFeeId()
    {
        return $this->deposit_fee_id;
    }

    /**
     * @param null $deposit_fee_id
     */
    public function setDepositFeeId($deposit_fee_id)
    {
        $this->deposit_fee_id = $deposit_fee_id;
    }

    /**
     * @return null
     */
    public function getFamilyId()
    {
        return $this->family_id;
    }

    /**
     * @param null $family_id
     */
    public function setFamilyId($family_id)
    {
        $this->family_id = $family_id;
    }

    /**
     * @return null
     */
    public function getAgeRestriction()
    {
        return $this->age_restriction;
    }

    /**
     * @param null $age_restriction
     */
    public function setAgeRestriction($age_restriction)
    {
        $this->age_restriction = $age_restriction;
    }

    /**
     * @return null
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * @param null $added
     */
    public function setAdded($added)
    {
        $this->added = $added;
    }

    /**
     * @return null
     */
    public function getAddedby()
    {
        return $this->addedby;
    }

    /**
     * @param null $addedby
     */
    public function setAddedby($addedby)
    {
        $this->addedby = $addedby;
    }

    /**
     * @return null
     */
    public function getChanged()
    {
        return $this->changed;
    }

    /**
     * @param null $changed
     */
    public function setChanged($changed)
    {
        $this->changed = $changed;
    }

    /**
     * @return null
     */
    public function getChangedby()
    {
        return $this->changedby;
    }

    /**
     * @param null $changedby
     */
    public function setChangedby($changedby)
    {
        $this->changedby = $changedby;
    }

    /**
     * @return null
     */
    public function getDeliveryTime()
    {
        return $this->delivery_time;
    }

    /**
     * @param null $delivery_time
     */
    public function setDeliveryTime($delivery_time)
    {
        $this->delivery_time = $delivery_time;
    }

    /**
     * @return null
     */
    public function getPackagingType()
    {
        return $this->packaging_type;
    }

    /**
     * @param null $packaging_type
     */
    public function setPackagingType($packaging_type)
    {
        $this->packaging_type = $packaging_type;
    }

    /**
     * @return null
     */
    public function getAlcoholRegistryNumber()
    {
        return $this->alcohol_registry_number;
    }

    /**
     * @param null $alcohol_registry_number
     */
    public function setAlcoholRegistryNumber($alcohol_registry_number)
    {
        $this->alcohol_registry_number = $alcohol_registry_number;
    }

    /**
     * @return null
     */
    public function getAlcoholPercentage()
    {
        return $this->alcohol_percentage;
    }

    /**
     * @param null $alcohol_percentage
     */
    public function setAlcoholPercentage($alcohol_percentage)
    {
        $this->alcohol_percentage = $alcohol_percentage;
    }

    /**
     * @return null
     */
    public function getBatches()
    {
        return $this->batches;
    }

    /**
     * @param null $batches
     */
    public function setBatches($batches)
    {
        $this->batches = $batches;
    }

    /**
     * @return null
     */
    public function getExciseDeclarationNumber()
    {
        return $this->excise_declaration_number;
    }

    /**
     * @param null $excise_declaration_number
     */
    public function setExciseDeclarationNumber($excise_declaration_number)
    {
        $this->excise_declaration_number = $excise_declaration_number;
    }

    /**
     * @return null
     */
    public function getTaxFree()
    {
        return $this->tax_free;
    }

    /**
     * @param null $tax_free
     */
    public function setTaxFree($tax_free)
    {
        $this->tax_free = $tax_free;
    }

    /**
     * @return null
     */
    public function getIsRegularGiftCard()
    {
        return $this->is_regular_gift_card;
    }

    /**
     * @param null $is_regular_gift_card
     */
    public function setIsRegularGiftCard($is_regular_gift_card)
    {
        $this->is_regular_gift_card = $is_regular_gift_card;
    }

    /**
     * @return null
     */
    public function getRewardPointsNotAllowed()
    {
        return $this->reward_points_not_allowed;
    }

    /**
     * @param null $reward_points_not_allowed
     */
    public function setRewardPointsNotAllowed($reward_points_not_allowed)
    {
        $this->reward_points_not_allowed = $reward_points_not_allowed;
    }

    /**
     * @return null
     */
    public function getNonStockProduct()
    {
        return $this->non_stock_product;
    }

    /**
     * @param null $non_stock_product
     */
    public function setNonStockProduct($non_stock_product)
    {
        $this->non_stock_product = $non_stock_product;
    }

    /**
     * @return null
     */
    public function getCashierMustEnterPrice()
    {
        return $this->cashier_must_enter_price;
    }

    /**
     * @param null $cashier_must_enter_price
     */
    public function setCashierMustEnterPrice($cashier_must_enter_price)
    {
        $this->cashier_must_enter_price = $cashier_must_enter_price;
    }

    /**
     * @return null
     */
    public function getLabelsNotNeeded()
    {
        return $this->labels_not_needed;
    }

    /**
     * @param null $labels_not_needed
     */
    public function setLabelsNotNeeded($labels_not_needed)
    {
        $this->labels_not_needed = $labels_not_needed;
    }

    /**
     * @return null
     */
    public function getDepositFeeAmount()
    {
        return $this->deposit_fee_amount;
    }

    /**
     * @param null $deposit_fee_amount
     */
    public function setDepositFeeAmount($deposit_fee_amount)
    {
        $this->deposit_fee_amount = $deposit_fee_amount;
    }

    /**
     * @return null
     */
    public function getProductReorderMultiples()
    {
        return $this->product_reorder_multiples;
    }

    /**
     * @param null $product_reorder_multiples
     */
    public function setProductReorderMultiples($product_reorder_multiples)
    {
        $this->product_reorder_multiples = $product_reorder_multiples;
    }


}
