<?php

class Student
{
	public $name;
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

	public function setGender($gender)
	{
		$this->gender = $gender;
	}

	public function setAddress($address)
	{
		$this->address = $address;
	}

	public function display()
	{
		echo "{$this->name} | {$this->getGender()} | {$this->address}";
	}
}

// $student = new Student();
// $student->name = 'Nguyen Hong';
// $student->gender = 2;
// $student->address = 'HA NOI';


// $student2 = new Student;
// $student2->setName('Khuong');

// $student3 = new Student;
// echo $student3->setName();
// echo $student->getName();
// echo $student2->getName();

// $name = 'Quyet Tran';
// $gender = 1;
// $address = 'Ha Noi';
// $student3 = new Student($name, $gender, $address);
// $student3->display();


/**
 * 
 */
class Tinhtoan
{
	public $a;
	public $b;

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

// $calc = new Tinhtoan(10, 5);
// echo $calc->add() . '<br>';
// echo $calc->sub() . '<br>';
// echo $calc->mul() . '<br>';
// echo $calc->div() . '<br>';


/**
 * 
 */
abstract class Shape
{

	public abstract function draw();
}

/**
 * 
 */
class Rectangle extends Shape
{

	public function draw()
	{
		echo "Draw Rectangle";
	}
}
/**
 * 
 */
class Circle extends Shape
{
	private $r;
	const PI = 3.14;

	public function __construct($r)
	{
		$this->r = $r;
	}

	public function getChuvi()
	{
		return self::PI * 2 * $this->r;
	}

	public function draw()
	{
		echo "Hinh tron";
	}
}

// $circle = new Circle(5);
// echo 'Chu vi la:';
// echo $circle->getChuvi();
// echo "<br>";
// echo $circle->draw();
// echo "<br>";
// $Rectangle = new Rectangle();
// echo $Rectangle->draw();

/**
 * 
 */
class Cha
{
	// final: cuoi cung
	protected function work()
	{
		echo "Phu ho";
	}
}

/**
 * 
 */
class Con extends Cha
{
	public function work()
	{
		echo "Tho Ca";
	}
}

$con = new Con();
$con->work();
