<?php
include 'ChatMediator.php';

echo 'This is demo chat room.<br>';

$chatMediator = new ChatMediator();

$userA = new RegularUser($chatMediator, 'Tom');
$userB = new RegularUser($chatMediator, 'Jack');
$userC = new RegularUser($chatMediator, 'Amy');

$chatMediator->addUser($userA);
$chatMediator->addUser($userB);
$chatMediator->addUser($userC);

$userA->send('Hello!');

echo '<hr>';

$userC->send('Hi, good to see you guys');