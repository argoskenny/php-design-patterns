<?php
    include dirname(__FILE__).'/newsParser.php';
    include dirname(__FILE__).'/car/carNewsFactory.php';

    $url = dirname(__FILE__)."/json/car.json";

    // $newsParser = new NewsParser($url);
    // $newsParser->parser("car", "hot");
    // $newsParser->parser("car", "list");

    // $newsParser->parser("sport", "hot");
    // $newsParser->parser("sport", "list");

    // $newsParser->parser("style", "hot");
    // $newsParser->parser("style", "list");
    $carParser = new CarNewsFactory($url);
    $carParser->parseBySection("hot");
    $carParser->parseBySection("list");
?>