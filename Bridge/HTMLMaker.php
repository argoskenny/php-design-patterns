<?php

abstract class HTMLMaker
{
    abstract public function make($content);
}

class CarNews extends HTMLMaker
{
    public function make($content) {
        echo '<div style="color: red;">'.$content.'</div>';
    }
}

class SportNews extends HTMLMaker
{
    public function make($content) {
        echo '<div style="color: green;">'.$content.'</div>';
    }
}