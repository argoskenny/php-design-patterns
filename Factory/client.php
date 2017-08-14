<?php
    $url = "json/car.json";
    $contents = file_get_contents($url); 
    // $contents = utf8_encode($contents);
    $results = json_decode($contents, true);
    foreach ($results["json"] as $key => $value) {
        foreach ($value as $key2 => $value2) {
            echo $key2." = ".$value2."<br>";
        }
    }
?>