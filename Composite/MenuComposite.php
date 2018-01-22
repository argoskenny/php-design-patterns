<?php
abstract class MenuComposite
{
    abstract function getNameAndPrice();
    abstract function getItemByName($itemName);
}

class Item extends MenuComposite
{
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getNameAndPrice() {
        echo $this->name." - ".$this->price."<br>";
    }

    public function getItemByName($itemName) {
        if ($this->name == $itemName) {
            return $this->name." - ".$this->price."<br>";
        }
        return NULL;
    }
}

class Menu extends MenuComposite
{
    private $items = [];
    private $menuName;

    public function __construct($items, $menuName) {
        $this->items = $items;
        $this->menuName = $menuName;
    }

    public function getNameAndPrice() {
        echo "MENU: ".$this->menuName."<br>";
        foreach ($this->items as $item) {
            $item->getNameAndPrice();
        }
    }

    public function getItemByName($itemName) {
        $result = NULL;
        foreach ($this->items as $item) {
            $result = $item->getItemByName($itemName);
            if ($result != NULL) {
                break;
            }
        }
        return $result;
    }
}

