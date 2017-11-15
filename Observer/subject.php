<?php
abstract class AbstractSubject 
{
    public abstract function attach(AbstractObserver $observer_in);
    public abstract function detach(AbstractObserver $observer_in);
    public abstract function notify();
}

class Feedback extends AbstractSubject 
{
    private $feedback = "";
    private $observers = array();
    
    public function attach(AbstractObserver $observer_in) {
      $this->observers[] = $observer_in;
    }
    
    public function detach(AbstractObserver $observer_in) {
        foreach($this->observers as $observerKey => $observerVal) {
            if ($observerVal == $observer_in) { 
                unset($this->observers[$observerKey]);
            }
        }
    }

    public function notify() {
        foreach($this->observers as $observerItem) {
            $observerItem->update($this);
        }
    }
    
    public function userSubmit($feedback) {
        $this->feedback = $feedback;
        $this->notify();
    }
    
    public function getFeedback() {
        return $this->feedback;
    }
}