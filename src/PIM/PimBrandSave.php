<?php


namespace quantum3k\ErplySDK\PIM;


class PimBrandSave
{
    private $id = null;

    public function __construct($record)
    {
        $this->id = $record->id;
    }


    public function getId()
    {
        return $this->id;
    }

}
