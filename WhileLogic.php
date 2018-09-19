<!doctype html>
<html>

<head>
    <!--
   Exercise 02_01_01
   Author: Jaggar Hample
   Date: 9/18/18
   
   WhileLogic.php
-->
    <title>Is Even</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="inital-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>While Logic</h2>
    <?php
    $counter = 0;
    // Counts 0 to 100
    while ($counter < 100){
        $numbers[] = $counter;
        // Increments
        ++$counter;
    }
    foreach($numbers as $currentNum){
        echo "$currentNum <br>";
    }
     ?>
</body>

</html>
