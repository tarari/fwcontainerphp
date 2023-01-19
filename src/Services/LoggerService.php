<?php

  namespace App\Services;

  class LoggerService
{
    protected $logPath;

    public function __construct(string $logPath)
    {
        $this->logPath = $logPath;
    }

    public function log(string $message, string $level = 'info')
    {
        $log = "[" . date('Y-m-d H:i:s') . "] [$level] $message\n";
        file_put_contents($this->logPath, $log, FILE_APPEND);
    }
}
