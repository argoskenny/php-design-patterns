<?php
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
?>