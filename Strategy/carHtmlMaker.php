<?php
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
?>