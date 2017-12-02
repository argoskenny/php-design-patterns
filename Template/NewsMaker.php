<?php
abstract class NewsMaker
{
    public function make($jsonFile) {
        $news = $this->parseJson($jsonFile);
        $this->makeHeader();
        $this->makeHTML($news);
        $this->makeFooter();
    }

    protected function parseJson($jsonFile) {
        $content = file_get_contents($jsonFile);
        $results = json_decode($content, true);
        return $results["json"];
    }

    protected function makeHeader() {
        echo "<h1>新聞快報</h1>";
    }

    public abstract function makeHTML($news);

    protected function makeFooter() {
        echo "<hr>Powerd by Kenny";
    }
}

class FashionTheme extends NewsMaker
{
    public function makeHTML($news) {
        foreach ($news as $key => $value) {
            echo "<div style='background: lightGray'>";
            echo "<h3 style='color: black;'>".$value["title"]."</h3>";
            echo "<h4 style='color: gray;'>".$value["summary"]."</h4><br/>";
            echo "</div>";
        }
    }
}

class DarkTheme extends NewsMaker
{
    public function makeHTML($news) {
        foreach ($news as $key => $value) {
            echo "<div style='background: black'>";
            echo "<h3 style='color: white;'>".$value["title"]."</h3>";
            echo "<h4 style='color: lightgray;'>".$value["summary"]."</h4><br/>";
            echo "</div>";
        }
    }
}