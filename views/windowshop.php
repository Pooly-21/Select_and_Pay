
<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="padder">
    
<section>
    <form class="items" action=" <?php $_SERVER['PHP_SELF'] ?>" method="post">
        <?php
            for ($i=0; $i < count($items); $i++) { 
        ?>   
            <button type="submit" name="selectedItemValue" value="<?php echo $items[$i]['price']; ?>" class="item">
                <h3>
                    Item <?php echo $i + 1; ?> 
                </h3>
                <li>
                    barcode: <?php echo $items[$i]['barcode']; ?> 
                </li>
                <li>
                    name <?php echo $items[$i]["name"]; ?> 
                </li>
                <li>
                    price <?php echo $items[$i]['price']; ?> 
                </li>
            </button>
        <?php
            }
        ?>
    </form>
</section>

   
    <div class="till__display">
            <div>
            <h2>Your Final Amount `</h2>
                <span class="till__console">
                    Amount: <?php echo $_SESSION['subTotal'];?>
                </span>
            </div>
        </div>
    <hr>

        
</body>
</html>



