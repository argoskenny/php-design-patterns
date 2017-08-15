
<?php
    class NewsParser {
        
        private $jsonFilePath;
        
        public function __construct($jsonFilePath) {
            $this->jsonFilePath = $jsonFilePath;
        }

        public function parser($channel, $section) {
            $news = $this->parseJsonToArray($this->jsonFilePath);
            switch ($channel) {
                case 'car':
                $this->exportCarNewsToHtml($news, $section);
                    break;
                case 'sport':
                $this->exportSportNewsToHtml($news, $section);
                    break;
                case 'style':
                $this->exportStyleNewsToHtml($news, $section);
                    break;
                default:
                echo "Error Channel";
                    break;
            }
        }

        private function parseJsonToArray($jsonFilePath) {
            $contents = file_get_contents($jsonFilePath); 
            $results = json_decode($contents, true);
            return $results["json"];
        }

        private function exportCarNewsToHtml($news, $section) {
            switch ($section) {
                case 'hot':
                foreach ($news as $key => $value) {
                    echo "<div style='background: lightGray'>";
                    echo "<h1 style='color: red;'>".$value["title"]."</h1>";
                    echo "<h4>".$value["summary"]."</h4><br/>";
                    echo "</div>";
                }
                    break;
                case 'list':
                foreach ($news as $key => $value) {
                    echo "<div style='background: lightGray'>";
                    echo "<h3 style='color: black;'>".$value["title"]."</h3>";
                    echo "<h4 style='color: gray;'>".$value["summary"]."</h4><br/>";
                    echo "</div>";
                }
                    break;
                default:
                echo "Error Section";
                    break;
            }
        }

        private function exportSportNewsToHtml($news, $section) {
            switch ($section) {
                case 'hot':
                foreach ($news as $key => $value) {
                    echo "<div style='background: lightGray; width: 50%;'>";
                    echo "<h1 style='color: red;'>".$value["title"]."</h1>";
                    echo "<h4>".$value["summary"]."</h4><br/>";
                    echo "</div>";
                }
                    break;
                case 'list':
                foreach ($news as $key => $value) {
                    echo "<div style='background: lightGray'>";
                    echo "<h3 style='color: black;'>".$value["title"]."</h3>";
                    echo "<h4 style='color: gray;'>".$value["summary"]."</h4><br/>";
                    echo "</div>";
                }
                    break;
                default:
                echo "Error Section";
                    break;
            }
        }

        private function exportStyleNewsToHtml($news, $section) {
            switch ($section) {
                case 'hot':
                foreach ($news as $key => $value) {
                    echo "<div style='background: lightGray; width: 50%; height: 50%; float: left; border: 1px solid purple;'>";
                    echo "<h1 style='color: red;'>".$value["title"]."</h1>";
                    echo "<h4>".$value["summary"]."</h4><br/>";
                    echo "</div>";
                }
                    break;
                case 'list':
                foreach ($news as $key => $value) {
                    echo "<div style='background: black'>";
                    echo "<h3 style='color: white;'>".$value["title"]."</h3>";
                    echo "<h4 style='color: lightGray;'>".$value["summary"]."</h4><br/>";
                    echo "</div>";
                }
                    break;
                default:
                echo "Error Section";
                    break;
            }
        }
    }
?>