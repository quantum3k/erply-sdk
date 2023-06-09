<?php


namespace quantum3k\ErplySDK\PIM;


class PimSupplierSave
{
    private $id = null;
    private $resourceId = null;

    public function __construct($record)
    {
        $this->id = $record->id;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getResourceId()
    {
        return $this->resourceId;
    }

}
