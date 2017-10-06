<?php
include 'HTMLbuilder.php';

$newsPageBuilder = new HTMLDirector(new NewsBuilder());
$newsPageBuilder->buildPage();

echo '<br><br>';

$contentPageBuilder = new HTMLDirector(new ContentBuilder());
$contentPageBuilder->buildPage();