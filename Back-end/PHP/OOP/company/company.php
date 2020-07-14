<?php

class Company
{
    private $staffs = [];

    public function setStaffs($staffs)
    {
        $this->staffs = $staffs;
    }

    public function addNewStaff($staff)
    {
        $this->staffs[] = $staff;
    }

    public function findByName($name)
    {
        $staffs = [];

        foreach ($this->staffs as $staff) {
            if ($staff->getFullname() == $name) {
                $staffs[] = $staff;
            }
        }


        return $staffs;
    }

    public function all()
    {
        return $this->staffs;
    }
}
