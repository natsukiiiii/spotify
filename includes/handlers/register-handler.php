<?php 

function sanitizeFormPassword($inputText){
    $inputText = strip_tags($inputText);
    //strip_tags — 文字列から HTML および PHP タグを取り除く
    return $inputText;
} 

function sanitizeFormUsername($inputText){
    $inputText = strip_tags($inputText);
    //strip_tags — 文字列から HTML および PHP タグを取り除く
    $inputText = str_replace(" ", "",$inputText);
    //str_replace — 検索文字列に一致したすべての文字列を置換する
    return $inputText;
} 

function sanitizeFormString ($inputText){
    $inputText = strip_tags($inputText);
    //strip_tags — 文字列から HTML および PHP タグを取り除く
    $inputText = str_replace(" ", "",$inputText);
    //str_replace — 検索文字列に一致したすべての文字列を置換する
    $inputText = ucfirst(strtolower($inputText));
    //ucfirst — 文字列の最初の文字を大文字にする
    return $inputText;
} 



if(isset($_POST['registerButton'])){
    //register button was pressed
    $username =sanitizeFormUsername($_POST['username']);
    //[]の中はnameをもたせる
    $firstName = sanitizeFormString($_POST['firstName']);
    $lastName = sanitizeFormString($_POST['lastName']);
    $email = sanitizeFormString($_POST['email']);
    $email2 = sanitizeFormString($_POST['email2']);
	$password = sanitizeFormPassword($_POST['password']);
    $password2 = sanitizeFormPassword($_POST['password2']);
    
    $wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);
    if($wasSuccessful == true){
       $_SESSION['userLoggedIn'] = $username;
       header("Location: index.php");
    }
}

?>