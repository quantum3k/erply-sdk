<?php

namespace quantum3k\ErplySDK;

class ApiException extends \Exception
{
    protected static $messages = null;

    public function __construct(array $status, \Throwable $previous = null)
    {
        static::loadCodes();

        $code = $status['errorCode'] ?? 0;
        $message = static::$messages[$code] ?? '(unknown error message code)';

        if (!empty($status['errorField']))
            $message = "$message errorField=[{$status['errorField']}]";

        parent::__construct($message, $code, $previous);
    }

    protected static function loadCodes()
    {
        if (static::$messages !== null) return;

        try {
            $codes = file_get_contents(__DIR__ .DIRECTORY_SEPARATOR . 'ApiErrorCodes.json');
            static::$messages = json_decode($codes, true);
        } catch (\Exception $e) {
            static::$messages = [];
        }
    }
}