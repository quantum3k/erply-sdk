<?php

namespace quantum3k\ErplySDK\DTO;

class PaymentType extends BaseEntity
{
    public $id;
    public $paymentTypeID;
    public $type;
    public $name;
    public $nameEST;
    public $nameENG;
    public $nameLAT;
    public $nameRUS;
    public $nameFIN;
    public $print_name;
    public $print_nameEST;
    public $print_nameENG;
    public $print_nameLAT;
    public $print_nameRUS;
    public $print_nameFIN;
    public $quickBooksDebitAccount;
    public $added;
    public $lastModified;

    protected static $query_fields = [
        'paymentTypeID', 'type', 'name', 'nameEST', 'nameENG', 'nameLAT',
        'nameRUS', 'nameFIN', 'print_name', 'print_nameEST', 'print_nameENG', 'print_nameLAT',
        'print_nameRUS', 'print_nameFIN', 'quickBooksDebitAccount'
    ];
}