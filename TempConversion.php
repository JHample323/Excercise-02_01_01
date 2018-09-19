<!doctype html>
<html>

<head>
    <!--
   Exercise 02_01_01
   Author: Jaggar Hample
   Date: 9/18/18
   
   TempConversion.php
-->
    <title>Temp Conversion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="inital-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Temp Conversion</h2>
    <?php
    // Create global variables
    $fahrenheit = 0;
    $celsius = 0;
        // While statement to produce the temp conversion
        while($fahrenheit <= 100){
        echo "$fahrenheit degrees fahrenheit.";
        // Executes equation for fahrenheit to celsius
        $celsius = (($fahrenheit - 32) * 5/9);
            // Displays celsius temp
            echo "is " . number_format($celsius, 2) . " degrees in celsius. <br>";
            // Increments fahrenheit temp
            $fahrenheit++;
        }
     ?>
</body>

</html>
