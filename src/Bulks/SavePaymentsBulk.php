<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SavePayments;

class SavePaymentsBulk extends BaseEntityBulk
{
    /**
     * @return SavePayments[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}