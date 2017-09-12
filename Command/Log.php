<?php
class Log
{
    public function detectError() {
        echo "somthing broke";
    }

    public function saveToLogFile() {
        echo "save";
    }

    public function showLog() {
        echo "error message";
    }
}