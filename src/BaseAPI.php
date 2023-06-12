<?php

namespace quantum3k\ErplySDK;

abstract class BaseAPI
{
    protected $logs = [];
    protected $sensitivity = [];

    const LOG_ERROR = 'error';
    const LOG_NOTICE = 'notice';
    const LOG_DEBUG = 'debug';

    public function log($message, $type = 'notice')
    {
        if (empty($this->sensitivity) || in_array($type, $this->sensitivity)) {
            $this->logs[] = [
                'datetime' => date('Y-d-m H:i:s'),
                'type' => $type,
                'message' => $message,
            ];
        }
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

    public function hasLog($type): bool
    {
        foreach ($this->logs as $entry)
            if ($entry['type'] === $type) return true;

        return false;
    }

    public function setLogSensitivity(array $types = [])
    {
        $this->sensitivity = $types;
        return $this;
    }
}