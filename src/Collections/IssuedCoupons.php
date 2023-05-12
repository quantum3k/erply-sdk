<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\IssuedCoupon;

class IssuedCoupons extends BaseEntityCollection
{
    protected static $entity = IssuedCoupon::class;

    /**
     * @return IssuedCoupon
     */
    public function current(): IssuedCoupon
    {
        return parent::current();
    }

    /**
     * @return IssuedCoupon[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}