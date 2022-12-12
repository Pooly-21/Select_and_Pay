<?php

// ======================================== PHP ========================================

    // Enable error reporting
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');

    // session_start();

    require_once __DIR__ . "/../model/User.php";
    require_once __DIR__ . "/../data/UserDAO.php";
    require_once __DIR__ . "/../config/DatabaseConfig.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/stylesheet.css">
    <title>Document</title>

    <style>
    .background-imagesign {
        background-image: url('https://images.unsplash.com/photo-1666497896890-40d35556f1e3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80') ;
        background-size: cover;
        background-repeat: no-repeat;
        width: 165vh;
        height: 80vh;
      }
</style>

</head>
<body>

<div class="background-imagesign">
    <div class="signup-box">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h1>
                Sign_Up
            </h1>
            <label>Username</label>
            <input type="text" name="username" placeholder="Please enter username..">
            <label>Email</label>
            <input type="email" name="email" placeholder="Please enter email address..">
            <label>Password</label>
            <input type="password" name="password" placeholder="Please enter password..">
            <button type="submit" name="register"> Register </button>

            <p>
                By clicking the Sign Up button,you agree to our <br />
                <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
            </p>
        
        </form>
        <p class="para-2"> Already have an account?</p>
                <form action="./login.php">
                    <input type="submit" value="LOGIN">
                </form>
    </div>
</div>
<!-- <p class="para-2"> Already have an account? <a href="./login.php">Login here</a></p>  -->
</body>
</html>