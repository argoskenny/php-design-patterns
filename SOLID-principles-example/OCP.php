<?php
// The Open-Closed Principle
// 開放—封閉原則
// 說明範例

// 違反 OCP
class SteelWheel
{
    function setWheel() {
        echo "裝上輪胎<br>";
    }
}

class Bus
{
    private $steelWheel;

    function __construct() {
        $this->steelWheel = new SteelWheel();
        $this->steelWheel->setWheel();
    }
}

// Client
$bus = new Bus();

// 符合 OCP
abstract class Wheel
{
    abstract function setWheel();
}

class WoodWheel extends Wheel
{

    function setWheel() {
        echo "裝上木造輪胎<br>";
    }
}

class ToyWheel extends Wheel
{

    function setWheel() {
        echo "裝上玩具輪胎<br>";
    }
}

class Car
{
    private $wheel;

    function __construct(Wheel $wheel) {
        $this->wheel = $wheel;
        $this->wheel->setWheel();
    }
}

// Client
$carriage = new Car(new WoodWheel()); // 馬車
$toyCar = new Car(new ToyWheel()); // 玩具車