<?php
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