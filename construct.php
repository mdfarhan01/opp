<?php

class Name {
    // Properties
    public $firstName;
    public $lastName;
    public $age;
    
    
    //construct0
    public function __construct($firstName, $lastName, $age){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->printInfo();
    }
    
    // Method
    public function printInfo() {
        echo "My first name is " . $this->firstName . 
             ", and my last name is " . $this->lastName . 
             ". I'm " . $this->age . " years old.";
    }
}

$person = new Name("farhan", "sadik", 22);


?>
