<?php

require dirname(__FILE__).'/../abstractFactoryMethod.php';
require dirname(__FILE__).'/../abstractJsonParser.php';
require dirname(__FILE__).'/carNewsHotParser.php';
require dirname(__FILE__).'/carNewsListParser.php';

class CarNewsFactory extends AbstractFactoryMethod 
{
    private $jsonData;
    private $jsonParser;
    
    public function __construct($url) 
    {
        $content = file_get_contents($url);
        $results = json_decode($content, true);
        $this->jsonData = $results["json"];
    }

    public function parseBySection($section) 
    {
        switch ($section) {
            case "hot":
                $this->jsonParser = new CarNewsHotParser();
            break;
            case "list":
                $this->jsonParser = new CarNewsListParser();
            break;
            default:
                echo "error";
            break;        
        }
        $this->jsonParser->parse($this->jsonData);
    }
}