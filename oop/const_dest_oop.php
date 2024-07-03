<?php 

//! constructor && destructor how to use in oop ?
class Car{

  public $name,$color,$price;

  function __construct($name,$color,$price){
    $this->name = $name;
    $this->color = $color;
    $this->price = $price;
  }

  // here is 3-methode-call
  function myCarName(){
   return  $this->name;
  }
  function myCarColor(){
   return $this->color;
  }
  function myCarPrice(){
   return $this->price;
  }

}

// create a object from class
$car = new Car('Car Name: BMW','Car Color: Red','Car Price: 2000000');

// call to object and print here 
echo $car->myCarName().'<br>';
echo $car->myCarColor().'<br>';
echo $car->myCarPrice().'<br>';


// __destructor function


class Mobile{

  public $name,$model;
  function __construct($name,$model){
    $this->name = $name;
    $this->model = $model;
  }

  // destructor function
  function __destruct(){
    echo "The Mobile name is {$this->name}"."<br>";
    echo "The Model model is {$this->model}";
  }


}

// class to object convert new
$mobile = new Mobile('Samsung','J2 Prime');


?>