<?php

namespace quantum3k\ErplySDK\DTO;

class PurchaseDocument extends BaseEntity
{
    public $id;
    public $type;
    public $status;
    public $currencyCode;
    public $currencyRate;
    public $warehouseID;
    public $warehouseName;
    public $number;
    public $regnumber;
    public $date;
    public $inventoryTransactionDate;
    public $time;
    public $supplierID;
    public $supplierName;
    public $supplierGroupID;
    public $addressID;
    public $address;
    public $contactID;
    public $contactName;
    public $employeeID;
    public $employeeName;
    public $supplierID2;
    public $supplierName2;
    public $stateID;
    public $paymentDays;
    public $paid;
    public $transactionTypeID;
    public $transportTypeID;
    public $deliveryTermsID;
    public $deliveryTermsLocation;
    public $deliveryAddressID;
    public $triangularTransaction;
    public $projectID;
    public $reasonID;
    public $confirmed;
    public $referenceNumber;
    public $notes;
    public $ediStatus;
    public $ediText;
    public $documentURL;
    public $rounding;
    public $netTotal;
    public $vatTotal;
    public $total;
    public $netTotalsByTaxRate;
    public $vatTotalsByTaxRate;
    public $invoiceLink;
    public $shipDate;
    public $cost;
    public $netTotalForAccounting;
    public $totalForAccounting;
    public $additionalCosts;
    public $additionalCostsCurrencyId;
    public $additionalCostsCurrencyRate;
    public $additionalCostsDividedBy;
    public $baseToDocuments;
    public $baseDocuments;
    public $added;
    public $lastModified;

    /** @var PurchaseDocumentRow[] */
    public $rows;

    /** @var Attribute[] */
    public $attributes;

    public $no;
    public $confirmInvoice;
    public $baseDocumentIDs;
    public $temporaryUUID;

    protected static $nested_fields = [
        'rows' => PurchaseDocumentRow::class,
        'attributes' => Attribute::class
    ];

    protected static $query_fields = ['id', 'warehouseID', 'deliveryAddressID', 'currencyCode', 'no', 'type', 'date', 'time',
        'confirmInvoice', 'supplierID', 'addressID', 'contactID', 'employeeID', 'stateID', 'currencyRate', 'paymentDays',
        'paid', 'transactionTypeID', 'transportTypeID', 'deliveryTermsID', 'deliveryTermsLocation', 'triangularTransaction',
        'projectID', 'reasonID', 'referenceNumber', 'baseDocumentIDs', 'notes', 'ediStatus', 'ediText', 'documentURL',
        'shipDate', 'rounding', 'netTotalForAccounting', 'totalForAccounting', 'rows', 'attributes', 'temporaryUUID'];

    public function addRow(): PurchaseDocumentRow
    {
        return $this->rows[] = new static::$nested_fields['rows']();
    }

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }
}
