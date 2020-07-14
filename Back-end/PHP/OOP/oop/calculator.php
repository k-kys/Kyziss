<?php

class Calculator
{
    public $a;
    public $b;
    // magic method
    public function __construct($a = 1, $b = 1)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function add()
    {
        return $this->a + $this->b;
    }

    public function sub()
    {
        return $this->a - $this->b;
    }

    public function mul()
    {
        return $this->a * $this->b;
    }

    public function div()
    {
        if ($this->b == 0) {
            die("B là số khác 0");
        }
        return $this->a / $this->b;
    }
}


$calc = new Calculator(10, 5);
$calc = new Calculator;

// echo $calc->add() . '<br>';
// echo $calc->sub() . '<br>';
// echo $calc->mul() . '<br>';
// echo $calc->div() . '<br>';


abstract class Shape
{
    public abstract function draw();
}

class Rectangle extends Shape
{
    public function draw()
    {
        echo "Draw rectangle";
    }
}

class Circle extends Shape
{
    private $r;
    const PI = 3.14;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function getCircumference()
    {
        return self::PI * 2 * $this->r;
    }

    public function draw()
    {
        echo "Draw circle";
    }
}

$circle = new Circle(5);
$rect = new Rectangle;
// echo "Chu vi la: ";
// echo $circle->getCircumference();
// echo $circle->draw();
// echo $rect->draw();
// echo "<br>---------------------<br>";

// class Cha
// {

//     protected function work()
//     {
//         echo "Phu ho";
//     }

// }

// class Con extends Cha
// {
//     public function work()
//     {
//         echo "Thợ cả";
//     }
// }

// $con = new Con;
// $con->work();


// 1. Construct ->khởi tạo ...
// 2. Đi vào hàm
// 3. Destruct
