<?php
class Account{
    private $errorArray;
    
    public function __construct() {
      $this->errorArray = array();
    }

    public function register($un,$fn,$ln,$em,$em2,$pw,$pw2){
        $this->validataUsername($un);
        $this->validataFirstName($fn);
        $this->validataLastName($ln);
        $this->validataEmails($em,$em2);        
        $this->validataPasswords($pw,$pw2);
    
    
    }

    private function validataUsername($un){
      
        if(strlen($un) > 25 || strlen($un) < 5){
         array_push($this->errorArray,"your username must be between 5 and 25 characters");
         return;
        }

        //todo: check is username exists

    }
    
    private function validataFirstName($fn){
        
    }
    private function validataLastName($ln){
        
    }
    private function validataEmails($em,$em2){
        
    }
    private function validataPasswords($pw,$pw2){
        
    }
    
    
}
?>