<?php

namespace quantum3k\ErplySDK;

use quantum3k\ErplySDK\DTO\BaseEntity;
use quantum3k\ErplySDK\Bulks\BaseEntityBulk;
use quantum3k\ErplySDK\Collections\BaseEntityCollection;
use GuzzleHttp\Client;

class ErplyAPI extends BaseAPI
{
    protected $code;
    protected $username;
    protected $password;
    protected $recordsOnPage = 20;
    protected $sessionLength = 86400;
    protected $attempts = 3;
    protected $throw = true;

    /**
     * @var DTO\VerifyUser
     */
    protected $session;

    /**
     * @var DTO\SessionKeyInfo
     */
    protected $keepalive;

    const USER_AGENT = 'ErplyClient/1.0.1';

    const STD_REQ = 'request';
    const BULK_REQ = 'requestName';

    /*
    |--------------------------------------------------------------------------
    | Object Getters and Setters
    |--------------------------------------------------------------------------
    */

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code): self
    {
        $this->code = $code;
        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username): self
    {
        $this->username = $username;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getSessionLength()
    {
        return $this->sessionLength;
    }

    public function setSessionLength($sessionLength): self
    {
        $this->sessionLength = $sessionLength;
        return $this;
    }

    public function getSessionKey()
    {
        if ($this->session instanceof DTO\VerifyUser)
            return $this->session->sessionKey;

        return null;
    }

    public function setAttempts($attempts): self
    {
        $this->attempts = $attempts;
        return $this;
    }

    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * @return DTO\VerifyUser|null
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * @return DTO\SessionKeyInfo|null
     */
    public function getKeepalive()
    {
        return $this->keepalive;
    }

    public function getRecordsOnPage(): int
    {
        return $this->recordsOnPage;
    }

    public function setRecordsOnPage(int $recordsOnPage): self
    {
        if ($recordsOnPage <= 0) $recordsOnPage = 20;
        if ($recordsOnPage >= 100) $recordsOnPage = 100;

        $this->recordsOnPage = $recordsOnPage;
        return $this;
    }

    public function getThrow(): bool
    {
        return $this->throw;
    }

    public function setThrow(bool $throw): self
    {
        $this->throw = $throw;
        return $this;
    }

    public function __construct()
    {
        $this->setLogSensitivity([self::LOG_NOTICE, self::LOG_ERROR]);
        $this->session = new DTO\VerifyUser();
        $this->keepalive = new DTO\SessionKeyInfo();
    }

    /*
    |--------------------------------------------------------------------------
    | API: RewardPoint related calls
    |--------------------------------------------------------------------------
    |
    | No still implemented calls:
    | subtractCustomerRewardPoints(), editEarnedRewardPointRecord(),
    | getCustomerRewardPoints(), editUsedRewardPointRecord()
    |
    */

    public function getEarnedRewardPointRecords(array $parameters = []): Collections\EarnedRewardPointRecords
    {
        $parameters[static::STD_REQ] = 'getEarnedRewardPointRecords';
        return $this->make(Collections\EarnedRewardPointRecords::class, $parameters);
    }

    public function getUsedRewardPointRecords(array $parameters = []): Collections\UsedRewardPointRecords
    {
        $parameters[static::STD_REQ] = 'getUsedRewardPointRecords';
        return $this->make(Collections\UsedRewardPointRecords::class, $parameters);
    }

    public function addCustomerRewardPoints(DTO\CustomerRewardPoint $record): DTO\CustomerRewardPoint
    {
        $parameters = [static::STD_REQ => 'addCustomerRewardPoints'] + $record->getQuery();
        return $this->make(DTO\CustomerRewardPoint::class, $parameters);
    }

    /*
    |--------------------------------------------------------------------------
    | API: Matrix Dimensions related calls
    |--------------------------------------------------------------------------
    |
    | No still implemented calls:
    | editItemInMatrixDimension(), removeItemsFromMatrixDimension()
    | deleteMatrixDimension()
    |
    */

    public function getMatrixDimensions(array $parameters = []): Collections\MatrixDimensions
    {
        $parameters[static::STD_REQ] = 'getMatrixDimensions';
        return $this->make(Collections\MatrixDimensions::class, $parameters);
    }

    /**
     * @deprecated This call is deprecated. We recommend to use PIM API instead.
     */
    public function saveMatrixDimension(DTO\MatrixDimension $record): Collections\SaveMatrixDimensions
    {
        $parameters = [static::STD_REQ => 'saveMatrixDimension'] + $record->getQuery();
        return $this->make(Collections\SaveMatrixDimensions::class, $parameters);
    }

    /**
     * @param DTO\MatrixDimension[] $records
     * @deprecated This call is deprecated. We recommend to use PIM API instead.
     */
    public function saveMatrixDimensions(array $records): Bulks\SaveMatrixDimensionsBulk
    {
        $this->validateRecords($records, DTO\MatrixDimension::class);
        foreach ($records as $record)
            $parameters[] = $record->getQuery();
        return $this->make(Bulks\SaveMatrixDimensionsBulk::class, $parameters ?? []);
    }

    /**
     * @deprecated This call is deprecated. We recommend to use PIM API instead.
     */
    public function addItemToMatrixDimension(DTO\MatrixDimensionItem $record): Collections\SaveAddMatrixDimensionItems
    {
        $parameters = [static::STD_REQ => 'addItemToMatrixDimension'] + $record->getQuery();
        return $this->make(Collections\SaveAddMatrixDimensionItems::class, $parameters);
    }

    /**
     * @param DTO\MatrixDimensionItem[] $records
     */
    public function addItemsToMatrixDimension(array $records): Bulks\SaveAddMatrixDimensionItemsBulk
    {
        $this->validateRecords($records, DTO\MatrixDimensionItem::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'addItemToMatrixDimension'] + $record->getQuery();
        return $this->make(Bulks\SaveAddMatrixDimensionItemsBulk::class, $parameters ?? []);
    }

    /*
    |--------------------------------------------------------------------------
    | API: Save related calls
    |--------------------------------------------------------------------------
    |
    | Using bulk calls to multiple records saving
    |
    */

    /**
     * @param DTO\Address[] $records
     */
    public function saveAddresses(array $records): Bulks\SaveAddressesBulk
    {
        $this->validateRecords($records, DTO\Address::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveAddress'] + $record->getQuery();
        return $this->make(Bulks\SaveAddressesBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\Campaign[] $records
     */
    public function saveCampaigns(array $records): Bulks\SaveCampaignsBulk
    {
        $this->validateRecords($records, DTO\Campaign::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveCampaign'] + $record->getQuery();
        return $this->make(Bulks\SaveCampaignsBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\Currency[] $records
     */
    public function saveCurrencies(array $records): Bulks\SaveCurrenciesBulk
    {
        $this->validateRecords($records, DTO\Currency::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveCurrency'] + $record->getQuery();
        return $this->make(Bulks\SaveCurrenciesBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\Customer[] $records
     */
    public function saveCustomers(array $records): Bulks\SaveCustomersBulk
    {
        $this->validateRecords($records, DTO\Customer::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveCustomer'] + $record->getQuery();
        return $this->make(Bulks\SaveCustomersBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\CustomerGroup[] $records
     */
    public function saveCustomerGroups(array $records): Bulks\SaveCustomerGroupsBulk
    {
        $this->validateRecords($records, DTO\CustomerGroup::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveCustomerGroup'] + $record->getQuery();
        return $this->make(Bulks\SaveCustomerGroupsBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\Employee[] $records
     */
    public function saveEmployees(array $records): Bulks\SaveEmployeesBulk
    {
        $this->validateRecords($records, DTO\Employee::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveEmployee'] + $record->getQuery();
        return $this->make(Bulks\SaveEmployeesBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\Event[] $records
     */
    public function saveEvents(array $records): Bulks\SaveEventsBulk
    {
        $this->validateRecords($records, DTO\Event::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveEvent'] + $record->getQuery();
        return $this->make(Bulks\SaveEventsBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\InventoryRegistration[] $records
     */
    public function saveInventoryRegistrations(array $records): Bulks\SaveInventoryRegistrationsBulk
    {
        $this->validateRecords($records, DTO\InventoryRegistration::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveInventoryRegistration'] + $record->getQuery();
        return $this->make(Bulks\SaveInventoryRegistrationsBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\GiftCard[] $records
     */
    public function saveGiftCards(array $records): Bulks\SaveGiftCardsBulk
    {
        $this->validateRecords($records, DTO\GiftCard::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveGiftCard'] + $record->getQuery();
        return $this->make(Bulks\SaveGiftCardsBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\InventoryTransfer[] $records
     */
    public function saveInventoryTransfers(array $records): Bulks\SaveInventoryTransfersBulk
    {
        $this->validateRecords($records, DTO\InventoryTransfer::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveInventoryTransfer'] + $record->getQuery();
        return $this->make(Bulks\SaveInventoryTransfersBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\InventoryWriteOff[] $records
     */
    public function saveInventoryWriteOffs(array $records): Bulks\SaveInventoryWriteOffsBulk
    {
        $this->validateRecords($records, DTO\InventoryWriteOff::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveInventoryWriteOff'] + $record->getQuery();
        return $this->make(Bulks\SaveInventoryWriteOffsBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\Payment[] $records
     */
    public function savePayments(array $records): Bulks\SavePaymentsBulk
    {
        $this->validateRecords($records, DTO\Payment::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'savePayment'] + $record->getQuery();
        return $this->make(Bulks\SavePaymentsBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\PriceList[] $records
     */
    public function savePriceLists(array $records): Bulks\SavePriceListsBulk
    {
        $this->validateRecords($records, DTO\PriceList::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'savePriceList'] + $record->getQuery();
        return $this->make(Bulks\SavePriceListsBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\Product[] $records
     */
    public function saveProducts(array $records): Bulks\SaveProductsBulk
    {
        $this->validateRecords($records, DTO\Product::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveProduct'] + $record->getQuery();
        return $this->make(Bulks\SaveProductsBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\ProductCategory[] $records
     */
    public function saveProductCategories(array $records): Bulks\SaveProductCategoriesBulk
    {
        $this->validateRecords($records, DTO\ProductCategory::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveProductCategory'] + $record->getQuery();
        return $this->make(Bulks\SaveProductCategoriesBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\ProductGroup[] $records
     */
    public function saveProductGroups(array $records): Bulks\SaveProductGroupsBulk
    {
        $this->validateRecords($records, DTO\ProductGroup::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveProductGroup'] + $record->getQuery();
        return $this->make(Bulks\SaveProductGroupsBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\PurchaseDocument[] $records
     */
    public function savePurchaseDocuments(array $records): Bulks\SavePurchaseDocumentsBulk
    {
        $this->validateRecords($records, DTO\PurchaseDocument::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'savePurchaseDocument'] + $record->getQuery();
        return $this->make(Bulks\SavePurchaseDocumentsBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\SaleDocument[] $records
     */
    public function saveSalesDocuments(array $records): Bulks\SaveSalesDocumentsBulk
    {
        $this->validateRecords($records, DTO\SaleDocument::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveSalesDocument'] + $record->getQuery();
        return $this->make(Bulks\SaveSalesDocumentsBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\SupplierGroup[] $records
     */
    public function saveSupplierGroups(array $records): Bulks\SaveSupplierGroupBulk
    {
        $this->validateRecords($records, DTO\SupplierGroup::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveSupplierGroup'] + $record->getQuery();
        return $this->make(Bulks\SaveSupplierGroupBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\Supplier[] $records
     */
    public function saveSuppliers(array $records): Bulks\SaveSuppliersBulk
    {
        $this->validateRecords($records, DTO\Supplier::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveSupplier'] + $record->getQuery();
        return $this->make(Bulks\SaveSuppliersBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\VatRate[] $records
     */
    public function saveVatRates(array $records): Bulks\SaveVatRatesBulk
    {
        $this->validateRecords($records, DTO\VatRate::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveVatRate'] + $record->getQuery();
        return $this->make(Bulks\SaveVatRatesBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\Warehouse[] $records
     */
    public function saveWarehouses(array $records): Bulks\SaveWarehousesBulk
    {
        $this->validateRecords($records, DTO\Warehouse::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveWarehouse'] + $record->getQuery();
        return $this->make(Bulks\SaveWarehousesBulk::class, $parameters ?? []);
    }

    /**
     * @param DTO\Brand[] $records
     */
    public function saveBrands(array $records): Bulks\SaveBrandBulk
    {
        $this->validateRecords($records, DTO\Brand::class);
        foreach ($records as $record)
            $parameters[] = [static::BULK_REQ => 'saveBrand'] + $record->getQuery();
        return $this->make(Bulks\SaveBrandBulk::class, $parameters ?? []);
    }

    /*
    |--------------------------------------------------------------------------
    | API: Save related calls
    |--------------------------------------------------------------------------
    |
    | Using one call to one record saving
    |
    */

    public function saveWarehouse(DTO\Warehouse $record): DTO\SaveWarehouse
    {
        $parameters = [static::STD_REQ => 'saveWarehouse'] + $record->getQuery();
        return $this->make(DTO\SaveWarehouse::class, $parameters);
    }

    public function saveVatRate(DTO\VatRate $record): DTO\SaveVatRate
    {
        $parameters = [static::STD_REQ => 'saveVatRate'] + $record->getQuery();
        return $this->make(DTO\SaveVatRate::class, $parameters);
    }

    public function saveSupplierGroup(DTO\SupplierGroup $record): DTO\SaveSupplierGroup
    {
        $parameters = [static::STD_REQ => 'saveSupplierGroup'] + $record->getQuery();
        return $this->make(DTO\SaveSupplierGroup::class, $parameters);
    }

    public function saveProductGroup(DTO\ProductGroup $record): DTO\SaveProductGroup
    {
        $parameters = [static::STD_REQ => 'saveProductGroup'] + $record->getQuery();
        return $this->make(DTO\SaveProductGroup::class, $parameters);
    }

    public function saveProductUnit(DTO\ProductUnit $record): DTO\SaveProductUnit
    {
        $parameters = [static::STD_REQ => 'saveProductUnit'] + $record->getQuery();
        return $this->make(DTO\SaveProductUnit::class, $parameters);
    }

    public function savePurchaseDocument(DTO\PurchaseDocument $record): DTO\SavePurchaseDocument
    {
        $parameters = [static::STD_REQ => 'savePurchaseDocument'] + $record->getQuery();
        return $this->make(DTO\SavePurchaseDocument::class, $parameters);
    }

    public function saveSalesDocument(DTO\SaleDocument $record): DTO\SaveSalesDocument
    {
        $parameters = [static::STD_REQ => 'saveSalesDocument'] + $record->getQuery();
        return $this->make(DTO\SaveSalesDocument::class, $parameters);
    }

    public function saveProductCategory(DTO\ProductCategory $record): DTO\SaveProductCategory
    {
        $parameters = [static::STD_REQ => 'saveProductCategory'] + $record->getQuery();
        return $this->make(DTO\SaveProductCategory::class, $parameters);
    }

    public function savePriceList(DTO\Supplier $record): DTO\SavePriceList
    {
        $parameters = [static::STD_REQ => 'savePriceList'] + $record->getQuery();
        return $this->make(DTO\SavePriceList::class, $parameters);
    }

    public function savePayment(DTO\Payment $record): DTO\SavePayment
    {
        $parameters = [static::STD_REQ => 'savePayment'] + $record->getQuery();
        return $this->make(DTO\SavePayment::class, $parameters);
    }

    public function saveInventoryWriteOff(DTO\InventoryWriteOff $record): DTO\SaveInventoryWriteOff
    {
        $parameters = [static::STD_REQ => 'saveInventoryWriteOff'] + $record->getQuery();
        return $this->make(DTO\SaveInventoryWriteOff::class, $parameters);
    }

    public function saveInventoryTransfer(DTO\InventoryTransfer $record): DTO\SaveInventoryTransfer
    {
        $parameters = [static::STD_REQ => 'saveInventoryTransfer'] + $record->getQuery();
        return $this->make(DTO\SaveInventoryTransfer::class, $parameters);
    }

    public function saveInventoryRegistration(DTO\InventoryRegistration $record): DTO\SaveInventoryRegistration
    {
        $parameters = [static::STD_REQ => 'saveInventoryRegistration'] + $record->getQuery();
        return $this->make(DTO\SaveInventoryRegistration::class, $parameters);
    }

    public function saveGiftCard(DTO\GiftCard $record): DTO\SaveGiftCard
    {
        $parameters = [static::STD_REQ => 'saveGiftCard'] + $record->getQuery();
        return $this->make(DTO\SaveGiftCard::class, $parameters);
    }

    public function saveEmployee(DTO\Employee $record): DTO\SaveEmployee
    {
        $parameters = [static::STD_REQ => 'saveEmployee'] + $record->getQuery();
        return $this->make(DTO\SaveEmployee::class, $parameters);
    }

    public function saveEvent(DTO\Event $record): DTO\SaveEvent
    {
        $parameters = [static::STD_REQ => 'saveEvent'] + $record->getQuery();
        return $this->make(DTO\SaveEvent::class, $parameters);
    }

    public function saveCustomer(DTO\Customer $record): DTO\SaveCustomer
    {
        $parameters = [static::STD_REQ => 'saveCustomer'] + $record->getQuery();
        return $this->make(DTO\SaveCustomer::class, $parameters);
    }

    public function saveCurrency(DTO\Currency $record): DTO\SaveCurrency
    {
        $parameters = [static::STD_REQ => 'saveCurrency'] + $record->getQuery();
        return $this->make(DTO\SaveCurrency::class, $parameters);
    }

    public function saveCampaign(DTO\Campaign $record): DTO\SaveCampaign
    {
        $parameters = [static::STD_REQ => 'saveCampaign'] + $record->getQuery();
        return $this->make(DTO\SaveCampaign::class, $parameters);
    }

    public function saveAddress(DTO\Address $record): DTO\SaveAddress
    {
        $parameters = [static::STD_REQ => 'saveAddress'] + $record->getQuery();
        return $this->make(DTO\SaveAddress::class, $parameters);
    }

    public function saveProduct(DTO\Product $record): DTO\SaveProduct
    {
        $parameters = [static::STD_REQ => 'saveProduct'] + $record->getQuery();
        return $this->make(DTO\SaveProduct::class, $parameters);
    }

    public function saveSupplier(DTO\Supplier $record): DTO\SaveSupplier
    {
        $parameters = [static::STD_REQ => 'saveSupplier'] + $record->getQuery();
        return $this->make(DTO\SaveSupplier::class, $parameters);
    }

    public function saveCustomerGroup(DTO\CustomerGroup $record): DTO\SaveCustomerGroup
    {
        $parameters = [static::STD_REQ => 'saveCustomerGroup'] + $record->getQuery();
        return $this->make(DTO\SaveCustomerGroup::class, $parameters);
    }

    public function saveBrand(DTO\Brand $record): DTO\SaveBrand
    {
        $parameters = [static::STD_REQ => 'saveBrand'] + $record->getQuery();
        return $this->make(DTO\SaveBrand::class, $parameters);
    }

    /*
    |--------------------------------------------------------------------------
    | API: Get related calls
    |--------------------------------------------------------------------------
    */

    public function getSalesDocuments(array $parameters = []): Collections\SaleDocuments
    {
        $parameters[static::STD_REQ] = 'getSalesDocuments';
        return $this->make(Collections\SaleDocuments::class, $parameters);
    }

    public function getPurchaseDocuments(array $parameters = []): Collections\PurchaseDocuments
    {
        $parameters[static::STD_REQ] = 'getPurchaseDocuments';
        return $this->make(Collections\PurchaseDocuments::class, $parameters);
    }

    public function getEvents(array $parameters = []): Collections\Events
    {
        $parameters[static::STD_REQ] = 'getEvents';
        return $this->make(Collections\Events::class, $parameters);
    }

    public function getCampaigns(array $parameters = []): Collections\Campaigns
    {
        $parameters[static::STD_REQ] = 'getCampaigns';
        return $this->make(Collections\Campaigns::class, $parameters);
    }

    public function getPayments(array $parameters = []): Collections\Payments
    {
        $parameters[static::STD_REQ] = 'getPayments';
        return $this->make(Collections\Payments::class, $parameters);
    }

    public function getPaymentTypes(array $parameters = []): Collections\PaymentTypes
    {
        $parameters[static::STD_REQ] = 'getPaymentTypes';
        return $this->make(Collections\PaymentTypes::class, $parameters);
    }

    public function getInvoicePaymentTypes(array $parameters = []): Collections\InvoicePaymentTypes
    {
        $parameters[static::STD_REQ] = 'getInvoicePaymentTypes';
        return $this->make(Collections\InvoicePaymentTypes::class, $parameters);
    }

    public function getInventoryWriteOffs(array $parameters = []): Collections\InventoryWriteOffs
    {
        $parameters[static::STD_REQ] = 'getInventoryWriteOffs';
        return $this->make(Collections\InventoryWriteOffs::class, $parameters);
    }

    public function getProductPictures(array $parameters = []): Collections\ProductPictures
    {
        $parameters[static::STD_REQ] = 'getProductPictures';
        return $this->make(Collections\ProductPictures::class, $parameters);
    }

    public function getInventoryTransfers(array $parameters = []): Collections\InventoryTransfers
    {
        $parameters[static::STD_REQ] = 'getInventoryTransfers';
        return $this->make(Collections\InventoryTransfers::class, $parameters);
    }

    public function getInventoryRegistrations(array $parameters = []): Collections\InventoryRegistrations
    {
        $parameters[static::STD_REQ] = 'getInventoryRegistrations';
        return $this->make(Collections\InventoryRegistrations::class, $parameters);
    }

    public function getVatRates(array $parameters = []): Collections\VatRates
    {
        $parameters[static::STD_REQ] = 'getVatRates';
        return $this->make(Collections\VatRates::class, $parameters);
    }

    public function getWarehouses(array $parameters = []): Collections\Warehouses
    {
        $parameters[static::STD_REQ] = 'getWarehouses';
        return $this->make(Collections\Warehouses::class, $parameters);
    }

    public function getSessionKeyUser(array $parameters = []): Collections\SessionKeyUsers
    {
        $parameters[static::STD_REQ] = 'getSessionKeyUser';
        return $this->make(Collections\SessionKeyUsers::class, $parameters);
    }

    public function getSessionKeyInfo(): DTO\SessionKeyInfo
    {
        $parameters[static::STD_REQ] = 'getSessionKeyInfo';
        return $this->make(DTO\SessionKeyInfo::class, $parameters);
    }

    public function getProducts(array $parameters = []): Collections\Products
    {
        $parameters[static::STD_REQ] = 'getProducts';
        return $this->make(Collections\Products::class, $parameters);
    }

    public function getProductCategories(array $parameters = []): Collections\ProductCategories
    {
        $parameters[static::STD_REQ] = 'getProductCategories';
        return $this->make(Collections\ProductCategories::class, $parameters);
    }

    public function getProductGroups(array $parameters = []): Collections\ProductGroups
    {
        $parameters[static::STD_REQ] = 'getProductGroups';
        return $this->make(Collections\ProductGroups::class, $parameters);
    }

    public function getProductUnits(array $parameters = []): Collections\ProductUnits
    {
        $parameters[static::STD_REQ] = 'getProductUnits';
        return $this->make(Collections\ProductUnits::class, $parameters);
    }

    public function getProductPrices(array $parameters = []): Collections\ProductPrices
    {
        $parameters[static::STD_REQ] = 'getProductPrices';
        return $this->make(Collections\ProductPrices::class, $parameters);
    }

    public function getProductStock(array $parameters = []): Collections\ProductStocks
    {
        $parameters[static::STD_REQ] = 'getProductStock';
        return $this->make(Collections\ProductStocks::class, $parameters);
    }

    public function getSuppliers(array $parameters = []): Collections\Suppliers
    {
        $parameters[static::STD_REQ] = 'getSuppliers';
        return $this->make(Collections\Suppliers::class, $parameters);
    }

    public function getSupplierGroups(array $parameters = []): Collections\SupplierGroups
    {
        $parameters[static::STD_REQ] = 'getSupplierGroups';
        return $this->make(Collections\SupplierGroups::class, $parameters);
    }

    public function getSalesDocumentActualReportsHTML(array $parameters = []): Collections\SalesDocumentActualReportsHTMLs
    {
        $parameters[static::STD_REQ] = 'getSalesDocumentActualReportsHTML';
        return $this->make(Collections\SalesDocumentActualReportsHTMLs::class, $parameters);
    }

    public function getCashIns(array $parameters = []): Collections\CashIns
    {
        $parameters[static::STD_REQ] = 'getCashIns';
        return $this->make(Collections\CashIns::class, $parameters);
    }

    public function getUserGroups(array $parameters = []): Collections\UserGroups
    {
        $parameters[static::STD_REQ] = 'getUserGroups';
        return $this->make(Collections\UserGroups::class, $parameters);
    }

    public function getIssuedCoupons(array $parameters = []): Collections\IssuedCoupons
    {
        $parameters[static::STD_REQ] = 'getIssuedCoupons';
        return $this->make(Collections\IssuedCoupons::class, $parameters);
    }

    public function getStocktakings(array $parameters = []): Collections\Stocktakings
    {
        $parameters[static::STD_REQ] = 'getStocktakings';
        return $this->make(Collections\Stocktakings::class, $parameters);
    }

    public function getUserOperationsLog(array $parameters = []): Collections\UserOperationLogs
    {
        $parameters[static::STD_REQ] = 'getUserOperationsLog';
        return $this->make(Collections\UserOperationLogs::class, $parameters);
    }

    public function getChangedDataSince($changeSince, array $parameters = []): Collections\ChangeDataSinces
    {
        $parameters = array_merge($parameters, [static::STD_REQ => 'getChangedDataSince', 'changedSince' => $changeSince]);
        return $this->make(Collections\ChangeDataSinces::class, $parameters);
    }

    public function getPriceLists(array $parameters = []): Collections\PriceLists
    {
        $parameters[static::STD_REQ] = 'getPriceLists';
        return $this->make(Collections\PriceLists::class, $parameters);
    }

    public function getPointsOfSale(array $parameters = []): Collections\PointOfSales
    {
        $parameters[static::STD_REQ] = 'getPointsOfSale';
        return $this->make(Collections\PointOfSales::class, $parameters);
    }

    public function getGiftCards(array $parameters = []): Collections\GiftCards
    {
        $parameters[static::STD_REQ] = 'getGiftCards';
        return $this->make(Collections\GiftCards::class, $parameters);
    }

    public function getCustomerGroups(array $parameters = []): Collections\CustomerGroups
    {
        $parameters[static::STD_REQ] = 'getCustomerGroups';
        return $this->make(Collections\CustomerGroups::class, $parameters);
    }

    public function getDayClosings(array $parameters = []): Collections\DayClosings
    {
        $parameters[static::STD_REQ] = 'getDayClosings';
        return $this->make(Collections\DayClosings::class, $parameters);
    }

    public function getAddresses(array $parameters = []): Collections\Addresses
    {
        $parameters[static::STD_REQ] = 'getAddresses';
        return $this->make(Collections\Addresses::class, $parameters);
    }

    public function getAddressTypes(array $parameters = []): Collections\AddressTypes
    {
        $parameters[static::STD_REQ] = 'getAddressTypes';
        return $this->make(Collections\AddressTypes::class, $parameters);
    }

    public function getCurrencies(array $parameters = []): Collections\Currencies
    {
        $parameters[static::STD_REQ] = 'getCurrencies';
        return $this->make(Collections\Currencies::class, $parameters);
    }

    public function getEmployees(array $parameters = []): Collections\Employees
    {
        $parameters[static::STD_REQ] = 'getEmployees';
        return $this->make(Collections\Employees::class, $parameters);
    }

    public function getBrands(array $parameters = []): Collections\Brands
    {
        $parameters[static::STD_REQ] = 'getBrands';
        return $this->make(Collections\Brands::class, $parameters);
    }

    public function getCustomers(array $parameters = []): Collections\Customers
    {
        $parameters[static::STD_REQ] = 'getCustomers';
        return $this->make(Collections\Customers::class, $parameters);
    }

    public function getServiceEndpoints()
    {
        $parameters[static::STD_REQ] = 'getServiceEndpoints';
        return $this->stdRequest($parameters);
    }


    /*
    |--------------------------------------------------------------------------
    | API: Bulks related calls
    |--------------------------------------------------------------------------
    */

    public function getPaymentsBulk(array $parameters = [[]]): Bulks\PaymentsBulk
    {
        $this->validateBulkParameters($parameters);
        foreach ($parameters as $params)
            $query[] = [static::BULK_REQ => 'getPayments'] + $params;
        return $this->make(Bulks\PaymentsBulk::class, $query ?? []);
    }

    public function getCustomersBulk(array $parameters = [[]]): Bulks\CustomersBulk
    {
        $this->validateBulkParameters($parameters);
        foreach ($parameters as $params)
            $query[] = [static::BULK_REQ => 'getCustomers'] + $params;
        return $this->make(Bulks\CustomersBulk::class, $query ?? []);
    }

    public function getProductBulk(array $parameters = [[]]): Bulks\ProductsBulk
    {
        $this->validateBulkParameters($parameters);
        foreach ($parameters as $params)
            $query[] = [static::BULK_REQ => 'getProducts'] + $params;
        return $this->make(Bulks\ProductsBulk::class, $query ?? []);
    }

    public function getPriceListBulk(array $parameters = [[]]): Bulks\PriceListBulk
    {
        $this->validateBulkParameters($parameters);
        foreach ($parameters as $params)
            $query[] = [static::BULK_REQ => 'getPriceLists'] + $params;
        return $this->make(Bulks\PriceListBulk::class, $query ?? []);
    }

    public function getSalesDocumentsBulk(array $parameters = [[]]): Bulks\SalesDocumentsBulk
    {
        $this->validateBulkParameters($parameters);
        foreach ($parameters as $parameter)
            $query[] = [static::BULK_REQ => 'getSalesDocuments'] + $parameter;
        return $this->make(Bulks\SalesDocumentsBulk::class, $query ?? []);
    }

    public function getPurchaseDocumentsBulk(array $parameters = [[]]): Bulks\PurchaseDocumentsBulk
    {
        $this->validateBulkParameters($parameters);
        foreach ($parameters as $params)
            $query[] = [static::BULK_REQ => 'getPurchaseDocuments'] + $params;
        return $this->make(Bulks\PurchaseDocumentsBulk::class, $query ?? []);
    }

    public function getProductPriceBulk(array $parameters = [[]]): Bulks\ProductPriceBulk
    {
        $this->validateBulkParameters($parameters);
        foreach ($parameters as $params)
            $query[] = [static::BULK_REQ => 'getProductPrices'] + $params;
        return $this->make(Bulks\ProductPriceBulk::class, $query ?? []);
    }

    public function getProductStockBulk(array $parameters = [[]]): Bulks\ProductStockBulk
    {
        $this->validateBulkParameters($parameters);
        foreach ($parameters as $params)
            $query[] = [static::BULK_REQ => 'getProductStock'] + $params;
        return $this->make(Bulks\ProductStockBulk::class, $query ?? []);
    }

    public function getProductPicturesBulk(array $parameters = [[]]): Bulks\ProductPicturesBulk
    {
        $this->validateBulkParameters($parameters);
        foreach ($parameters as $params)
            $query[] = [static::BULK_REQ => 'getProductPictures'] + $params;
        return $this->make(Bulks\ProductPicturesBulk::class, $query ?? []);
    }

    public function getBulkResponse(array $parameters = [[]]): Bulks\BulkResponse
    {
        $this->validateBulkParameters($parameters);
        return $this->make(Bulks\BulkResponse::class, $parameters);
    }


    /*
    |--------------------------------------------------------------------------
    | Object utility methods
    |--------------------------------------------------------------------------
    */

    /**
     * Login or re-login into Erply API
     * @param $code
     * @param $username
     * @param $password
     * @return DTO\VerifyUser
     */
    public function verifyUser($code = null, $username = null, $password = null): DTO\VerifyUser
    {
        $parameters = [
            'request'       => 'verifyUser',
            'username'      => $username ?? $this->getUsername(),
            'password'      => $password ?? $this->getPassword(),
            'sessionLength' => $this->getSessionLength(),
        ];

        if ($code !== null) $this->setCode($code);
        if ($username !== null) $this->setUsername($username);
        if ($password !== null) $this->setPassword($password);

        $this->session = null;
        $this->keepalive = null;

        $this->session = $this->make(DTO\VerifyUser::class, $parameters);
        $this->keepalive = $this->getSessionKeyInfo();

        return $this->session;
    }

    public function stdRequest(array $parameters = []): array
    {
        $parameters['recordsOnPage'] = $this->getRecordsOnPage();
        return $this->sendPostDataToErply($parameters);
    }

    public function bulkRequest(array $parameters = [[]]): array
    {
        /*
        TODO: Erply позволяет обрабатывать до 100 запросов в пачке.
              Здесь мы принудительно разрезаем пачку с запросами на чанки по 100 запросов.
              Но дальше в моделях BaseEntityBulk учитывается только первый чанк,
              поэтому нет смысла запрашивать все чанки, кроме первой, из-за этого в цикле стоит break.
              Да и когда дело дойдет до нужды обрабатывать более 100 запросов в одной пакетной обработке,
              нужно будет это реализовать в моделях BaseEntityBulk.
              На данный момент, если в параметрах будет более 100 запросов, обработаны будут только первые 100.
        */

        $responses = [];
        $chunkedData = array_chunk($parameters, 100);

        foreach ($chunkedData as $key => $paramChunk) {
            $responses[$key] = $this->sendBulk($paramChunk);
            break;
        }

        return $responses;
    }

    protected function sendBulk(array $parameters = []): array
    {
        $rID = 1;
        foreach ($parameters as &$params) {
            $params['recordsOnPage'] = $this->getRecordsOnPage();
            $params['requestID'] = $rID++;
        }

        $bulkRequestParams = [];
        $bulkRequestParams['requests'] = json_encode($parameters);
        return $this->sendPostDataToErply($bulkRequestParams);
    }

    /**
     * @param $requestParams
     * @return array{
     *     status:array{
     *          request:string,
     *          requestUnixTime:int,
     *          responseStatus:string,
     *          errorCode:int,
     *          errorField:string,
     *          generationTime:double,
     *          recordsTotal:int,
     *          recordsInResponse:int},
     *     records:array,
     *     requests:array{
     *          status:array,
     *          records:array}
     *     } Associative array of response from remote server
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @see https://docs.guzzlephp.org/en/6.5/request-options.html
     */
    protected function sendPostDataToErply($requestParams, $attempt = 1): array
    {
        $this->keepalive();

        $uri = 'https://' . $this->getCode() . '.erply.com/api/';

        $curlOptions = [
            CURLOPT_SSLVERSION     => CURL_SSLVERSION_TLSv1_2,
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_POST           => true,
            CURLOPT_FOLLOWLOCATION => false,
            // CURLOPT_SSL_VERIFYPEER => true,
            // CURLOPT_CAINFO         => '/etc/ssl/cert.pem',
        ];

        $requestParams['version'] = '1.0';
        $requestParams['clientCode'] = $this->getCode();
        $requestParams['sessionKey'] = $this->getSessionKey();

        $this->log($requestParams, self::LOG_REQUEST);

        $client = new Client();
        try {
            $response = $client->request('POST', $uri, [
                'version' => 1.1,
                'curl.options' => $curlOptions,
                'form_params' => $requestParams,
                'headers' => [
                    'Accept' => '*/*',
                    'User-Agent' => static::USER_AGENT,
                ],
            ]);

            $this->log($response->getBody()->getContents(), self::LOG_RESPONSE);

            $response = json_decode($response->getBody(), true);

            if (isset($response['status'])) {
                if (isset($requestParams['requests'])) {
                    // если у нас пакетный вызов, то распаковываем отправленный запрос обратно в массив
                    $affectedRequest = $requestParams;
                    $affectedRequest['requests'] = json_decode($requestParams['requests'], true);
                    $response['status']['affectedRequest'] = $affectedRequest;
                } else {
                    $response['status']['affectedRequest'] = $requestParams;
                }

                if ($response['status']['errorCode'] > 0) {
                    $this->log("Received status with error code {$response['status']['errorCode']}", self::LOG_NOTICE);
                    if ($response['status']['errorCode'] == 1054) {
                        if ($attempt++ <= $this->attempts) {
                            $this->log('Received code that session expired. Performing re-connect...', self::LOG_NOTICE);
                            $this->verifyUser();
                            return $this->sendPostDataToErply($requestParams, $attempt);
                        } else {
                            $this->log("Received code that session expired, and $this->attempts attempts is over.");
                            $this->raiseError($response['status']);
                        }
                    } else {
                        $this->raiseError($response['status']);
                    }
                }
            }

            return $response;

        } catch (ApiException $e) {
            $this->log("[{$e->getCode()}] {$e->getMessage()}", self::LOG_ERROR);
            throw $e;

        } catch (\Exception $e) {
            $this->log($e->getMessage(), self::LOG_ERROR);

            $status = [
                'responseStatus' => 'error',
                'errorField' => $e->getMessage(),
                'errorCode' => null
            ];

            return [
                'status' => $status,
                'records' => [],
                'requests' => []
            ];
        }
    }

    protected function make($entity, $parameters)
    {
        $response = null;

        if (is_subclass_of($entity, BaseEntity::class)) {
            $response = $this->stdRequest($parameters);
            $response = $response['records'][0] ?? null;
        } elseif (is_subclass_of($entity, BaseEntityCollection::class)) {
            $response = $this->stdRequest($parameters);
        } elseif (is_subclass_of($entity, BaseEntityBulk::class)) {
            $response = $this->bulkRequest($parameters);
        }

        $instance = new $entity($response);

        // Переносим текущее соединение в создаваемый объект
        if (method_exists($instance, 'setConnection'))
            $instance->setConnection($this);

        return $instance;
    }

    /**
     * This internal method for test valid session and perform reconnect if already required
     */
    protected function keepalive()
    {
        if ($this->keepalive instanceof DTO\SessionKeyInfo) {
            if ($this->keepalive->isValid() && !$this->keepalive->isAlive()) {
                $this->log('Session expired. Performing re-connect...', self::LOG_NOTICE);
                $this->verifyUser();
            }
        }
    }

    /**
     * @throws \TypeError
     */
    protected function validateRecords($records, $has_contents): bool
    {
        if (is_array($records))
            if (static::isArrayOfEntities($records, $has_contents))
                return true;

        throw new \InvalidArgumentException("Incorrect input parameters passed, expected only array of `$has_contents`");
    }

    protected function validateBulkParameters($parameters): bool
    {
        foreach ($parameters as $param)
            if (!is_array($param))
                throw new \InvalidArgumentException('Incorrect input parameters passed, expected array of at least one sub-array element.');

        return true;
    }

    /** @throws ApiException */
    protected function raiseError($status)
    {
        $e = new ApiException($status);

        if ($this->getThrow()) {
            throw $e;
        } else {
            $this->log("[{$e->getCode()}] {$e->getMessage()}", self::LOG_ERROR);
        }
    }


    /*
    |--------------------------------------------------------------------------
    | Static methods of Class
    |--------------------------------------------------------------------------
    */

    protected static function isArrayOfEntities(array $records, $entity): bool
    {
        foreach ($records as $record)
            if (!is_object($record) || !$record instanceof $entity)
                return false;
        return true;
    }

    public static function getInstanceWithCredentials($code, $username, $password): ErplyAPI
    {
        $connection = new ErplyAPI();
        $connection->verifyUser($code, $username, $password);
        return $connection;
    }

}