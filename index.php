
<?php

    include_once __DIR__ . "/includes/data.php";
    include_once __DIR__ . "/includes/addtotal.php";


    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    session_start();


// ------------------------              PHP CODE / REFER                   -------------------------------
    
    // if ( !isset($_SESSION['subTotal']) ) {
        
    //     $_SESSION['subTotal'] = 0;
    // }
    

    // if ( isset($_POST['selectedItemValue']) ) {
    //     addToTotal();
    // }
?>

<!------------------------              HOME PAGE HTML PHP                   ------------------------------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./static/stylesheet.css">
    <title>STRAWHATS ` STORE</title>

</head>
<body>

        <!-- <div class="col-2">
                <img src="https://images.unsplash.com/photo-1488188840666-e2308741a62f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1174&q=80">
        </div> -->


                <nav>
                    <input id="nav-toggle" type="checkbox">
                    <div class="logo">
                            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                            <button type="submit" name="filterOption" value="mugi">MUGI`WARA</button>
                            </form>
                    </div>
                <ul class="links">
                    <li><form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                        <button type="submit" name="filterOption" value="windowshop">WindowShop</button>
                        </form>
                    </li>
                    <li><form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                        <button type="submit" name="filterOption" value="checkout">viewItem</button>
                    </form>
                    </li>
                    <li><form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                         <button type="submit" name="filterOption" value="sign_up">Sign_Up</button>
                        </form>
                    </li>
                    <li><form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                         <button type="submit" name="filterOption" value="about">About</button>
                        </form>
                    </li>
                    <li><form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                         <button type="submit" name="filterOption" value="contact">Contact</button>
                        </form>
                    </li>
                    <li><form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                         <button type="submit" name="filterOption" value="login">Login</button>
                        </form>
                    </li>
                </ul>
                <label for="nav-toggle" class="icon-burger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </label>
            </nav>

<!-- ================================= includes into navbar / PHP =================================== -->    

    <?php
        if ( isset( $_GET['filterOption'] ) ) {
            
            switch ($_GET['filterOption']) {
                case 'mugi':
                    include_once __DIR__ . "/views/Home.php";
                    break;
                case 'windowshop':
                    include_once __DIR__ . "/views/windowshop.php";
                    break;

                case 'checkout':
                    include_once __DIR__ . "/views/checkout.php";
                    break;

                case 'login':
                    include_once __DIR__ . "/views/login.php";
                    break;

                case 'sign_up':
                    include_once __DIR__ . "/views/sign_up.php";
                    break;
                case 'about':
                    include_once __DIR__ . "/views/About.php";
                    break;
                    case 'contact':
                        include_once __DIR__ . "/views/Contact.php";
                        break;
                    
                default:
                    # code...
                    break;
            }
        }
    ?>

</body>
</html>