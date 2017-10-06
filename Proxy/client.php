<?php
include 'WebBoard.php';

$serverLogProxy = new ServerLogProxy();
$serverLogProxy->getLog();
$serverLogProxy->showLog();