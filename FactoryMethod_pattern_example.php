<?php

//Information that applies to all shapes.
abstract class Print_Shape {
    protected $shape;
    public abstract function get_shape();
}

class Print_Rectangle extends Print_Shape{
	public function __construct(){
		$this->shape = "rectangle";
	}
    public function get_shape(){
        return $this->shape;
    }
    //Add any code that makes this shape different ...
}

class Print_Square extends Print_Shape{
	public function __construct(){
		$this->shape = "square";
	}
    public function get_shape(){
        return $this->shape;
    }
    //Add any code that makes this shape different ...
}

class Print_Triangle extends Print_Shape{
    public function __construct(){
		$this->shape = "triangle";
	}
    
    public function get_shape(){
        return $this->shape;
    }
    //Add any code that makes this shape different ...
}

class FactoryMethod{
    public static function build($type)
    {
		$classname = 'Print_' . $type;
        if (!class_exists($classname) and !include_once 'Classes/' . $type . '.php') {
            throw new Exception('Missing class.');
        }
        else {
			return new $classname;
		}
    }
}
	$test1=FactoryMethod::build("rectangle");
	$test2=FactoryMethod::build("square");
	$test3=FactoryMethod::build("triangle");
	
	printf("I'm a %s <br>", $test1->get_shape());
	printf("I'm a %s <br>", $test2->get_shape());
	printf("I'm a %s <br>", $test3->get_shape());
	echo "Factory Method pattern works fine";
	

