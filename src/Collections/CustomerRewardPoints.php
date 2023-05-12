<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\DTO\CustomerRewardPoint;

// todo: здесь идёт модель ADD, а модели GET нет

class CustomerRewardPoints extends BaseEntityCollection
{
    protected static $entity = CustomerRewardPoint::class;

    /**
     * @return CustomerRewardPoint
     */
    public function current(): CustomerRewardPoint
    {
        return parent::current();
    }

    /**
     * @return CustomerRewardPoint[]
     */
    public function getRecords(): array
    {
        return parent::getRecords();
    }
}