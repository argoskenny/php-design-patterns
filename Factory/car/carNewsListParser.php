<?php

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