<?php

namespace quantum3k\ErplySDK\DTO;

class Attribute extends BaseEntity
{
    const TYPE_TEXT = 'text';
    const TYPE_INT = 'int';
    const TYPE_DOUBLE = 'double';

    public $attributeName = null;
    public $attributeType = null;
    public $attributeValue = null;
}