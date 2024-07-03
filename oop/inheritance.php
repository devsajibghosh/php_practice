<?php 

// baper theke pawa holo-- kono sompotti inherit kora
// let's write an example

class Masud{

  public $name,$age;
  function __construct($name,$age){
    $this->name = $name;
    $this->age = $age;
  }

  function yourName(){
    return $this->name;
  }
  function yourAge(){
    return $this->age;
  }

}

class Sajib extends Masud{
  function hisWetHgt($weight,$height){
    return  'This is weight: '."$weight".' and '. 'This is Height: '."$height" ;
  }
}

$x = new Sajib('Sajib',30);

echo $x->yourName().'<br>';
echo $x->yourAge().'<br>';
echo $x->hisWetHgt(30,40);




?>