<?php
class RemoteLog
{
    private $log;

    public function loadData() {
        $this->log = "database fatal error.<br>";
    }

    public function formateLog() {
        $this->log = "++".$this->log."++<br>";
    }

    public function sendLog() {
        echo "Send".$this->log." to remote database<br>";
    }

    public function printLog() {
        echo $this->log;
    }
}