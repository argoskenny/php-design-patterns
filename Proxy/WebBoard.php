<?php
abstract class WebBoard
{
    abstract public function getLog();
    abstract public function showLog();
}

class ServerLog extends WebBoard
{
    private $log;

    public function getLog() {
        echo "Collection Server Log<br>";
        $this->log = "Log messages<br>";
    }

    public function showLog() {
        echo $this->log;
    }
}

class ServerLogProxy extends WebBoard
{
    private $serverLog;

    public function getLog() {
        $this->serverLog = new ServerLog();
        $this->serverLog->getLog();
    }

    public function showLog() {
        $this->serverLog->showLog();
    }
}