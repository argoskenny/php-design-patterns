<?php
abstract class Content
{
    protected $content;
    protected $HTMLMaker;
    abstract public function invokeMaker();
}

class TodayNews extends Content
{
    protected $content;
    protected $HTMLMaker;

    public function __construct(HTMLMaker $maker)
    {
        $this->content = 'This is TODAY news.';
        $this->HTMLMaker = $maker;
    }

    public function invokeMaker()
    {
        $this->HTMLMaker->make($this->content);
    }
}

class HotNews extends Content
{
    protected $content;
    protected $HTMLMaker;

    public function __construct(HTMLMaker $maker)
    {
        $this->content = 'This is HOT news.';
        $this->HTMLMaker = $maker;
    }

    public function invokeMaker()
    {
        $this->HTMLMaker->make($this->content);
    }
}
