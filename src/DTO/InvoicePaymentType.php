<?php

namespace quantum3k\ErplySDK\DTO;

class InvoicePaymentType extends BaseEntity
{
    public $id;
    public $invoicePaymentTypeID;
    public $type;
    public $name;
    public $nameEST;
    public $nameENG;
    public $nameLAT;
    public $nameRUS;
    public $nameFIN;
    public $paidImmediately;
    public $added;
    public $lastModified;

    protected static $query_fields = [
        'invoicePaymentTypeID', 'type', 'name', 'nameEST', 'nameENG', 'nameLAT',
        'nameRUS', 'nameFIN', 'paidImmediately'
    ];
}