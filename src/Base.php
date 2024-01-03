<?php

namespace quantum3k\ErplySDK;

abstract class Base
{
    protected $logs = [];
    protected $sensitivity = [];
    protected $forward;

    const LOG_ERROR = 'error';
    const LOG_NOTICE = 'notice';
    const LOG_REQUEST = 'request';
    const LOG_RESPONSE = 'response';

    const VERSION = '1.0.25';

    public function log($message, $type = 'notice')
    {
        if (empty($this->sensitivity) || in_array($type, $this->sensitivity)) {
            $this->logs[] = [
                'datetime' => $datetime = date('Y-m-d H:i:s'),
                'type' => $type,
                'message' => $message,
            ];
            if ($this->forward && is_callable($this->forward, true)) {
                call_user_func($this->forward, $message, $type, $datetime);
            }
        }
    }

    public function hasLog($type): bool
    {
        foreach ($this->logs as $entry)
            if ($entry['type'] === $type) return true;

        return false;
    }

    public function getLog($type = null)
    {
        if ($type === null) {
            return $this->logs;
        } else {
            return array_column(array_filter($this->logs, function($v) use ($type) {
                return $v['type'] === $type;
            }), 'message');
        }
    }

    public function setLogSensitivity(array $types = [])
    {
        $this->sensitivity = $types;
        return $this;
    }

    public function setLogForward($callback)
    {
        $this->forward = $callback;
        return $this;
    }
}