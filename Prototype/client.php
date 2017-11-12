<?php
include "prototype.php";

$redColorHotKeywords = new RedColorHotKeywords();
$blueColorHotKeywords = new BlueColorHotKeywords();

$topKeywords = clone $redColorHotKeywords;
$topKeywords->setText("news");
$topKeywords->setHotRank(1);
makeHtml($topKeywords->getText(), $topKeywords->getHotRank(), $topKeywords->getColor());

$secondKeywords = clone $blueColorHotKeywords;
$secondKeywords->setText("book");
$secondKeywords->setHotRank(2);
makeHtml($secondKeywords->getText(), $secondKeywords->getHotRank(), $secondKeywords->getColor());

function makeHtml($text, $rank, $color)
{
    echo "<div style='color: ".$color."'>".$rank.". ".$text."</div>";
}