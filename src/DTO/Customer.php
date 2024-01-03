<?php

namespace quantum3k\ErplySDK\DTO;

use quantum3k\ErplySDK\Collections\Attributes;
use quantum3k\ErplySDK\Traits\AddAttribute;

class Customer extends BaseEntity
{
    use AddAttribute;

    public $customerID;
    public $customerType;
    public $fullName;
    public $companyName;
    public $companyTypeID;
    public $firstName;
    public $lastName;
    public $personTitleID;
    public $gender;
    public $groupID;
    public $countryID;
    public $groupName;
    public $payerID;
    public $phone;
    public $mobile;
    public $email;
    public $fax;
    public $code;
    public $birthday;
    public $integrationCode;
    public $flagStatus;
    public $doNotSell;
    public $colorStatus;
    public $image;
    public $taxExempt;
    public $partialTaxExemption;
    public $factoringContractNumber;
    public $paysViaFactoring;
    public $rewardPoints;
    public $twitterID;
    public $facebookName;
    public $creditCardLastNumbers;
    public $isPOSDefaultCustomer;
    public $euCustomerType;
    public $credit;
    public $salesBlocked;
    public $referenceNumber;
    public $customerCardNumber;
    public $rewardPointsDisabled;
    public $customerBalanceDisabled;
    public $posCouponsDisabled;
    public $emailOptOut;
    public $lastModifierUsername;
    public $shipGoodsWithWaybills;
    public $addresses;

    /** @var Customer[] */
    public $contactPersons;

    public $defaultAssociationID;
    public $defaultAssociationName;
    public $defaultProfessionalID;
    public $defaultProfessionalName;
    public $associations;
    public $professionals;

    /**@var Attributes */
    public $attributes;

    /** @var LongAttribute[] */
    public $longAttributes;

    public $externalIDs;

    public $actualBalance;
    public $creditLimit;
    public $availableCredit;
    public $creditAllowed;

    public $vatNumber;
    public $skype;
    public $website;
    public $webshopUsername;
    public $webshopLastLogin;
    public $bankName;
    public $bankAccountNumber;
    public $bankIBAN;
    public $bankSWIFT;
    public $jobTitleID;
    public $jobTitleName;
    public $companyID;
    public $employerName;
    public $customerManagerID;
    public $customerManagerName;
    public $paymentDays;
    public $penaltyPerDay;
    public $priceListID;
    public $priceListID2;
    public $priceListID3;
    public $priceListID4;
    public $priceListID5;
    public $outsideEU;
    public $businessAreaID;
    public $businessAreaName;
    public $deliveryTypeID;
    public $signUpStoreID;
    public $homeStoreID;
    public $taxOfficeID;
    public $notes;
    public $lastModified;
    public $lastModifierEmployeeID;
    public $added;

    public $emailEnabled;
    public $eInvoiceEnabled;
    public $docuraEDIEnabled;

    public $eInvoiceEmail;
    public $eInvoiceReference;
    public $mailEnabled;
    public $operatorIdentifier;
    public $EDI;
    public $PeppolID;

    public $GLN;
    public $ediType;

    public $address;
    public $street;
    public $address2;
    public $city;
    public $postalCode;
    public $state;
    public $country;
    public $addressTypeID;
    public $addressTypeName;

    public $trimInputData;
    public $companyName2;
    public $imageContent;
    public $imageMimeType;
    public $invoicePayerID;
    public $username;
    public $password;

    protected static $query_fields = [
        'trimInputData', 'customerID', 'companyName', 'companyName2', 'companyTypeID', 'firstName',
        'lastName', 'fullName', 'personTitleID', 'gender', 'groupID', 'code', 'vatNumber', 'email', 'phone', 'mobile', 'fax',
        'skype', 'imageContent', 'imageMimeType', 'website', 'bankName', 'bankAccountNumber', 'bankIBAN', 'bankSWIFT', 'birthday',
        'integrationCode', 'jobTitleID', 'companyID', 'customerManagerID', 'invoicePayerID', 'paymentDays', 'penaltyPerDay',
        'credit', 'salesBlocked', 'referenceNumber', 'customerCardNumber', 'priceListID', 'priceListID2', 'priceListID3',
        'priceListID4', 'priceListID5', 'euCustomerType', 'outsideEU', 'businessAreaID', 'countryID', 'taxOfficeID', 'notes',
        'username', 'password', 'flagStatus', 'doNotSell', 'colorStatus', 'taxExempt', 'partialTaxExemption',
        'factoringContractNumber', 'paysViaFactoring', 'twitterID', 'facebookName', 'creditCardLastNumbers', 'deliveryTypeID',
        'signUpStoreID', 'homeStoreID', 'rewardPointsDisabled', 'customerBalanceDisabled', 'posCouponsDisabled', 'emailOptOut',
        'shipGoodsWithWaybills', 'emailEnabled', 'eInvoiceEnabled', 'docuraEDIEnabled', 'eInvoiceEmail', 'eInvoiceReference',
        'mailEnabled', 'operatorIdentifier', 'EDI', 'PeppolID', 'ediType', 'GLN', 'attributeName#', 'attributes', 'longAttributes'
    ];

    protected static $nested_fields = [
        'attributes' => Attributes::class,
        'contactPersons' => Customer::class,
        'longAttributes' => LongAttribute::class
    ];

    public function addLongAttribute(): LongAttribute
    {
        return $this->longAttributes[] = new static::$nested_fields['longAttributes']();
    }

    public function addContactPersons(): Customer
    {
        return $this->contactPersons[] = new static::$nested_fields['contactPersons']();
    }
}
