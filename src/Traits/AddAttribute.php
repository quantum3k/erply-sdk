<?php

namespace quantum3k\ErplySDK\Traits;

use quantum3k\ErplySDK\Collections\Attributes;
use quantum3k\ErplySDK\DTO\Attribute;

trait AddAttribute
{
    /** @var Attributes */
    public $attributes;

    public function __construct()
    {
        echo __METHOD__, '...';

        static::$nested_fields['attributes'] = Attributes::class;
    }

    public function addAttribute(): Attribute
    {
        return $this->attributes->add();
    }
}