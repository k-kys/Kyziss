<?php

class Point
{
    public function __construct()
    {
    }

    private $data = [
        'a' => 1,
        'b' => 2,
        'c' => 3,
    ];
    public function __get($name)
    {
        return $this->data[$name];
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __destruct()
    {
        # code...
    }

    public function __call($functionName, $ags)
    {
        if ($functionName == 'add') {
            return $ags[0] + $ags[1];
        }
        if ($functionName == 'mul') {
            return $ags[0] * $ags[1];
        }
        if ($functionName == 'div') {
            return $ags[0] / $ags[1];
        }
        if ($functionName == 'sub') {
            return $ags[0] - $ags[1];
        }
    }
}

$point = new Point;
// echo $point->a;
// $point->area = 10;

// echo $point->area;

echo $point->add(10, 20) . '<br>';
echo $point->sub(10, 20) . '<br>';
echo $point->mul(10, 20) . '<br>';
echo $point->div(10, 20) . '<br>';

