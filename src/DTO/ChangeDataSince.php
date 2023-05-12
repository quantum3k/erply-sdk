<?php

namespace quantum3k\ErplySDK\DTO;

class ChangeDataSince extends BaseEntity
{
    public $tableName;
    public $updated;
    public $deleted;

    public $changedSince;
    public $customersChangedSince;
    public $employeesChangedSince;
    public $suppliersChangedSince;
    public $addressesChangedSince;
    public $currenciesChangedSince;
    public $customerGroupsChangedSince;
    public $emailAccountsChangedSince;
    public $giftCardsChangedSince;
    public $pointsOfSaleChangedSince;
    public $priceListsChangedSince;
    public $productGroupsChangedSince;
    public $productCategoriesChangedSince;
    public $productsChangedSince;
    public $servicesChangedSince;
    public $supplierGroupsChangedSince;
    public $usersChangedSince;
    public $eventsChangedSince;
    public $purchaseDocumentsChangedSince;
    public $salesDocumentsChangedSince;
    public $campaignsChangedSince;
    public $couponsChangedSince;
    public $warehousesChangedSince;
    public $vatRatesChangedSince;
    public $inventoryRegistrationsChangedSince;
    public $inventoryTransfersChangedSince;
    public $inventoryWriteOffsChangedSince;
    public $paymentsChangedSince;

    protected static $query_fields = ['changedSince', 'customersChangedSince', 'employeesChangedSince', 'suppliersChangedSince',
        'addressesChangedSince', 'currenciesChangedSince', 'customerGroupsChangedSince', 'emailAccountsChangedSince',
        'giftCardsChangedSince', 'pointsOfSaleChangedSince', 'priceListsChangedSince', 'productGroupsChangedSince',
        'productCategoriesChangedSince', 'productsChangedSince', 'servicesChangedSince', 'supplierGroupsChangedSince',
        'usersChangedSince', 'eventsChangedSince', 'purchaseDocumentsChangedSince', 'salesDocumentsChangedSince',
        'campaignsChangedSince', 'couponsChangedSince', 'warehousesChangedSince', 'vatRatesChangedSince',
        'inventoryRegistrationsChangedSince', 'inventoryTransfersChangedSince', 'inventoryWriteOffsChangedSince', 'paymentsChangedSince'];
}
