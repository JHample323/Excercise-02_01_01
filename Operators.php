<!doctype html>
<html>

<head>
    <!--
   Exercise 02_01_01
   Author: Jaggar Hample
   Date: 9/11/18
   
   Operators.php
-->
    <title>PHP Environment Info</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="inital-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Operators</h2>
    <!--   The following PHP uses addition and calculates the modulus-->
    <?php
    // Addition
    $x = 100;
    $y = 200;
    $returnValue = $x + $y;
    echo '<p>$returnValue after addition: ', $returnValue, "</p>";
    // Modulus
    $x = 3;
    $y = 2;
    $returnValue = $x % $y;
    echo '<p>$returnValue after modulus: ', $returnValue, "</p>";
    // Review of +=
    $x = "Hello ";
    $y = "World";
    $x .= $y;
    echo '<p>$returnValue after operation: ', $x, "</p>";
     ?>
</body>

</html>
