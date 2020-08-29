<?php

class Student
{
    private $name;
    public $gender;
    public $address;

    public function __construct($name = null, $gender = 1, $address = null)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->address = $address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGender()
    {
        return $this->gender == 1 ? 'Male' : 'Female';
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function display()
    {
        echo "{$this->name} | {$this->getGender()} | {$this->address}";
    }
}

// $student = new Student;
// $student->setName('Nguyen Hong');
// $student->gender = 2;
// $student->address = 'HA NOI';
// $student2 = new Student;
// $student2->setName('Nguyen ABC');
// $student2->gender = 1;
// $student2->address = 'HA NOI';

// echo $student2->getName();

$name = 'QUyet Tran';
$gender = 1;
$address10 = "nghe an";
$student3 = new Student($name, $gender, $address10);
$student3->display();
