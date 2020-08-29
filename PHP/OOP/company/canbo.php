<?php

abstract class CanBo
{
    public $fullname;
    public $age;
    public $gender;
    public $address;

    public function getFullname()
    {
        return $this->fullname;
    }
}
