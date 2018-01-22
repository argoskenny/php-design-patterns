<?php
class ChatMediator
{
    private $chatUsers;
    
    public function addUser(User $newUser) {
        $this->chatUsers[$newUser->getName()] = $newUser;
    }

    public function sendMessage($message) {
        if (empty($this->chatUsers) == true) {
            return;
        }

        foreach ($this->chatUsers as $key => $value) {
            $value->receive($message);
        }
    }
}

abstract class User 
{
    protected $chatMediator;
    protected $name;
    abstract public function getName();
    abstract public function send($message);
    abstract public function receive($message);
}

class RegularUser extends User
{
    protected $chatMediator;
    protected $name;

    public function __construct($chatMediator, $userName) {
        $this->chatMediator = $chatMediator;
        $this->name = $userName;
    }

    public function getName() {
        return $this->name;
    }

    public function send($message) {
        echo $this->name . ' send message.<hr>';
        $this->chatMediator->sendMessage($message);
    }

    public function receive($message) {
        echo $this->name . ' receive message.<br>';
        echo 'Message: ' . $message . '<br>';
    }
}

class VisitorUser extends User
{
    protected $chatMediator;
    protected $name;

    public function __construct($chatMediator, $userName) {
        $this->chatMediator = $chatMediator;
        $this->name = $userName;
    }

    public function getName() {
        return $this->name;
    }

    public function send($message) {
        echo $this->name . ' does not have authority to send message.<hr>';
        // $this->chatMediator->sendMessage($message);
    }

    public function receive($message) {
        echo $this->name . ' receive message.<br>';
        echo 'Message: ' . $message . '<br>';
    }
}

