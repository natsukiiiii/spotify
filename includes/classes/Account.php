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
        if(strlen($fn) > 25 || strlen($fn) < 2){
            //strlen — 文字列の長さを得る
            array_push($this->errorArray,"your first name must be between 5 and 25 characters");
            return;
           } 
    }

    private function validataLastName($ln){
        if(strlen($ln) > 25 || strlen($ln) < 2){
            array_push($this->errorArray,"your last name must be between 5 and 25 characters");
            return;
           }  
    }

    private function validataEmails($em,$em2){
        if($em != $em2) {
            array_push($this->errorArray,"your emails don't much");
            return;
        }
        if(!filter_var($em,FILTER_VALIDATE_EMAIL)){
            //filter_varでメールが正しいか正しくないか(RFCに準拠しているという意味で)チェックする
            array_push($this->errorArray,"email is invalid");
            //メールが正しくない場合は、エラー文出す
            return;
        }
        //todo: check that username hasn't already been used　ユーザー名がまだ使用されていないことを確認してください
        
    }
    private function validataPasswords($pw,$pw2){
        if($pw != $pw2){
            array_push($this->errorArray,"your passwords don't much");
            return;
        }
        if(preg_match('/[^A-Za-z0-9]/', $pw)){
            array_push($this->errorArray,"your password can only contain numbers and letters");
            return;
        }
        if(strlen($pw) > 30 || strlen($pw) < 5){
            //strlen — 文字列の長さを得る
            array_push($this->errorArray,"your password must be between 5 and 30 characters");
            return;
           } 
    }
    
    
}
?>