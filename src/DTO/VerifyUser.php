<?php

namespace quantum3k\ErplySDK\DTO;

class VerifyUser extends BaseEntity
{
    public $userID;
    public $userName;
    public $employeeID;
    public $employeeName;
    public $groupID;
    public $groupName;
    public $ipAddress;
    public $sessionKey;
    public $sessionLength;
    public $isPasswordExpired;
    public $loginUrl;
    public $berlinPOSVersion;
    public $berlinPOSAssetsURL;
    public $epsiURL;
    public $cayanGatewayURLs;
    public $avalaraGatewayURLs;
    public $pusherAuthenticationURLs;
    public $strikeIronGatewayURLs;
    public $customerRegistryURLs;
    public $couponRegistryURLs;
    public $transactionRegistryURLs;
    public $displayAdManagerURLs;
    public $epsiDownloadURLs;
    public $identityToken;
    public $token;

    protected static $query_fields = ['sessionLength', 'doNotGenerateIdentityToken'];
}