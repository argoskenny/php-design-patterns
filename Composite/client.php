<?php
include 'MenuComposite.php';

$cake = new Item("蛋糕","70");
$pudding = new Item("布丁","50");
$dessert = new Menu(array($cake, $pudding));

$coffee = new Item("咖啡","80");
$juice = new Item("果汁","70");
$milktea = new Item("奶茶","50");

$sideDish = new Menu(array($dessert, $coffee, $juice, $milktea));


$cheeseBurger = new Item("起士漢堡","230");
$fishburger = new Item("鱈魚堡","210");

$mainCourst = new Menu(array($cheeseBurger, $fishburger));

$menu = new Menu(array($sideDish, $mainCourst));

$menu->getNameAndPrice();