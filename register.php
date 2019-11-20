<?php
 include("includes/classes/Account.php");  
 $account = new Account();

 include("includes/handlers/register-handler.php");  
 include("includes/handlers/login-handler.php");  

?>

<html>
<head>
    <title>welcome to</title>
</head>
<body>
<div id ="inputContainer">
<form id="loginForm" action="register.php" method="POST">
<h2>login to your acount</h2>
<p>
<lable for="loginUsername">Username</lable>
<input placeholder="e.g. roriyomechannel" type="text" id="loginUsernameid" name="loginUsername" required>
</p>
<p>
<lable for="loginPassword">Password</lable>
<input type="password" id="loginPassword" name="loginPassword" required>
</p>
<button type="submit" name="loginButton">LOG IN</button>
</form>

<form id="registerForm" action="register.php" method="POST">
<h2>creat your free account</h2>
<p>
<lable for="username">Username</lable>
<input placeholder="e.g. roriyomechannel" type="text" id="username" name="username" required="required">
</p>
<p>
<lable for="firstName">First name</lable>
<input placeholder="e.g. rori" type="text" id="firstName" name="firstName" required="required">
</p>
<p>
<lable for="lastName">Lastname</lable>
<input placeholder="e.g. yomechannel" type="text" id="lastName" name="lastName" required="required">
</p>
<p>
<lable for="email">Email</lable>
<input placeholder="e.g. roriyome@gmail.com" type="email" id="email" name="email" required="required">
</p>
<lable for="email2">Confirm mail</lable>
<input placeholder="e.g. roriyome@gmail.com" type="email" id="email2" name="email2" required="required">
</p>

<p>
<lable for="password">Password</lable>
<input placeholder="your password" type="password" id="password" name="password" required>
</p>
<p>
<lable for="password2">Confirm password</lable>
<input  placeholder="your password" type="password" id="password2" name="password2" required>
</p>
<button type="submit" name="registerButton">SIGN UP</button>
</form>
</div>
</body>
</html>