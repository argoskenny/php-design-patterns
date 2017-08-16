
<?php
abstract class AbstractHtmlMaker {
    public abstract function makeHeader();
    public abstract function makeContent();
    public abstract function makeFooter();
    public abstract function makeHtmlFromDB();
}