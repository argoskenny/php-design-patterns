<?php
abstract class HotKeywordsPrototype {
    
    protected $text;
    protected $hotRank;
    protected $color;
    
    abstract function __clone();

    function setText($text) {
        $this->text = $text;
    }
    
    function getText() {
        return $this->text;
    }

    function setHotRank($hotRank) {
        return $this->hotRank = $hotRank;
    }

    function getHotRank() {
        return $this->hotRank;
    }

    function getColor() {
        return $this->color;
    }
}

class RedColorHotKeywords extends HotKeywordsPrototype
{
    function __construct() {
        $this->color = 'red';
    }

    function __clone() {
    }
}

class BlueColorHotKeywords extends HotKeywordsPrototype
{
    function __construct() {
        $this->color = 'blue';
    }

    function __clone() {
    }
}