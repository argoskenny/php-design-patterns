<?php
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
?>