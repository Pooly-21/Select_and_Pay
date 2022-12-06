<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // includes and session
    require_once __DIR__ . "/../model/Car.php";
    require_once __DIR__ . "/../includes/data.inc.php";

    session_start();

    // load data from $carData array and save to session so we can manipulate the state of the application
    if ( !isset($_SESSION['carData']) ) {

        $_SESSION['carData'] = $carData;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WINDOWSHOPPER`</title>
</head>
<body class="padder">

<hr>
    <h1>
        STRAWHATS ` STORE
    </h1>
    
    <hr>
    
    <section>
        <h4>Operations</h4>
    </section>

    <hr>

    <section>
        <h4>
            Stock
        </h4>
        <div class="items">
            <?php
                foreach ($_SESSION['carData'] as $no => $car) {
                    echo "
                        <div class='item'>
                            <h3>
                                Car No: " . $no + 1 . "
                            </h3>
                            <ul>
                                <li>". $car->getModel() . "</li>
                                <li>". $car->getManufacturer() . "</li>
                                <li>R". $car->calcFullPrice() . "</li>
                                ". $car->displayAvailibility() . "
                            </ul>
                            <form action='./views/checkout.php' method='get'>
                                <input type='hidden' name='carModel' value='" . $car->getModel() . "'>
                                <button type='submit' name='viewCar' value='true'>View Car</button>
                            </form>
                        </div>
                    ";
                }
            ?>
        </div>
    </section>
        
</body>
</html>
