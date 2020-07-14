<?php

interface Flyable {
    public function fly();
}

class Bird implements Flyable {
    public function fly()
    {
        echo "Bird Fly";
    }
}
class AirPlane implements Flyable {
    public function fly()
    {
        echo "Airplane Fly";
    }
}

$bird = new Bird;
$bird->fly();

$airplane = new AirPlane;
$airplane->fly();
