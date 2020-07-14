<?php

interface Sport {
    public function setHomeTeam($name);
    public function setVisitTeam($name);
}


interface Footballable extends Sport {
    public function homeTeamScore($score);
    public function visitTeamScore($score);
}

interface TeamAble {
    public function getTeamSize($score);
}

class Football implements Footballable, TeamAble {
    public function setHomeTeam($value='')
    {
        # code...
    }

    public function setVisitTeam($value='')
    {
        # code...
    }

    public function homeTeamScore($value='')
    {
        # code...
    }

    public function visitTeamScore($value='')
    {
        # code...
    }

    public function getTeamSize($value='')
    {
        # code...
    }
}

$football = new Football();
