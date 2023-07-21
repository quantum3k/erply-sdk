<?php

namespace quantum3k\ErplySDK\DTO;

class Status
{
    /** @var string|null Request name during standard call */
    protected $request;

    /** @var string|null Request name during bulk call */
    protected $requestName;

    protected $requestUnixTime;
    protected $responseStatus;
    protected $errorCode;
    protected $generationTime;
    protected $recordsTotal;
    protected $requestID;
    protected $errorField;
    protected $recordsInResponse;

    protected $affectedRequest;

    public function __construct(array $status = null)
    {
        if ($status !== null) {
            foreach ($status as $field => $value) {
                if (property_exists($this, $field)) {
                    $this->{$field} = $value;
                }
            }
        }
    }

    public function getErrorField()
    {
        return $this->errorField;
    }

    public function getRequestName()
    {
        return $this->request ?? $this->requestName;
    }

    public function getRequestID()
    {
        return $this->requestID;
    }

    public function getRequestUnixTime()
    {
        return $this->requestUnixTime;
    }

    public function getResponseStatus()
    {
        return $this->responseStatus;
    }

    public function getErrorCode()
    {
        return $this->errorCode;
    }

    public function getGenerationTime()
    {
        return $this->generationTime;
    }

    public function getRecordsTotal()
    {
        return $this->recordsTotal;
    }

    public function getRecordsInResponse()
    {
        return $this->recordsInResponse;
    }

    public function getPreviousRequest()
    {
        return $this->affectedRequest;
    }
}
