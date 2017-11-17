<?php

class Memento 
{
    private $state;

    public function __construct($state) {
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }
}


class Originator
{
    private $state;

    public function __construct($state) {
        $this->state = $state;
    }

    public function setState($newState) {
        $this->state = $newState;
    }

    public function getState() {
        return $this->state;
    }

    public function saveToMemento() {
        return new Memento($this->state);
    }

    public function recoverStateFromMemento(Memento $memento) {
        $this->state = $memento->getState();
    }
}

class CareTaker 
{
    private $mementoList;

    public function add(Memento $memento) {
        $this->mementoList[] = $memento;
    }

    public function getMemento($index) {
        return $this->mementoList[$index];
    }
}


