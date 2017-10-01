<?php
abstract class MenuComposite
{
    abstract function getNameAndPrice();
}

class Item extends MenuComposite
{

    private $name;
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getNameAndPrice()
    {
        echo $this->name." - ".$this->price."<br>";
    }
}

class Menu extends MenuComposite
{
    private $items = [];

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function getNameAndPrice()
    {
        foreach ($this->items as $item) {
            $item->getNameAndPrice();
        }
    }
}

