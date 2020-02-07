<?php
 include("includes/config.php");  
 include("includes/classes/Account.php");  
 include("includes/classes/Constants.php");  

 $account = new Account($con);

 include("includes/handlers/register-handler.php");  
 include("includes/handlers/login-handler.php");  

 function getInputValue($name){
     if(isset($_POST[$name])){
         echo $_POST[$name];
     }
 }

?>

<html>
<head>
    <title>welcome to spotyfy!</title>
    
    <link rel="stylesheet" type="text/css" href="assets/css/register.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
</head>
<body>

<?php
if(isset($_POST['registerButton'])){
    echo '<script>
            $(document).ready(function(){
                $("#loginForm").hide();
                $("#registerForm").show();
            });
          </script>';
}else{
    echo '<script>
            $(document).ready(function(){
                $("#loginForm").show();
                $("#registerForm").hide();
            });
           </script>';
}

?>
    
    <div id="background">

<div id="loginContainer">

        <div id ="inputContainer">
                <form id="loginForm" action="register.php" method="POST">
                    <h2>login to your acount</h2>
                        <p>
                        <?php echo $account->getError(Constants::$loginFailed);?>
                        <lable for="loginUsername">Username</lable>
                        <input placeholder="e.g. roriyomechannel" type="text" id="loginUsername" name="loginUsername" value="<?php getInputValue('loginUsername')?>" required>
                        </p>
                        <p>
                        <lable for="loginPassword">Password</lable>
                        <input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
                        </p>
                        <button type="submit" name="loginButton">LOG IN</button>

                        <div class="hasAccountText">
                            <span id="hideLogin">Don't have an account yet? Signup here.</span>
                        </div>

                </form>

                <form id="registerForm" action="register.php" method="POST">
                    <h2>creat your free account</h2>
                    <p>
                        <?php echo $account->getError(Constants::$usernameCharacters); ?>
                        <?php echo $account->getError(Constants::$usernameTaken); ?>
                        <lable for="username">Username</lable>
                        <input placeholder="e.g. roriyomechannel" type="text" id="username" name="username" value="<?php getInputValue('username') ?>" required="required">
                    </p>
                    <p>
                        <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                        <lable for="firstName">First name</lable>
                        <input placeholder="e.g. rori" type="text" id="firstName" name="firstName" value="<?php getInputValue('firstName') ?>" required="required">
                    </p>
                    <p>
                        <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                        <lable for="lastName">Lastname</lable>
                        <input placeholder="e.g. yomechannel" type="text" id="lastName" name="lastName" value="<?php getInputValue('lastName') ?>" required="required">
                    </p>
                    <p>
                        <?php echo $account->getError(Constants::$emailsDoNoMatch); ?>
                        <?php echo $account->getError(Constants::$emailInvalid); ?>
                        <?php echo $account->getError(Constants::$emailTaken); ?>

                        <lable for="email">Email</lable>
                        <input placeholder="e.g. roriyome@gmail.com" type="email" id="email" name="email" value="<?php getInputValue('email') ?>" required="required">
                    </p>
                        <lable for="email2">Confirm mail</lable>
                        <input placeholder="e.g. roriyome@gmail.com" type="email" id="email2" name="email2" value="<?php getInputValue('email2') ?>" required="required">
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
                        <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
                        <?php echo $account->getError(Constants::$passwordCharacters); ?>
                        <lable for="password">Password</lable>
                        <input placeholder="your password" type="password" id="password" name="password" value="<?php getInputValue('password') ?>" required>
                    </p>
                    <p>
                        <lable for="password2">Confirm password</lable>
                        <input  placeholder="your password" type="password" id="password2" name="password2" value="<?php getInputValue('password2') ?>" required>
                    </p>
                    <button type="submit" name="registerButton">SIGN UP</button>
                    <div class="hasAccountText">
                        <span id="hideRegister">already have an account? Log in here.</span>
                    </div>
                </form>
            </div>

            <div id="loginText">
              <h1>get great music, right now</h1>
              <h2>Listen to loads of songs for free</h2><ul>
                  <li>Discover music you'll fall in love with</li>
                  <li>create your own playlist</li>
                  <li>Follow artists to keep up to date</li>
              </ul>
            </div>

        </div>
    </div>
</body>
</html>