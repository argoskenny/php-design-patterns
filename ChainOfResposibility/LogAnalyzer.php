<?php
abstract class LogAnalyzer
{
    protected $nextAnalyzer;

    final public function setAnalyzer(LogAnalyzer $logAnalyzer) {
        if ($this->nextAnalyzer == NULL) {
            $this->nextAnalyzer = $logAnalyzer;
        } else {
            $this->nextAnalyzer->setAnalyzer($logAnalyzer);
        }
    }

    final public function analyze($file) {
        $result = $this->process($file);
        if ($result === NULL && $this->nextAnalyzer !== NULL) {
            $result = $this->nextAnalyzer->process($file);
        } 
        return $result;
    }

    abstract protected function process($file);
}

class XMLAnalyzer extends LogAnalyzer
{
    function process($file) {
        
        echo 'XML Analyzer->';
        
        if (file_exists($file) == FALSE) {
            return NULL;
        }
        
        $xml = @simplexml_load_file($file);
        if ($xml == FALSE) {
            return NULL;
        } else {
            return $xml;
        }
    }
}

class JsonAnalyzer extends LogAnalyzer
{
    function process($file) {
        echo 'Json Analyzer->';
        
        if (file_exists($file) == FALSE) {
            return NULL;
        }
        $json = file_get_contents($file);
        return json_decode($json, true);
    }
}

class TxtAnalyzer extends LogAnalyzer
{
    function process($file) {
        
        echo 'Txt Analyzer';
        
        if (file_exists($file) == FALSE) {
            return NULL;
        }

        $txt = file_get_contents($file);
        if ($txt == FALSE) {
            return NULL;
        } else {
            return $txt;
        }
    }
}