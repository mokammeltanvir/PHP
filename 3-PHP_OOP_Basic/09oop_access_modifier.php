<?php
/*Properties and methods can have access modifiers which control where they can be accessed.
There are three access modifiers:
public - the property or method can be accessed from everywhere. This is default
protected - the property or method can be accessed within the class and by classes derived from that class
private - the property or method can ONLY be accessed within the class
 */

class Fruit
{
    public $name;
    protected $color;
    private $weight;

    public function set_name($n)
    {
        $this->name = $n;
    }
    protected function set_color($n)
    {
        $this->color = $n;
    }
    private function set_weight($n)
    {
        $this->weight = $n;
    }
}
$apple = new Fruit();
$apple->set_name('Apple'); // OK
// $apple->set_color('Red'); // ERROR
// $apple->set_weight('150'); // ERROR
