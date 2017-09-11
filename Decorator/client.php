<?php
include "Artical.php";
include "ArticalDecorator.php";

$yahooArtical = new YahooArtical();
$title = $yahooArtical->getTitle();
$content = $yahooArtical->getContent();
echo $title;
echo "<br>";
echo $content;
echo "<hr>";

$googleArtical = new GoogleArtical();
$title = $googleArtical->getTitle();
$content = $googleArtical->getContent();
echo $title;
echo "<br>";
echo $content;
echo "<hr>";

$weather = new WeatherArtical();
$yahooWeather = new YahooArticalDeco($weather);
$warningYahooWeather = new WarningArticalDeco($yahooWeather);
$title = $warningYahooWeather->getTitle();
$content = $warningYahooWeather->getContent();
echo $title;
echo "<br>";
echo $content;
echo "<hr>";