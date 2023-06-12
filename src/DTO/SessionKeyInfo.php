<?php

namespace quantum3k\ErplySDK\DTO;

class SessionKeyInfo extends BaseEntity
{
    /**
     * Time when the session key was created.
     */
    public $creationUnixTime;

    /**
     * Expiration timestamp of this session key.
     * If you subtract the "requestUnixTime" timestamp (in API response header) from this value, you will get the remaining lifetime of your session in seconds.
     * To extend the session, perform a new verifyUser call.
     */
    public $expireUnixTime;

    public function isAlive(): bool
    {
        return time() <= $this->expireUnixTime;
    }
}