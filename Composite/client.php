<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
MENU
<hr>

<?php
include 'MenuComposite.php';

$cake = new Item("蛋糕","70");
$pudding = new Item("布丁","50");
$dessert = new Menu(array($cake, $pudding), "甜點");

$coffee = new Item("咖啡","80");
$juice = new Item("果汁","70");
$milktea = new Item("奶茶","50");
$sideDish = new Menu(array($coffee, $juice, $milktea, $dessert), "副餐");

$cheeseBurger = new Item("起士漢堡","230");
$fishburger = new Item("鱈魚堡","210");
$mainCourst = new Menu(array($cheeseBurger, $fishburger), "主餐");
$menu = new Menu(array($sideDish, $mainCourst), "菜單");
$menu->getNameAndPrice();

$productResult = "";
if (!empty($_GET["name"])) {
    $reslut = $menu->getItemByName($_GET["name"]);
    if ($reslut == NULL) {
        $productResult = "not found.";
    } else {
        $productResult = $reslut;
    }
}
?>

<hr>
    <form action="client.php">
        <input type="text" name="name">
        <input type="submit" value="search">
    </form>
    <br>
    <div><?php echo $productResult;?></div>
</body>
</html>