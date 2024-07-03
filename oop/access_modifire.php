<?php

// Access modifire are 3types -Public- Privet- Protected

class Person{

  protected $name; /* privet only access in this scope and public is default*/

  function __construct($name){
    $this->name = $name;
  }

  protected function myName(){
     return $this->name;
  }


}

// if we are used this protected methode publicully then we will do pubic this methode
class Sajib extends Person{
  public function Names(){
    return $this->myName();
  }
}

$sajibs = new Sajib("Sajib Kumar Ghosh");
echo $sajibs->Names();


?>