<?php

include("includes/config.php");
include("includes/classes/Account.php");
include("includes/classes/Constants.php");

$account = new Account($con);

$con = mysqli_connect("localhost", "root", "", "cinegram");

include("includes/handlers/login-handler.php");
include("includes/handlers/register-handler.php");

?>

<html>
<head>
    <title>Your life in film.</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="title-container">
        <div class="header">
            <h1>Join CineGram</h1>
        </div>
    </div>
    <div class="login-container">
      <form id="loginForm" action="index.php" method="POST">
        <div class="input-container">
            <i id="pic" class='bx bxs-user'></i>
            <input type="text" name="loginUsername" placeholder="Username" required>
        </div>
        <div class="input-container">
            <i id="pic2" class='bx bx-show'></i>
            <?php echo $account->getError(Constants::$loginFailed); ?>
            <input type="password" name="loginPassword" placeholder="Password" required>
        </div>
        <div class="forgot-password-container">
          <a href="#">Forgot Password?</a>
        </div>
        <button type="submit" name="loginButton">Login</button>
      </form>
        <div class="register-container">
            <p>Don't have an account? <a href="register.php">Register here!</a></p>
        </div>
    </div>
</body>
</html>
