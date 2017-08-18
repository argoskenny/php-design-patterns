<?php
include "observer.php";
include "subject.php";

$feedback = "You are AWESOME!!!";

$userFeedback = new Feedback();

$databaseObserver = new DatabaseObserver();
$adminPageObserver = new AdminPageObserver();

$userFeedback->attach($databaseObserver);
$userFeedback->attach($adminPageObserver);
$userFeedback->userSubmit($feedback);

$feedback = "Actually, not that good...";
$userFeedback->detach($databaseObserver);
$userFeedback->userSubmit($feedback);