<?php

namespace quantum3k\ErplySDK\Bulks;

class StatusBulk
{
    protected $requestUnixTime;
    protected $responseStatus;
    protected $errorCode;
    protected $generationTime;

    /** The contents of this property will be added during POST-request */
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

    public function getPreviousRequest()
    {
        return $this->affectedRequest;
    }

    public function getPreviousRequestByID($requestID)
    {
        if (is_array($this->affectedRequest['requests'])) {
            foreach ($this->affectedRequest['requests'] as $request) {
                if ($request['requestID'] == $requestID)
                    return $request;
            }
        }

        return null;
    }
}