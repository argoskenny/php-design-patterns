<?php
include 'LogAnalyzer.php';

$analyzer = new XMLAnalyzer();
$jsonAnalyzer = new JsonAnalyzer();
$txtAnalyzer = new TxtAnalyzer();

$analyzer->setAnalyzer($jsonAnalyzer);
$analyzer->setAnalyzer($txtAnalyzer);

$result = $analyzer->analyze('log.json');
echo '<br>';
var_dump($result);
