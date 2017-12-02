<?php
abstract class News 
{
    public abstract function loadData();
    public abstract function getTitle();
    public abstract function getContent();
}

class CarNews extends News
{
    private $title;
	private $content;

	public function loadData() {
        $this->title = "汽車新聞";
        $this->content = "全球電動車銷售霸主並非話題不斷的 Tesla，而是 Nissan Leaf 這款電動轎車，尤其在歐洲市場大受歡迎，而在今（6）日 Nissan 正式在官網上曝光全新第二代 Leaf，不僅外觀變得相當未來科技感，同時續航力更是大大提升，一舉來到頂級的 400 公里之譜。";
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getContent() {
        return $this->content;
    }
}

class SportNews extends News
{
	private $title;
	private $content;
	
	public function loadData() {
        $this->title = "體育新聞";
        $this->content = "9局下半，落後2分的紅襪從藍鳥終結者歐蘇納手中突圍，利用內野滾地球取得2分追平，芬威球場觀眾歡聲雷動，但最終勝利卻讓主場球迷盼到了午夜，兩軍鏖戰6小時、19局，紅襪H.拉米瑞茲再見安打，3：2艱苦獲勝。紅襪隊林子偉16局上代守二壘，守備穩建，但1打數未能建功。";
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getContent() {
        return $this->content;
    }
}

class VideoAdapter extends News
{
    private $videoNews;
    private $title;
	private $content;
    
    public function __construct(Video $video) {
        $this->videoNews = $video;
    }
    
    public function loadData() {
        $this->videoNews->loadYouTube();
    }
    
    public function getTitle() {
        return $this->videoNews->getVideoTitle();
    }

    public function getContent() {
        return $this->videoNews->getVideoDetail();
    }
}