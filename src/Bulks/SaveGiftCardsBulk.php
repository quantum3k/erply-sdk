<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\SaveGiftCards;

class SaveGiftCardsBulk extends BaseEntityBulk
{
    /**
     * @return SaveGiftCards[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}