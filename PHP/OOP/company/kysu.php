<?php
include_once './canbo.php';

class KySu extends CanBo
{
    public function __construct($fullname, $age, $gender, $address, $major)
    {
        $this->fullname = $fullname;
        $this->age = $age;
        $this->gender = $gender;
        $this->address = $address;
        $this->major = $major;
    }
    public $major;
    // What is your major?
}
