<?php

class Name {
    // Properties
    public $firstName;
    public $lastName;
    public $age;
    

    
    // Method
    public function printInfo() {
        echo "My first name is farhan sadik";
    }


    public function myName(){
        echo "My nick name is ALi hossain";
    }
    
}

$person = new Name();

$person->printInfo();


$person = new Name();
$person->myName();



?>