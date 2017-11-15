<?php

class News
{
    public static function printHotNews() {
        $carNews = new CarNews();
        $sportNews = new SportNews();
        $fashionNews = new FashionNews();

        $carNews->printCarHotNews();
        $sportNews->printSportHotNews();
        $fashionNews->printFashionHotNews();
    }
}

class CarNews
{
    public function printCarHotNews() {
        echo "Some car news<br>";
    }

    // other methods ...
}

class SportNews
{
    public function printSportHotNews() {
        echo "Some sport news<br>";
    }

    // other methods ...
}

class FashionNews
{
    public function printFashionHotNews() {
        echo "Some fashion news<br>";
    }

    // other methods ...
}