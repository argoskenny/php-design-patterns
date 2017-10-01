<?php
include 'MenuComposite.php';

$coffee = new Item("咖啡","80");
$juice = new Item("果汁","70");
$milktea = new Item("奶茶","50");

$drinks = array($coffee, $juice, $milktea);
$menu = new Menu($drinks);

$menu->getNameAndPrice();