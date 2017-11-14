<?php
include 'JsonParser.php';

$carJsonFile = dirname(__FILE__)."/json/car.json";
$sportJsonFile = dirname(__FILE__)."/json/sport.json";
$styleJsonFile = dirname(__FILE__)."/json/style.json";

$jsonParserFlyweightFactory = new JsonParserFlyweightFactory();
$carJsonData = $jsonParserFlyweightFactory->getJsonDataBy($carJsonFile);
var_dump($carJsonData);
$sportJsonData = $jsonParserFlyweightFactory->getJsonDataBy($sportJsonFile);
var_dump($sportJsonData);
$styleJsonData = $jsonParserFlyweightFactory->getJsonDataBy($styleJsonFile);
var_dump($styleJsonData);

// file_get_contents() will never be executed
$carJsonData = $jsonParserFlyweightFactory->getJsonDataBy($carJsonFile);
var_dump($carJsonData);
$sportJsonData = $jsonParserFlyweightFactory->getJsonDataBy($sportJsonFile);
var_dump($sportJsonData);
