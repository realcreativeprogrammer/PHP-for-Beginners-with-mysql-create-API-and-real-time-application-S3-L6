<?php
class Vehicle{
    public $brand;
    function get_brand(){
        return $this->brand;
    }
    function set_brand($value){
        $this->brand=$value;
    }
}

class Car extends Vehicle{
    function get_brand(){
        echo 'iam in child method';
    }
}
$obj=new Car();
$obj->set_brand('toyota');
echo $obj->get_brand();

// $obj->print();
?>