<?php

namespace quantum3k\ErplySDK\DTO;

class SaveSalesDocument extends BaseEntity
{
    public $invoiceID = null;
    public $invoiceNo = null;
    public $customNumber = null;
    public $invoiceLink = null;
    public $receiptLink = null;
    public $net = null;
    public $vat = null;
    public $rounding = null;
    public $total = null;

    /** @var SaveSalesDocumentRow[] */
    public $rows = null;
    
    protected static $nested_fields = ['rows' => SaveSalesDocumentRow::class];
}