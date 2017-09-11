<?php
class Artical 
{
    protected $title = "泰利轉中颱 暴風圈週三觸台";
    protected $content = "今年第18號颱風泰利，今天晚間8時在鵝鑾鼻東南東方1370公里之海面上，向西北西進行，晚間8時已增強為中颱。明（12）日晚間隨著泰利逐漸接近，迎風面的北部及宜花地區會有風雨出現。";

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->getContent;
    }
}

class YahooArtical extends Artical
{
    public function getTitle() {
        return "《豬油》".$this->title;
    }

    public function getContent() {
        return "《Yahoo 綜合報導》".$this->content;
    }
}

class GoogleArtical extends Artical
{
    public function getTitle() {
        return "《豬油》".$this->title;
    }

    public function getContent() {
        return "《Google 綜合報導》".$this->content;
    }
}

