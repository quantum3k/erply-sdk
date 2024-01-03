<?php

namespace quantum3k\ErplySDK\DTO;

use quantum3k\ErplySDK\Collections\Attributes;
use quantum3k\ErplySDK\Traits\AddAttribute;

class SaleDocument extends BaseEntity
{
    use AddAttribute;

    public $id;
    public $type;
    public $exportInvoiceType;
    public $currencyCode;
    public $currencyRate;
    public $warehouseID;
    public $warehouseName;
    public $pointOfSaleID;
    public $pointOfSaleName;
    public $pricelistID;
    public $number;
    public $date;
    public $inventoryTransactionDate;
    public $time;
    public $clientID;
    public $clientName;
    public $clientEmail;
    public $clientCardNumber;
    public $addressID;
    public $address;
    public $clientFactoringContractNumber;
    public $clientPaysViaFactoring;
    public $payerID;
    public $payerName;
    public $payerAddressID;
    public $payerAddress;
    public $payerFactoringContractNumber;
    public $payerPaysViaFactoring;
    public $shipToID;
    public $shipToName;
    public $shipToAddressID;
    public $shipToAddress;
    public $contactID;
    public $contactName;
    public $shipToContactID;
    public $shipToContactName;
    public $employeeID;
    public $employeeName;
    public $projectID;
    public $invoiceState;
    public $paymentType;
    public $paymentTypeID;
    public $paymentDays;
    public $paymentStatus;
    public $baseDocuments;
    public $followUpDocuments;
    public $previousReturnsExist;
    public $printDiscounts;
    public $algorithmVersion;
    public $algorithmVersionCalculated;
    public $confirmed;
    public $notes;
    public $internalNotes;
    public $netTotal;
    public $vatTotal;
    public $netTotalsByRate;
    public $vatTotalsByRate;
    public $netTotalsByTaxRate;
    public $vatTotalsByTaxRate;
    public $rounding;
    public $total;
    public $paid;
    public $externalNetTotal;
    public $externalVatTotal;
    public $externalRounding;
    public $externalTotal;
    public $taxExemptCertificateNumber;
    public $otherCommissionReceivers;
    public $packerID;
    public $referenceNumber;
    public $webShopOrderNumbers;
    public $trackingNumber;
    public $fulfillmentStatus;
    public $customReferenceNumber;
    public $cost;
    public $reserveGoods;
    public $reserveGoodsUntilDate;
    public $deliveryDate;
    public $deliveryTypeID;
    public $deliveryTypeName;
    public $shippingDate;
    public $packingUnitsDescription;
    public $penalty;
    public $triangularTransaction;
    public $purchaseOrderDone;
    public $transactionTypeID;
    public $transactionTypeName;
    public $transportTypeID;
    public $transportTypeName;
    public $deliveryTerms;
    public $deliveryTermsLocation;
    public $euInvoiceType;
    public $deliveryOnlyWhenAllItemsInStock;
    public $eInvoiceBuyerID;
    public $workOrderID;
    public $lastModified;
    public $lastModifierUsername;
    public $added;
    public $invoiceLink;
    public $receiptLink;
    public $returnedPayments;
    public $amountAddedToStoreCredit;
    public $amountPaidWithStoreCredit;
    public $applianceID;
    public $applianceReference;
    public $assignmentID;
    public $vehicleMileage;
    public $customNumber;
    public $advancePayment;
    public $advancePaymentPercent;
    public $printWithOriginalProductNames;
    public $hidePrices;
    public $hideAmounts;
    public $hideTotal;
    public $isFactoringInvoice;
    public $taxOfficeID;
    public $periodStartDate;
    public $periodEndDate;
    public $orderArrived;
    public $orderInvoiced;
    public $ediStatus;
    public $ediText;
    public $documentURL;
    public $hidePaymentDays;
    public $creditInvoiceType;
    public $issuedCouponIDs;

    /** @var Attributes */
    public $attributes;

    /** @var LongAttribute[] */
    public $longAttributes;

    /** @var SaleDocumentRow[] */
    public $rows;

    public $customerID;
    public $confirmInvoice;
    public $doNotAddRewardPoints;
    public $invoiceNo;
    public $allowDuplicateNumbers;
    public $sendByEmail;
    public $paymentInfo;
    public $isCashInvoice;
    public $creditToDocumentID;
    public $baseDocumentID;
    public $baseDocumentIDs;
    public $deliveryTermsID;
    public $jdoc;
    public $temporaryUUID;

    protected static $nested_fields = [
        'rows' => SaleDocumentRow::class,
        'attributes' => Attributes::class,
        'longAttributes' => LongAttribute::class,
    ];

    /**
     * todo Не реализовано сохранение полей для promotionRule, там где '*****' - должна быть модель с этими значениями
     */
    protected static $query_fields = [
        'id', 'type', 'currencyCode', 'currencyRate', 'warehouseID', 'pointOfSaleID', 'date', 'time',
        'customerID', 'addressID', 'payerID', 'payerAddressID', 'shipToID', 'shipToAddressID', 'contactID', 'shipToContactID',
        'employeeID', 'confirmInvoice', 'doNotAddRewardPoints', 'invoiceNo', 'customNumber', 'customReferenceNumber',
        'webShopOrderNumbers', 'trackingNumber', 'fulfillmentStatus', 'allowDuplicateNumbers', 'notes', 'internalNotes', 'projectID',
        'invoiceState', 'paymentType', 'paymentTypeID', 'paymentDays', 'hidePaymentDays', 'printDiscounts', 'penalty', 'reserveGoods',
        'reserveGoodsUntilDate', 'sendByEmail', 'pricelistID', 'paymentStatus', 'paymentInfo', 'isCashInvoice', 'creditToDocumentID',
        'creditInvoiceType', 'amountPaidWithStoreCredit', 'taxExemptCertificateNumber', 'otherCommissionReceivers', 'deliveryDate',
        'shippingDate', 'baseDocumentID', 'baseDocumentIDs', 'exportInvoiceType', 'deliveryTypeID', 'deliveryOnlyWhenAllItemsInStock',
        'packingUnitsDescription', 'euInvoiceType', 'packerID', 'transactionTypeID', 'transportTypeID', 'deliveryTermsID',
        'deliveryTermsLocation', 'triangularTransaction', 'purchaseOrderDone', 'applianceID', 'applianceReference', 'assignmentID',
        'vehicleMileage', 'added', 'rounding', 'externalNetTotal', 'externalVatTotal', 'externalRounding', 'externalTotal',
        'temporaryUUID', 'advancePayment', 'advancePaymentPercent', 'printWithOriginalProductNames', 'hidePrices', 'hideAmounts',
        'hideTotal', 'isFactoringInvoice', 'taxOfficeID', 'algorithmVersion', 'periodStartDate', 'periodEndDate', 'orderArrived',
        'orderInvoiced', 'eInvoiceBuyerID', 'workOrderID', 'ediStatus', 'ediText', 'documentURL', 'rows', '*****', 'attributes',
        'longAttributes'
    ];

    public function addRow(): SaleDocumentRow
    {
        return $this->rows[] = new static::$nested_fields['rows']();
    }

    public function addLongAttribute(): LongAttribute
    {
        return $this->longAttributes[] = new static::$nested_fields['longAttributes']();
    }
}
