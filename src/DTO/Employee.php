<?php

namespace quantum3k\ErplySDK\DTO;

use quantum3k\ErplySDK\Collections\Attributes;
use quantum3k\ErplySDK\Traits\AddAttribute;

class Employee extends BaseEntity
{
    use AddAttribute;

    public $employeeID;
    public $fullName;
    public $employeeName;
    public $firstName;
    public $lastName;
    public $phone;
    public $mobile;
    public $email;
    public $fax;
    public $code;
    public $gender;
    public $userID;
    public $username;
    public $userGroupID;
    public $performsColoring;
    public $warehouses;
    public $pointsOfSale;
    public $productIDs;

    /** @var Attributes */
    public $attributes;

    public $skype;
    public $birthday;
    public $jobTitleID;
    public $jobTitleName;
    public $notes;
    public $drawerID;
    public $jobTitle;
    public $productGroupIDs;
    public $lang;
    public $added;
    public $lastModified;
    public $lastModifiedByUserName;

    protected static $nested_fields = ['attributes' => Attributes::class];

    protected static $query_fields = [
        'employeeID', 'lang', 'firstName', 'lastName', 'phone', 'mobile', 'email',
        'skype', 'jobTitle', 'notes', 'drawerID', 'productGroupIDs', 'attributes'
    ];
}
