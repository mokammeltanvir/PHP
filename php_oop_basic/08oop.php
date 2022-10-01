<?php
// OOP stands for Object Oriented Programming.

/*
Procedural programming is about writing procedures or functions that perform operations on the data,
while object oriented programming is about creating objects that contain both data and functions.

object oriented programming has several advantages over procedural programming:
OOP is faster and easier to execute
OOP provides a clear structure for the programs
OOP helps to keep the PHP code DRY "Don't Repeat Yourself", and makes the code easier to maintain, modify and debug
OOP makes it possible to create full reusable applications with less code and shorter development time

 */

class Cars
{
    // Properties
    public $name;
    public $color;
    private $secret_engine;

    //constructor
    //  function __construct($name, $color)
    // {
    //     $this->name = $name;
    //     $this->color = $color;
    // }

    /* destructors*/
    // public function __destruct()
    // {
    //     echo "The car is {$this->name} and color is {$this->color}";
    // }

    // Methods -- getter and setter
    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function set_color($color)
    {
        $this->color = $color;
    }

    public function get_color()
    {
        return $this->color;
    }

}

$new_car_object = new Cars();
// print_r($new_car_object);
// print_r($new_car_object instanceof Cars);

$new_car_object->set_name('BMW');
$new_car_object->set_color('Black');

// print_r($new_car_object);

$my_car_color = $new_car_object->get_color();
$my_car_brand = $new_car_object->get_name();

echo $my_car_color;
echo "<br>";
echo $my_car_brand;

$second_car = new Cars();
$second_car->set_name('Audi');
$second_car->set_color('White');
