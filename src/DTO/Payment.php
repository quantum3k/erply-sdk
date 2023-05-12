<?php

namespace quantum3k\ErplySDK\DTO;

class Payment extends BaseEntity
{
    public $paymentID;
    public $documentID;
    public $customerID;
    public $typeID;
    public $type;
    public $date;
    public $sum;
    public $currencyCode;
    public $currencyRate;
    public $cashPaid;
    public $cashChange;
    public $info;
    public $cardHolder;
    public $cardNumber;
    public $cardType;
    public $authorizationCode;
    public $referenceNumber;
    public $isPrepayment;

    public $bankTransactionID;
    public $bankAccount;
    public $bankDocumentNumber;
    public $bankDate;
    public $bankPayerAccount;
    public $bankPayerName;
    public $bankPayerCode;
    public $bankSum;
    public $bankReferenceNumber;
    public $bankDescription;
    public $bankCurrency;
    public $archivalNumber;

    public $storeCredit;
    public $paymentServiceProvider;
    public $aid;
    public $applicationLabel;
    public $pinStatement;
    public $cryptogramType;
    public $cryptogram;
    public $expirationDate;
    public $entryMethod;
    public $transactionType;
    public $transactionNumber;
    public $transactionId;
    public $transactionTime;
    public $klarnaPaymentID;
    public $certificateBalance;
    public $statusCode;
    public $statusMessage;
    public $giftCardVatRateID;
    public $signature;
    public $signatureIV;
    public $added;
    public $lastModified;

    /** @var Attribute[] */
    public $attributes;

    public $time;
    public $isReservation;

    protected static $nested_fields = ['attributes' => Attribute::class];

    protected static $query_fields = [
        'paymentID', 'customerID', 'documentID', 'type', 'typeID', 'date', 'time', 'sum',
        'cashPaid', 'cashChange', 'currencyCode', 'info', 'cardHolder', 'cardNumber', 'cardType', 'signature', 'signatureIV',
        'addedToStoreCredit', 'paymentServiceProvider', 'aid', 'applicationLabel', 'pinStatement', 'cryptogramType',
        'cryptogram', 'expirationDate', 'entryMethod', 'transactionType', 'transactionNumber', 'transactionId',
        'transactionType', 'transactionTime', 'klarnaPaymentID', 'certificateBalance', 'statusCode', 'statusMessage',
        'isPrepayment', 'isReservation', 'giftCardVatRateID', 'added', 'bankAccount', 'bankDocumentNumber', 'bankDate',
        'bankPayerAccount', 'bankPayerName', 'bankPayerCode', 'bankSum', 'bankReferenceNumber', 'bankDescription',
        'bankCurrency', 'archivalNumber', 'attributes'
    ];

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }
}
