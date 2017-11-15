<?php
abstract class Command
{
    abstract public function excute();
}

class LogCommand extends Command
{
    private $log;

    public function __construct(Log $log) {
        $this->log = $log;
    }

    public function excute() {
        $this->log->detectError();
        $this->log->saveToLogFile();
        $this->log->showLog();
    }
}

class RemoteLogCommand extends Command
{
    private $remoteLog;

    public function __construct(RemoteLog $remoteLog) {
        $this->remoteLog = $remoteLog;
    }

    public function excute() {
        $this->remoteLog->loadData();
        $this->remoteLog->formateLog();
        $this->remoteLog->sendLog();
        $this->remoteLog->printLog();

    }
}