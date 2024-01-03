<?php

namespace quantum3k\ErplySDK\DTO;

use quantum3k\ErplySDK\Collections\Attributes;
use quantum3k\ErplySDK\Traits\AddAttribute;

class Supplier extends BaseEntity
{
    use AddAttribute;

    public $supplierID;
    public $supplierType;
    public $fullName;
    public $companyName;
    public $companyTypeID;
    public $firstName;
    public $lastName;
    public $groupID;
    public $groupName;
    public $phone;
    public $mobile;
    public $email;
    public $fax;
    public $code;
    public $integrationCode;
    public $vatrateID;
    public $currencyCode;
    public $deliveryTermsID;
    public $countryID;
    public $countryName;
    public $countryCode;
    public $address;
    public $GLN;

    /** @var Attributes */
    public $attributes;

    public $vatNumber;
    public $skype;
    public $website;
    public $bankName;
    public $bankAccountNumber;
    public $bankIBAN;
    public $bankSWIFT;
    public $birthday;
    public $companyID;
    public $parentCompanyName;
    public $supplierManagerID;
    public $supplierManagerName;
    public $paymentDays;
    public $notes;
    public $lastModified;
    public $added;

    protected static $nested_fields = ['attributes' => Attributes::class];

    protected static $query_fields = [
        'supplierID', 'groupID', 'supplierManagerID', '*****', 'companyName', 'companyTypeID',
        'firstName', 'lastName', 'fullName', 'code', 'companyID', 'birthday', 'vatNumber',
        'bankName', 'bankAccountNumber', 'bankIBAN', 'bankSWIFT', 'phone', 'mobile', 'fax',
        'email', 'skype', 'website', 'notes', 'integrationCode', 'vatrateID', 'currencyCode',
        'deliveryTermsID', 'countryID', 'GLN', 'paymentDays', 'attributes'
    ];
}
