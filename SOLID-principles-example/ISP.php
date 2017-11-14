<?php
// The Interface Segregation Principle
// 介面隔離原則
// 說明範例

// 違反 ISP（同時也違反 LSP）
interface ATM
{
    function showControlPannel();
    function showTransactionConfirm();
    function ejectCard();
    // 下略幾十個 Method...
}

class WebATM implements ATM
{

    function showControlPannel() {
        echo "顯示操作視窗";
    }

    function showTransactionConfirm() {
        echo "顯示交易確認視窗";
    }

    function ejectCard() {
        // ???
    }
}



// 符合 ISP
interface UI
{
    function showControlPannel();
    function showTransactionConfirm();
}

interface BankMaching
{
    function ejectCard();
}

class BankWebsite implements UI
{

    function showControlPannel() {
        echo "顯示操作視窗";
    }

    function showTransactionConfirm() {
        echo "顯示交易確認視窗";
    }
}

class BankATM implements UI, BankMaching
{

    function showControlPannel() {
        echo "顯示操作視窗";
    }

    function showTransactionConfirm() {
        echo "顯示交易確認視窗";
    }

    function ejectCard() {
        echo "退出卡片";
    }
}
