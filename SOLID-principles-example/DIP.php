<?php
// The Dependency-Inversion Principle
// 依賴反向原則
// 說明範例

// 違反 DIP
class PlayStation
{
    function powerOn() {
        echo "開主機";
    }

    function powerOff() {
        echo "關主機";
    }

    function play($disk) {
        echo "玩遊戲".$disk;
    }
}

class SonyFanBoy
{
    private $playStation;

    function __construct() {
        $this->playStation = new PlayStation();
    }

    function haveFun() {
        $this->playStation->powerOn();
        $this->playStation->play("勇者鬥惡龍<br>");
    }
}

$people = new SonyFanBoy();
$people->haveFun();

// 符合 DIP
abstract class GamingMachine {
    abstract function play();
}

class XBoxOne extends GamingMachine
{
    function play()
    {
        echo "開主機玩戰爭機器<br>";
    }
}

class PlayStation4 extends GamingMachine
{
    function play() {
        echo "開主機玩太空戰士<br>";
    }
}

class PC extends GamingMachine
{
    function play() {
        echo "開電腦玩踩地雷<br>";
    }
}

class HappyMan
{
    private $gamingMachine;

    function __construct(GamingMachine $gamingMachine) {
        $this->gamingMachine = $gamingMachine;
    }

    function haveFun() {
        $this->gamingMachine->play();
    }
}

$people = new HappyMan(new XBoxOne());
$people->haveFun();
$people = new HappyMan(new PlayStation4());
$people->haveFun();
$people = new HappyMan(new PC());
$people->haveFun();