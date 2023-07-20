<?php

namespace quantum3k\ErplySDK\Collections;

use quantum3k\ErplySDK\ErplyAPI;
use quantum3k\ErplySDK\EntityMapping;
use quantum3k\ErplySDK\DTO\Status;

abstract class BaseEntityCollection implements \Countable, \Iterator
{
    /** @var ErplyAPI */
    protected $connection = null;

    protected $page = 1;
    protected $position = 0;

    protected $status = null;
    protected $records = null;

    public function __construct(array $response = null)
    {
        if ($response != null) {

            if (isset($response['status'])) {
                $this->status = new Status($response['status']);
            }

            if (isset($response['records'])) {
                $collection = EntityMapping::getCollection($this->status->getRequestName());

                if (is_subclass_of($collection, BaseEntityCollection::class)) {
                    $this->records = [];
                    foreach ($response['records'] as $record) {
                        $this->records[] = new $collection::$entity($record);
                    }
                }
            }

        }
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get records at current page
     * @return array|null
     */
    public function getRecords()
    {
        return $this->records;
    }

    public function setRecords($records)
    {
        $this->records = $records;
    }

    public function setConnection($connection)
    {
        $this->connection = $connection;
        return $this;
    }

    public function getConnection()
    {
        return $this->connection;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function next()
    {
        $this->position++;
    }

    public function count(): int
    {
        return isset($this->status)
            ? (int)$this->getStatus()->getRecordsTotal()
            : 0;
    }

    public function valid(): bool
    {
        return isset($this->connection) && ($this->position < $this->count());
    }

    public function key(): int
    {
        return $this->position;
    }

    public function current()
    {
        $pager = [
            'page' => 1,
            'record' => $this->position,
        ];

        if ($this->getStatus()->getRecordsTotal() != $this->getStatus()->getRecordsInResponse()) {
            $pager = $this->getRecordPosition($this->position + 1, $this->getConnection()->getRecordsOnPage());

            if ($pager['page'] > $this->page) {
                $request = $this->getStatus()->getPreviousRequest();
                $request['pageNo'] = $pager['page'];

                $response = new static($this->getConnection()->stdRequest($request));

                $this->status = $response->getStatus();
                $this->records = $response->getRecords();
            }
        }

        $this->page = $pager['page'];

        return $this->records[$pager['record']];
    }

    protected function getRecordPosition(int $position, int $per_page = 20): array
    {
        // Вычисляем номер страницы, на которой находится элемент
        $page = ceil($position / $per_page);

        // Вычисляем индекс элемента на странице (индексы идут с нуля)
        $index = ($position - 1) % $per_page;

        return [
            'page' => $page,
            'record' => $index
        ];
    }
}