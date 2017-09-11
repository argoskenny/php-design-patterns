<?php
interface IArtical {
    public function getTitle();
    public function getContent();
}

class WeatherArtical implements IArtical
{
    public function getTitle() {
        return "泰利轉中颱 暴風圈週三觸台";
    }

    public function getContent() {
        return "今年第18號颱風泰利，今天晚間8時在鵝鑾鼻東南東方1370公里之海面上，向西北西進行，晚間8時已增強為中颱。明（12）日晚間隨著泰利逐漸接近，迎風面的北部及宜花地區會有風雨出現。";
    }
}

// Decotator

abstract class ArticalDecorator implements IArtical
{
    protected $artical;
    
    public function __construct(IArtical $artical) {
       $this->artical = $artical;
    }
    
   abstract public function getTitle();
   abstract public function getContent();
}

class YahooArticalDeco extends ArticalDecorator
{
    public function getTitle() {
        return "《豬油》".$this->artical->getTitle();
    }

    public function getContent() {
        return "《Yahoo 綜合報導》".$this->artical->getContent();
    }
}

class GoogleArticalDeco extends ArticalDecorator
{
    public function getTitle() {
        return "《豬油》".$this->artical->getTitle();
    }

    public function getContent() {
        return "《Yahoo 綜合報導》".$this->artical->getContent();
    }
}

class WarningArticalDeco extends ArticalDecorator
{
    public function getTitle() {
        return $this->artical->getTitle()."【颱風警報】";
    }

    public function getContent() {
        return $this->artical->getContent();
    }
}