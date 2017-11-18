<?php

abstract class AbstractJsonParser 
{
    public abstract function parse($jsonData);
}

class CarNewsHotParser extends AbstractJsonParser 
{
    public function parse($jsonData) {
        foreach ($jsonData as $key => $value) {
            echo "<div style='background: lightGray'>";
            echo "<h1 style='color: red;'>".$value["title"]."</h1>";
            echo "<h4>".$value["summary"]."</h4><br/>";
            echo "</div>";
        }
    }
}

class CarNewsListParser extends AbstractJsonParser 
{
    public function parse($jsonData) {
        foreach ($jsonData as $key => $value) {
            echo "<div style='background: lightGray'>";
            echo "<h3 style='color: black;'>".$value["title"]."</h3>";
            echo "<h4 style='color: gray;'>".$value["summary"]."</h4><br/>";
            echo "</div>";
        }
    }
}
