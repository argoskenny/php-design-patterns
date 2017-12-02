<?php
include 'Expression.php';

$imageExpression = new ImageExpression();
$linkExpression = new LinkExpression();
$markExpression = new MarkExpression();

$text = '[img]https://www.apple.com/ac/structured-data/images/open_graph_logo.png?201703170823 This is [mark]Apple website [link]https://www.apple.com';
$explodedText = explode(' ', $text);
foreach ($explodedText as $key => $value) {
    if(strpos($value, '[img]') !== FALSE) {
        $imageExpression->interpreter($value);
    } elseif (strpos($value, '[link]') !== FALSE) {
        $linkExpression->interpreter($value);
    } elseif (strpos($value, '[mark]') !== FALSE) {
        $markExpression->interpreter($value);
    } else {
        echo $value . ' ';
    }
}