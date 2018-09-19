<!doctype html>
<html>

<head>
    <!--
   Exercise 02_01_01
   Author: Jaggar Hample
   Date: 9/18/18
   
   GasPrices.php
-->
    <title>Gas Prices</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="inital-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Gas Prices</h2>
    <?php
    // Sets the gas price
    $gasPrice = 2.57;
        // If the gas price is under 3 dollars, the echo says it is between 2-3 dollars
        if($gasPrice <= 3){
            echo "<p>Gas prices are between $2.00 and $3.00. </p>";
        }
        else{
            // If the gas price is over 3 dollars, the echo says it is between 2-3 dollars
            echo "Gas prices are not between $2.00 and $3.00";
        }
     ?>
</body>

</html>
