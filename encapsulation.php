<?php


class studentName{
   private $name;

  public function setName($name){
    $this->name = $name;
 }
 
 public function getName(){
   echo $this->name;
 }
}


$students = new studentName();
$students->setName("My name is Farhan Sadik Shemon");
$students->getName();
// $students->name; 



?>
