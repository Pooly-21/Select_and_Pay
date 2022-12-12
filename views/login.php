<?php
// ======================================== PHP ========================================

    // Enable error reporting
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');

    // session_start();

    require_once __DIR__ . "/../model/User.php";
    require_once __DIR__ . "/../data/UserDAO.php";
    require_once __DIR__ . "/../config/DatabaseConfig.php";

    // ---- Tests ----

    if (isset($_POST['login'])) {

        $postUsername = $_POST['username'];
        $postPassword = $_POST['password'];
        
        $loggedInUser = $userDao->readByUsername($DatabaseConfig, $postUsername, $postPassword);

        if ($loggedInUser) {
            var_dump($loggedInUser);

            $_SESSION['loggedInUser'] = $loggedInUser;
            $_SESSION['loggedIn'] = 'true';

            header("Location: ../index.php");
        }
        
    }

// ======================================== Page ========================================
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/stylesheet.css">

    <title>Login</title>

</head>
<body>


 <!--<div class="login-box">
      <h1>Login</h1>
      <form>
        <label>Email</label>
        <input type="email" placeholder="" />
        <label>Password</label>
        <input type="password" placeholder="" />
        <input type="button" value="Submit" />
      <closeform></closeform></form>
    </div>
    <p class="para-2">
      Not have an account? <a href="signup.html">Sign Up Here</a>
    </p>  -->

    <section class="login-box">
        <h1>Login</h1>
        <form  action="<?=$_SERVER['PHP_SELF']?>" method="post">          
            <label>Username</label>
            <input type="text" name="username" placeholder="Please enter username..">
            <label>Password</label>
            <input type="password" name="password" placeholder="Please enter password..">
            <button type="submit" name="login"> Log In </button>
            <?php
                if(isset($_POST['login']) && $loggedInUser == null) {
                    echo "
                        <p style='color:red;'>
                            Please login as a registered user or enter a correct pasword..
                        </p>
                    ";
                }

                echo "
                    <p class='para-2'> Not have an account? <a href='./sign_up.php'>Sign Up Here</a></p>
                ";
            ?>
      
        </form>   
    </section>


</body>
</html>


