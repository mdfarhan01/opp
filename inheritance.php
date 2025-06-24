<?php 

//class define

class farther{
    public function functionName(){
        echo "I've a house. ";
    }
}


//inheritance

class son extends farther{
    public function __construct(){
        $this->functionName();
        echo "And also I have a car. ";
    }
}


new son();

?>



<?php 

//define a class for inheritance

class person{
    public function personName(){
        echo "Hello, I am a person<br>";
    }
}


//inheritance

class student extends person{
    public function __construct(){
        $this->personName();
        
    }echo "I am a student<br>";
}


?>