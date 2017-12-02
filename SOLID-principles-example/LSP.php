<?php
// The Liskov Substitution Principle
// Liskov 替換原則
// 說明範例

// 違反 LSP
abstract class Article
{
    abstract function getContent();
    abstract function setContent();
    abstract function showContent();
}

class News extends Article
{
    private $content;

    function getContent() {
        // 從資料庫撈取文章
    }

    function setContent() {
        $this->content = "最新消息";
    }

    function showContent() {
        echo $this->content;
    }
}

class Mail extends Article
{
    private $content;

    function getContent() {
        // 從 Textarea 抓資料
    }

    function setContent() {
        $this->content = "這是一封信";
    }

    // weird implement
    function showContent() {
        $to = 'nobody@example.com';
        $subject = '這是一封信';
        $headers = 'From: webmaster@example.com' . "\r\n" . 'Reply-To: webmaster@example.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $this->content, $headers);
    }
}