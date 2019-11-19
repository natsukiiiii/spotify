<?php
class Account{
    public function __construct() {

    }

    public function register(){
        $this->validataUsername($username);
        $this->validataFirstName($firstName);
        $this->validataLastName($lastName);
        $this->validataEmails($email,$email2);        
        $this->validataPasswords($password,$password2);
    
    
    }

    private function validataUsername($un){
        echo "username function called";

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