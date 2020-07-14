<?php
include_once './canbo.php';

class CongNhan extends CanBo
{
    public function __construct($fullname, $age, $gender, $address, $level)
    {
        $this->fullname = $fullname;
        $this->age = $age;
        $this->gender = $gender;
        $this->address = $address;
        $this->level = $level;
    }

    private $level;

    public function getLevel()
    {
        return $this->level;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }
}
