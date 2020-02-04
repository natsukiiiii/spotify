<?php 
if(isset($_POST['loginButton'])){
    //login button was pressed
    $username = $POST['loginUsername'];
    $password = $POST['loginPassword'];

    $result = $account->login($username, $password);

    if($result == true){
        $_SESSION['userLoggedIn'] = $username;
        header("Location: index.php");
    }
}
?>