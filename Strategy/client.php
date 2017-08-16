<?php

include 'abstractHtmlMaker.php';
include 'carHtmlMaker.php';
include 'sportHtmlMaker.php';
include 'styleHtmlMaker.php';

include 'htmlFromDatabase/abstractDatabaseHtmlMaker.php';
include 'htmlFromDatabase/hotNewsDBHtmlMaker.php';
include 'htmlFromDatabase/otherNewsDBHtmlMaker.php';

$carHtmlMaker = new carHtmlMaker(new HotNewsDBHtmlMaker());
$carHtmlMaker->makeHeader();
$carHtmlMaker->makeContent();
$carHtmlMaker->makeFooter();
$carHtmlMaker->makeHtmlFromDB();

$sportHtmlMaker = new SportHtmlMaker(new HotNewsDBHtmlMaker());
$sportHtmlMaker->makeHeader();
$sportHtmlMaker->makeContent();
$sportHtmlMaker->makeFooter();

$styleHtmlMaker = new StyleHtmlMaker(new OtherNewsDBHtmlMaker());
$styleHtmlMaker->makeHeader();
$styleHtmlMaker->makeContent();
$styleHtmlMaker->makeFooter();