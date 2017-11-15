<?php
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