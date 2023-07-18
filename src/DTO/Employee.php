<?php

namespace quantum3k\ErplySDK\DTO;

class Employee extends BaseEntity
{
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

    /** @var Attribute[]*/
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

    protected static $nested_fields = ['attributes' => Attribute::class];

    protected static $query_fields = [
        'employeeID', 'lang', 'firstName', 'lastName', 'phone', 'mobile', 'email',
        'skype', 'jobTitle', 'notes', 'drawerID', 'productGroupIDs', 'attributes'
    ];

    public function addAttribute(): Attribute
    {
        return $this->attributes[] = new static::$nested_fields['attributes']();
    }
}
