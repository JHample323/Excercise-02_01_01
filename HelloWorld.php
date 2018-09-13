<!doctype html>
<html>

<head>
    <!--
   Exercise 02_01_01
   Author: Jaggar Hample
   Date: 9/11/18
   
   HelloWorld.php
-->
    <title>PHP Environment Info</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="inital-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php
    // global variables for World, Sun and Moon
        $worldVar = "world";
        $sunVar = "Sun";
        $moonVar = "Moon";
        $worldInfo = 92897000;
        $sunInfo = 72000000;
        $moonInfo = 3456;
    
    // echos for variable expansion to display information
    echo "<p>Hello $worldVar<br>";
    echo "The $worldVar is $worldInfo miles from the $sunVar.<br>";
    echo "Hello ", $sunVar, "!<br>";
    echo "The $sunVar's core temperature is approximately $sunInfo degrees Fahrenheit.<br>";
    echo "Hello ", $moonVar, "!<br>";
    echo "The $moonVar is $moonInfo miles in diameter.</p>";
    
    echo "This is a {$moonVar}embedded in double quotes.<br>";
     ?>
</body>

</html>