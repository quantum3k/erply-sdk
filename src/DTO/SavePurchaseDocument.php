<?php

namespace quantum3k\ErplySDK\DTO;

class SavePurchaseDocument extends BaseEntity
{
    public $invoiceID = null;
    public $invoiceRegNo = null;
    public $invoiceNo = null;
    public $invoiceLink = null;
    public $net = null;
    public $vat = null;
    public $total = null;

    /** @var SavePurchaseDocumentRow[] */
    public $rows = null;
    
    protected static $nested_fields = ['rows' => SavePurchaseDocumentRow::class];
}
