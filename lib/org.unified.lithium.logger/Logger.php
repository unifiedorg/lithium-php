<?php namespace Unified\Lithium\Logger;

class Logger {
    private $logPath;

    public function __construct($logPath) {
        $this->logPath = $logPath;
    }

    public function log($message, $level = 'info') {
        $logEntry = sprintf("[%s] %s: %s\n", date('Y-m-d H:i:s'), strtoupper($level), $message);
        file_put_contents($this->logPath, $logEntry, FILE_APPEND);
    }

    public function info($message) {
        $this->log($message, 'info');
    }

    public function error($message) {
        $this->log($message, 'error');
    }

    public function warning($message) {
        $this->log($message, 'warning');
    }
    
    public function debug($message) {
        $this->log($message, 'debug');
    }

    public function critical($message) {
        $this->log($message, 'critical');
    }
}
