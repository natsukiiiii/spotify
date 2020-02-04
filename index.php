<?php 
include("includes/config.php");

// session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])){
    $userLoggedIn = $_SESSION['userLoggedIn'];
}else{
    header("Location: register.php");
}
?>

<html>
<head>
    <title>welcome to</title>
</head>
<body>
    hi!there
</body>
</html>