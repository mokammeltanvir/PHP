<?php 
/*
Static methods can be called directly - without creating an instance of the class first.

Static methods are declared with the static keyword: 

*/

// static methods
class vehicle{
    protected static function getVehicleType(){
        return "Car";
    }
}


class Cars extends vehicle{
    public $vehicle_type;

    public function __construct()
    {
        $this->vehicle_type = parent::getVehicleType();
    }
}

$myCar = new Cars;
print_r($myCar);

echo "<br>";

echo $myCar->vehicle_type;



// static properties
class pi {
    public static $value=3.14159;
    public function staticValue() {
    return self::$value;
    }
  }
  
  $pi = new pi();
  echo $pi->staticValue();

?>