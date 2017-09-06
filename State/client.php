<?php
include "ArticalState.php";
include "ArticalContext.php";

$state = "";
if (!empty($_GET["state"])) {
    $state = $_GET["state"];
}

$articalContext = new ArticalContext($state);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>文章編輯</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <style>
            .header{
                margin: 30px 0px;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="header clearfix">
            <h3 class="text-muted">文章編輯</h3>
        </div>
        <form action="client.php" method="get" >
            <?php $articalContext->getStatusTag(); ?>
            <div class="form-group">
                <label for="articleTitle">文章標題</label>
                <input type="text" class="form-control" id="articleTitle" placeholder="請輸入文章標題" <?php $articalContext->getTitleDisable(); ?> >
            </div>
            <div class="form-group">
                <label for="articleContent">文章內容</label>
                <textarea class="form-control" id="articleContent" rows="15" <?php $articalContext->getContentDisable();?> ></textarea>
            </div>
            <button type="button" class="btn btn-outline-warning" onclick="location.href='client.php?state=edit'" <?php $articalContext->getEditButtonDisable();?> >編輯</button>
            <button type="button" class="btn btn-outline-success" onclick="location.href='client.php?state=complete'" <?php $articalContext->getCompleteButtonDisable();?> >已完稿</button>
            <button type="button" class="btn btn-outline-primary" onclick="location.href='client.php?state=publish'" <?php $articalContext->getPublishButtonDisable();?> >上架</button>
        </form>
    </div>
    
    </body>
</html>