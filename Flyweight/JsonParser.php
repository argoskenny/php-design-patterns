<?php

class JsonParser 
{
    private $jsonData;

    public function __construct($file) {
        $contents = file_get_contents($file);
        echo '<br>file_get_contents executed<br>';
        $this->jsonData = json_decode($contents, true);
    }
    
    public function getJsonData() {
        return $this->jsonData;
    }
}

class JsonParserFlyweightFactory
{
    private $parserStorage;

    public function __construct() {
        $this->parserStorage = array();
    }

    public function getJsonDataBy($file) {
        if (array_key_exists($file, $this->parserStorage) == TRUE) {
            return $this->parserStorage[$file]->getJsonData();
        } else {
            $parser = new JsonParser($file);
            $this->parserStorage[$file] = $parser;
            return $parser->getJsonData();
        }
    }
}

