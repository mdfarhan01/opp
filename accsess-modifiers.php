<?php 

//pulbic 

class studentName{
    public $name = "farhan";


    public function showName(){
        echo "Student name " . $this->name;
    }

}


$student = new studentName();
$student->showName();


//protected 

class mainClass{
    protected $password = 123456;


    protected function showPassword(){
        echo "Your bank account password is " . $this->password;
    }
}

class subClass extends mainClass{
    public function accountInfo(){
        $this->showPassword();
    }
}


$account = new subClass();
$account->accountInfo();
// $account->showPassword();


//private



class mainPass {
    private $pin = 1234; // Property needs visibility keyword (private/protected/public)

    private function showPin() {
        echo "My account pin number is " . $this->pin;
    }

    public function accesPin() {
        $this->showPin(); // Call the method with parentheses
    }
}

$account_pin = new mainPass();
$account_pin->accesPin();
// $account_pin->showPin();



?>