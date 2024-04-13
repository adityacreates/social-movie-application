<?php
include("includes/config.php");
include("includes/classes/Account.php");
include("includes/classes/Constants.php");

$account = new Account($con);

include("includes/handlers/login-handler.php");
include("includes/handlers/register-handler.php");

function getInputValue($name) {
    if(isset($_POST[$name])) {
        echo $_POST[$name];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create a new account!</title>
    <link rel="stylesheet" type="text/css" href="reg.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="title-container">
        <div class="header">
            <h1>Create a new account today!</h1>
        </div>
    </div>
    <div class="register-container">
      <form id="registerForm" action="register.php" method="POST">
        <div class="input-container">
            <i id="pic" class='bx bxs-user'></i>
            <?php echo $account->getError(Constants::$usernameCharacters); ?>
            <?php echo $account->getError(Constants::$usernameTaken); ?>
            <input type="text" name="username" placeholder="Username" value="<?php getInputValue('username') ?>" required>
        </div>

        <div class="input-container">
            <i id="pic2" class='bx bxl-gmail'></i>
            <?php echo $account->getError(Constants::$emailInvalid); ?>
            <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
            <?php echo $account->getError(Constants::$emailTaken); ?>
            <input type="email" name="email" placeholder="Email" value="<?php getInputValue('email') ?>" required>
        </div>

        <div class="input-container">
            <i id="pic2" class='bx bxl-gmail'></i>
            <input type="email" name="email2" placeholder="Email" value="<?php getInputValue('email2') ?>" required>
        </div>

        <div class="input-container">
            <i id="pic3" class='bx bx-show'></i>
            <?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
			<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
			<?php echo $account->getError(Constants::$passwordCharacters); ?>
            <input type="password" name="password" placeholder="Your password" required>
        </div>

        <div class="input-container">
            <i id="pic3" class='bx bx-show'></i>
            <input type="password" name="password2" placeholder="Confirm password" required>
        </div>

        <button type="submit" name="registerButton">Sign Up</button>
      </form> 
        <div class="message-container">
            <p>Already have a account? <a href="index.php">Sign in here!</a></p>
        </div>
    </div>
    
</body>
</html>