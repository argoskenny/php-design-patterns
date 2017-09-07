<?php
class Video
{
    private $videoTitle;
    private $videoContent;
    private $videoClip;
    private $commentList;

    public function loadYouTube()
    {
        $this->videoTitle = "世大運精華片段";
        $this->videoContent = "2017台北世大運8/19登場！世界150國好手齊聚一堂於8/19至8/30一拼高下、奪金牌";
        $this->videoClip = "sportClip.mp4";
        $this->commentList = array('1' => "納稅錢就是要這樣用才對", '2' => "大量運用紅藍燈光打在運動員身上，感覺像是披上國旗，好帥");
    }

    public function getVideoTitle() {
        return $this->videoTitle;
    }

    public function getVideoDetail() {
        return $this->videoContent;
    }

    public function getVideo() {
        // fopen($this->videoClip, "r");
        // play($this->videoClip);
    }

    public function getVideoComment() {
        return $this->commentList;
    }
}
