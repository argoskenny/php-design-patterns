<?php
abstract class HTMLbuilder
{
    abstract public function makeHeader();
    abstract public function makeContent();
    abstract public function makeFooter();
}

class NewsBuilder extends HTMLbuilder
{

    public function makeHeader()
    {
        echo '<h1>This is header.</h1>';
    }

    public function makeContent()
    {
        echo '<div>This is content.</div>';
    }

    public function makeFooter()
    {
        echo '<hr>';
        echo '<div>This is footer.</div>';
    }
}

class ContentBuilder extends HTMLbuilder
{

    public function makeHeader()
    {
        echo '<div style="background-color: black; color: white;">This is header.</div>';
    }

    public function makeContent()
    {
        echo '<div style="background-color: darkslategrey; color: white;">This is content.</div>';
    }

    public function makeFooter()
    {
        echo '<div style="background-color: black; color: white;">This is footer.</div>';
    }
}

class HTMLDirector
{
    private $htmlBuilder;

    public function __construct(HTMLbuilder $htmlBuilder)
    {
        $this->htmlBuilder = $htmlBuilder;
    }

    public function buildPage()
    {
        $this->htmlBuilder->makeHeader();
        $this->htmlBuilder->makeContent();
        $this->htmlBuilder->makeFooter();
    }
}
