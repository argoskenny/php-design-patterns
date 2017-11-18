<?php
include 'HtmlMaker.php';
include 'DatabaseHtmlMaker.php';

$carHtmlMaker = new carHtmlMaker(new HotNewsDBHtmlMaker());
$carHtmlMaker->makeHeader();
$carHtmlMaker->makeContent();
$carHtmlMaker->makeFooter();
$carHtmlMaker->makeHtmlFromDB();

$sportHtmlMaker = new SportHtmlMaker(new HotNewsDBHtmlMaker());
$sportHtmlMaker->makeHeader();
$sportHtmlMaker->makeContent();
$sportHtmlMaker->makeFooter();
$sportHtmlMaker->makeHtmlFromDB();

$styleHtmlMaker = new StyleHtmlMaker(new OtherNewsDBHtmlMaker());
$styleHtmlMaker->makeHeader();
$styleHtmlMaker->makeContent();
$styleHtmlMaker->makeFooter();