<?php
class Log
{
    public function detectError() {
        echo "somthing broke<br>";
    }

    public function saveToLogFile() {
        echo "save<br>";
    }

    public function showLog() {
        echo "error message<br>";
    }
}