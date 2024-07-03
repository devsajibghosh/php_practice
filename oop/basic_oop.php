<?php 


Class House{

  // properties
  public $name,$room,$floor;
  // methodes build 

  public function nam_info($name,$room,$floor){

    $this->name = $name;
    $this->room = $room;
    $this->floor = $floor;

 }

 function get_name(){
  return $this->name;
 }
 function get_room(){
  return $this->room;
 }
 function get_floor(){
  return $this->floor;
 }

}

$house = new House();  /*  Class to Object -- here is a class of house and create a object $house to be a object */

// assing the value of object => "";
$house->name = "Sajib Ghosh <br>";
$house->room = " 10 room in this house<br>";
$house->floor = "I love 2nd floor <br>";
// print of object
echo $house->get_name();
echo $house->get_room();
echo $house->get_floor();










?>