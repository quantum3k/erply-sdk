<?php

namespace quantum3k\ErplySDK\DTO;

class ProductPicture extends BaseEntity
{
    public $productPictureID;
    public $productID;
    public $name;
    public $thumbURL;
    public $smallURL;
    public $largeURL;
    public $fullURL;
    public $external;
    public $hostingProvider;
    public $added;
    public $lastModified;
    public $hash;
    public $tenant;
    public $pictureName;
    public $picture;
    public $filename;
    public $url;

    protected static $query_fields = ['productPictureID', 'productID', 'pictureName', 'picture', 'filename', 'url', 'hostingProvider'];
}