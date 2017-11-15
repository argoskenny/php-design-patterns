<?php
include 'Video.php';
include 'News.php';

class PrintNews 
{
    public function __construct(News $news) {
        $news->loadData();
        $title = $news->getTitle();
        $content = $news->getContent();

        echo $title;
        echo "<br>";
        echo $content;
        echo "<hr>";
    }
}

$printCarNews = new PrintNews(new CarNews());

$video = new VideoAdapter(new Video());
$printVideoNews = new PrintNews($video);