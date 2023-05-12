<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\Payments;

class PaymentsBulk extends BaseEntityBulk
{
    /**
     * @return Payments[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}