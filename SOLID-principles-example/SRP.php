<?php
// The Single-Responsibility Principle
// 單一職責原則
// 說明範例

// 違反 SRP
class Modem
{
    function dial($number) {
        // 連線
    }

    function hangup() {
        // 斷線
    }

    function sendData() {
        // 傳送資料
    }

    function receiveData() {
        // 接受資料
    }
}

// 符合 SRP
interface Connection
{
    function dial($number);
    function hangup();
}

interface DataHandler
{
    function sendData();
    function receiveData();
}

class NewModem implements Connection, DataHandler 
{
    function dial($number) {
        // 連線
    }

    function hangup() {
        // 斷線
    }

    function sendData() {
        // 送資料
    }

    function receiveData() {
        // 接資料
    }
}
