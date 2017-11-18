<?php
include 'NewsParser.php';
include 'AbstractJsonParser.php';
include 'AbstractFactoryMethod.php';

$url = dirname(__FILE__)."/json/car.json";

$newsParser = new NewsParser($url);
$newsParser->parser("style", "hot");
$newsParser->parser("style", "list");

// $newsParser->parser("sport", "hot");
// $newsParser->parser("sport", "list");

// $newsParser->parser("style", "hot");
// $newsParser->parser("style", "list");

$carParser = new CarNewsFactory($url);
$carParser->parseBySection("hot");
$carParser->parseBySection("list");