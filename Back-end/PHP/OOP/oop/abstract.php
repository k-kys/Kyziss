<?php

abstract class Shape {
    public abstract function draw();
}

class Circle extends Shape {
    public function draw()
    {
        echo 'Draw Circle';
    }
}
class Square extends Shape {
    public function draw()
    {
        echo 'Draw Square';
    }
}

$circle = new Circle;
$circle->draw();

$square = new Square;
$square->draw();



