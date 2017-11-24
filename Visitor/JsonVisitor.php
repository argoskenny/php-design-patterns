<?php
abstract class Json
{
    abstract public function getJson();
    abstract public function accept(Visitor $visitor);
}

class DBJson extends Json
{
    private $jsonData;

    public function __construct($file) {
        $contents = file_get_contents($file);
        $this->jsonData = json_decode($contents, true);
    }

    public function getJson() {
        return $this->jsonData;
    }

    public function accept(Visitor $visitor) {
        $visitor->visitDecodeForDB($this);
    }
}

class HTMLJson extends Json
{
    private $jsonData;

    public function __construct($file) {
        $contents = file_get_contents($file);
        $this->jsonData = json_decode($contents, true);
    }

    public function getJson() {
        return $this->jsonData;
    }

    public function accept(Visitor $visitor) {
        $visitor->visitDecodeForHTML($this);
    }
}

abstract class Visitor
{
    abstract public function visitDecodeForDB(Json $json);
    abstract public function visitDecodeForHTML(Json $json);
}

class WebsiteVisitor extends Visitor
{
    public function visitDecodeForDB(Json $json)
    {
        $data = $json->getJson();
        foreach ($data['json'] as $key => $value) {
            echo $key. ' save to Website DB!!<br>';
        }
    }

    public function visitDecodeForHTML(Json $json)
    {
        $data = $json->getJson();
        foreach ($data['json'] as $key => $value) {
            echo '<div style="color: red;">'.$key. '</div>';
        }
    }
}

class APPVisitor extends Visitor
{
    public function visitDecodeForDB(Json $json)
    {
        $data = $json->getJson();
        foreach ($data['json'] as $key => $value) {
            echo $key. ' save to APP DB!!<br>';
        }
    }

    public function visitDecodeForHTML(Json $json)
    {
        $data = $json->getJson();
        echo 'Produce HTML file for APP';
    }
}
