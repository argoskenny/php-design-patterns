<?php
include "Log.php";
include "RemoteLog.php";
include "Command.php";

$command = new LogCommand(new Log());
$command->excute();

$command = new RemoteLogCommand(new RemoteLog());
$command->excute();