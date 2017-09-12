<?php
class RemoteLog
{
    private $log;

    public function loadData() {
        $this->log = "database fatal error.";
    }

    public function formateLog() {
        $this->log = "++".$this->log."++";
    }

    public function sendLog() {
        echo "Send".$this->log." to remote database";
    }

    public function printLog() {
        echo $this->log;
    }
}