<?php
include 'JsonVisitor.php';

echo '[Visitor Pattern]<br>';

$dbJson = new DBJson("car.json");
$dbJson->accept(new WebsiteVisitor());

$htmlJson = new HTMLJson("car.json");
$dbJson->accept(new APPVisitor());