<?php

namespace quantum3k\ErplySDK\Bulks;

use quantum3k\ErplySDK\Collections\BaseEntityCollection;
use quantum3k\ErplySDK\EntityMapping;

/**
 * @todo: Здесь мы пока обрабатываем только первый чанк пачки, оттого и используем позицию [0] в $response.
 *   Формирование чанков происходит в @see ErplyAPI::bulkRequest()
 */
abstract class BaseEntityBulk
{
    protected $status;
    protected $requests;

    public function __construct(array $response = null)
    {
        //\kint::dump($response[0]['requests']);
        if ($response != null) {

            $this->status = new StatusBulk($response[0]['status']);
            $this->requests = [];

            foreach ($response[0]['requests'] as &$record) {
                $collection = EntityMapping::getCollection($record['status']['requestName']);

                if (is_subclass_of($collection, BaseEntityCollection::class)) {
                    $record['status']['affectedRequest'] = $this->status->getPreviousRequestByID($record['status']['requestID']);
                    $this->requests[] = new $collection($record);
                }
            }

        }
    }

    public function getStatus(): StatusBulk
    {
        return $this->status;
    }
}