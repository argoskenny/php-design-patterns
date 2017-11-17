<?php
include 'Memento.php';

$careTaker = new CareTaker();

$originator = new Originator('state 1');
$state1 = $originator->saveToMemento();
$careTaker->add($state1);

$originator->setState('state 2');
$state2 = $originator->saveToMemento();
$careTaker->add($state2);

$originator->setState('state 3');
$state3 = $originator->saveToMemento();
$careTaker->add($state3);

$originator->recoverStateFromMemento($careTaker->getMemento(1));
$result = $originator->getState();
echo $result;

echo ' ';

$originator->recoverStateFromMemento($careTaker->getMemento(0));
$result = $originator->getState();
echo $result;