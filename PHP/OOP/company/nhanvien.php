<?php

include_once './canbo.php';

class Staff extends CanBo
{
    public function __construct($fullname, $age, $gender, $address, $task)
    {
        $this->fullname = $fullname;
        $this->age = $age;
        $this->gender = $gender;
        $this->address = $address;
        $this->task = $task;
    }

    private $task;

    public function setTask($task)
    {
        $this->task = $task;
    }

    public function getTask()
    {
        return $this->task;
    }
}
