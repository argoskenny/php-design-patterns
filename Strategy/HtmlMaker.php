<?php
abstract class AbstractHtmlMaker 
{
    public abstract function makeHeader();
    public abstract function makeContent();
    public abstract function makeFooter();
    public abstract function makeHtmlFromDB();
}

class CarHtmlMaker extends AbstractHtmlMaker
{
    private $databaseHtmlMaker;

	public function __construct(AbstractDatabaseHtmlMaker $databaseHtmlMaker) {
        $this->databaseHtmlMaker = $databaseHtmlMaker;
	}

	public function makeHeader() {
        echo "<div style='color: white; background: gray;'>Car Header</div>";
    }
    
    public function makeContent() {
        echo "<div style='color: white; background: black;'>Car Content</div>";
    }
    
    public function makeFooter() {
        echo "<div style='color: white; background: green;'>Car Footer</div>";
    }

    public function makeHtmlFromDB() {
        $this->databaseHtmlMaker->fetchData();
        $this->databaseHtmlMaker->makeHtml();
    }
}

class SportHtmlMaker extends AbstractHtmlMaker
{
	private $databaseHtmlMaker;
    
    public function __construct(AbstractDatabaseHtmlMaker $databaseHtmlMaker) {
        $this->databaseHtmlMaker = $databaseHtmlMaker;
    }

	public function makeHeader() {
        echo "<div style='color: white; background: gray;'>Sport Header</div>";
    }
    
    public function makeContent() {
        echo "<div style='color: white; background: brown;'>Sport Header</div>";
    }
    
    public function makeFooter() {
        echo "<div style='color: white; background: purple;'>Sport Header</div>";
    }

    public function makeHtmlFromDB() {
        $this->databaseHtmlMaker->fetchData();
        $this->databaseHtmlMaker->makeHtml();
    }
}

class StyleHtmlMaker extends AbstractHtmlMaker
{
	private $databaseHtmlMaker;
    
    public function __construct(AbstractDatabaseHtmlMaker $databaseHtmlMaker) {
        $this->databaseHtmlMaker = $databaseHtmlMaker;
    }

	public function makeHeader() {
        echo "<div style='color: black; background: white;'>Style Header</div>";
    }
    
    public function makeContent() {
        echo "<div style='color: black; background: yellow;'>Style Header</div>";
    }
    
    public function makeFooter() {
        echo "<div style='color: white; background: red;'>Style Header</div>";
    }

    public function makeHtmlFromDB() {
        $this->databaseHtmlMaker->fetchData();
        $this->databaseHtmlMaker->makeHtml();
    }
}