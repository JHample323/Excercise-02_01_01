<!doctype html>
<html>

<head>
    <!--
   Exercise 02_01_01
   Author: Jaggar Hample
   Date: 9/12/18
   
   IsEven.php
-->
    <title>Is Even</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="inital-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Is Even</h2>
    <?php
    // Array that creates random numbers
    $numbersArray = array(rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10));
    $x = 0;
    $y = 1;
    // Checks for even numbers
    $returnValue = $numbersArray % $x;
    echo '<p>$returnValue is an even number</p>';
    // Checks for odd numbers
    $returnValue = $numbersArray % $y;
    echo '<p>$returnValue is an odd number</p>';
    ?>
</body>

</html>
