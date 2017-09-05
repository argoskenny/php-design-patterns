<?php
abstract class AbstractObserver 
{
    public abstract function update(AbstractSubject $subject_in);
}

class DatabaseObserver extends AbstractObserver 
{
    public function update(AbstractSubject $subject) 
    {
        echo "<h1>[" . $subject->getFeedback() . "]</h1>";
        echo "<h3>Save feedback to database.</h3>";
        echo "<hr>";
    }
}

class AdminPageObserver extends AbstractObserver 
{
    public function update(AbstractSubject $subject) 
    {
        echo "<h1>[" . $subject->getFeedback() . "]</h1>";
        echo "<h3>Show feedback on Admin Page.</h3>";
        echo "<hr>";
    }
}
