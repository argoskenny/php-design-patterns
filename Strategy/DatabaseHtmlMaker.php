<?php
abstract class AbstractDatabaseHtmlMaker 
{
    public abstract function fetchData();
    public abstract function makeHtml();
}

class HotNewsDBHtmlMaker extends AbstractDatabaseHtmlMaker
{
    private $data;
    
	public function fetchData() {
        $this->data = "Hot news data from database";
    }
    
    public function makeHtml() {
        echo $this->data;
    }
}

class OtherNewsDBHtmlMaker extends AbstractDatabaseHtmlMaker
{
    private $data;
    
	public function fetchData() {
        $this->data = "Other news data from database";
    }
    
    public function makeHtml() {
        echo $this->data;
    }
}