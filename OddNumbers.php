<!doctype html>
<html>

<head>
    <!--
   Exercise 02_01_01
   Author: Jaggar Hample
   Date: 9/11/18
   
   HelloWorld.php
-->
    <title>Odd Numbers</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="inital-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Odd Numbers</h2>
    <?php
    $i = 1;
    // Uses numbers 1-100
    while($i < 100){
        echo "$i is an odd number.<br>";
        // Skips over even numbers and only shows odd
        $i += 2;
    }
     ?>
</body>

</html>
