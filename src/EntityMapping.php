<?php

namespace quantum3k\ErplySDK;

class EntityMapping
{
    /**
     * Mapping request name to collection
     * [request_name] => [collection_entity_class]
     * @var string[]
     */
    protected static $collections = [
        'getAddresses'                      => Collections\Addresses::class,
        'getAddressTypes'                   => Collections\AddressTypes::class,
        'getBrands'                         => Collections\Brands::class,
        'getCampaigns'                      => Collections\Campaigns::class,
        'getCashIns'                        => Collections\CashIns::class,
        'getChangedDataSince'               => Collections\ChangeDataSinces::class,
        'getCurrencies'                     => Collections\Currencies::class,
        'getCustomerGroups'                 => Collections\CustomerGroups::class,
        'addCustomerRewardPoints'           => Collections\CustomerRewardPoints::class,
        'getCustomers'                      => Collections\Customers::class,
        'getDayClosings'                    => Collections\DayClosings::class,
        'getEarnedRewardPointRecords'       => Collections\EarnedRewardPointRecords::class,
        'getEmployees'                      => Collections\Employees::class,
        'getEvents'                         => Collections\Events::class,
        'getGiftCards'                      => Collections\GiftCards::class,
        'getInventoryRegistrations'         => Collections\InventoryRegistrations::class,
        'getInventoryTransfers'             => Collections\InventoryTransfers::class,
        'getInventoryWriteOffs'             => Collections\InventoryWriteOffs::class,
        'getInvoicePaymentTypes'            => Collections\InvoicePaymentTypes::class,
        'getIssuedCoupons'                  => Collections\IssuedCoupons::class,
        'getMatrixDimensions'               => Collections\MatrixDimensions::class,
        'getPayments'                       => Collections\Payments::class,
        'getPaymentTypes'                   => Collections\PaymentTypes::class,
        'getPointsOfSale'                   => Collections\PointOfSales::class,
        'getPriceLists'                     => Collections\PriceLists::class,
        'getProductCategories'              => Collections\ProductCategories::class,
        'getProductGroups'                  => Collections\ProductGroups::class,
        'getProductPictures'                => Collections\ProductPictures::class,
        'getProductPrices'                  => Collections\ProductPrices::class,
        'getProductUnits'                   => Collections\ProductUnits::class,
        'getProducts'                       => Collections\Products::class,
        'getProductStock'                   => Collections\ProductStocks::class,
        'getPurchaseDocuments'              => Collections\PurchaseDocuments::class,
        'getSalesDocuments'                 => Collections\SaleDocuments::class,
        'getSalesDocumentActualReportsHTML' => Collections\SalesDocumentActualReportsHTMLs::class,
        'addItemToMatrixDimension'          => Collections\SaveAddMatrixDimensionItems::class,
        'saveAddress'                       => Collections\SaveAddresses::class,
        'saveBrand'                         => Collections\SaveBrands::class,
        'saveCampaign'                      => Collections\SaveCampaigns::class,
        'saveCurrency'                      => Collections\SaveCurrencies::class,
        'saveCustomerGroup'                 => Collections\SaveCustomerGroups::class,
        'saveCustomer'                      => Collections\SaveCustomers::class,
        'saveEmployee'                      => Collections\SaveEmployees::class,
        'saveEvent'                         => Collections\SaveEvents::class,
        'saveGiftCard'                      => Collections\SaveGiftCards::class,
        'saveInventoryRegistration'         => Collections\SaveInventoryRegistrations::class,
        'saveInventoryTransfer'             => Collections\SaveInventoryTransfers::class,
        'saveInventoryWriteOff'             => Collections\SaveInventoryWriteOffs::class,
        'saveMatrixDimension'               => Collections\SaveMatrixDimensions::class,
        'savePayment'                       => Collections\SavePayments::class,
        'savePriceList'                     => Collections\SavePriceLists::class,
        'saveProductCategory'               => Collections\SaveProductCategories::class,
        'saveProductGroup'                  => Collections\SaveProductGroups::class,
        'saveProduct'                       => Collections\SaveProducts::class,
        'savePurchaseDocument'              => Collections\SavePurchaseDocuments::class,
        'saveSalesDocument'                 => Collections\SaveSalesDocuments::class,
        'saveSupplierGroup'                 => Collections\SaveSupplierGroups::class,
        'saveSupplier'                      => Collections\SaveSuppliers::class,
        'saveVatRate'                       => Collections\SaveVatRates::class,
        'saveWarehouse'                     => Collections\SaveWarehouses::class,
        'getSessionKeyUser'                 => Collections\SessionKeyUsers::class,
        'getStocktakings'                   => Collections\Stocktakings::class,
        'getSupplierGroups'                 => Collections\SupplierGroups::class,
        'getSuppliers'                      => Collections\Suppliers::class,
        'getUsedRewardPointRecords'         => Collections\UsedRewardPointRecords::class,
        'getUserGroups'                     => Collections\UserGroups::class,
        'getUserOperationsLog'              => Collections\UserOperationLogs::class,
        'getVatRates'                       => Collections\VatRates::class,
        'getWarehouses'                     => Collections\Warehouses::class,
    ];

    /**
     * @param $requestName
     * @return class-string|null
     */
    public static function getCollection($requestName)
    {
        return static::$collections[$requestName] ?? null;
    }
}