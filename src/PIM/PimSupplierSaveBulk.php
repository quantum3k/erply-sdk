<?php


namespace quantum3k\ErplySDK\PIM;


class PimSupplierSaveBulk
{
    private $results = null;

    public function __construct($results)
    {
        $this->results = [];
        foreach ($results->results as $result) {
            array_push($this->results, new PimSupplierSave2($result));
        }
    }

    public function getResults()
    {
        return $this->results;
    }

}
