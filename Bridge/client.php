<?php
include 'HTMLMaker.php';
include 'Content.php';

$todayNews = new TodayNews(new CarNews());
$todayNews->invokeMaker();

$hotNews = new HotNews(new SportNews());
$hotNews->invokeMaker();