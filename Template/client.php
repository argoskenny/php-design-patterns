<?php
include 'NewsMaker.php';

$fashionTheme = new FashionTheme();
$fashionTheme->make("News.json");

$darkTheme = new DarkTheme();
$darkTheme->make("News.json");