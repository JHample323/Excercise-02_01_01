<!doctype html>
<html>

<head>
    <!--
   Exercise 02_01_01
   Author: Jaggar Hample
   Date: 9/11/18
   
   Concerts.php
-->
    <title>Concerts</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="inital-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php
    // Create an array for performers
    $concerts = array("Eminem", "Lil Peep", "Xavier Wulf", "Kid Cudi", "Kendrick Lamar");
    $concerts[] = "Nirvana";
    $concerts[] = "Interpol";
    // echo to count array
    echo "<p>The following ", count($concerts), " concerts are scheduled.</p>";
    // echo shows the upcoming performers
    echo "$concerts[0]<br>";
    echo "$concerts[1]<br>";
    echo "$concerts[2]<br>";
    echo "$concerts[3]<br>";
    echo "$concerts[4]<br>";
    echo "$concerts[5]<br>";
    echo "$concerts[6]</p>";
    
    // Shows array of artist. Pre displays array in the same format as in the IDE
    echo "<pre>";
    print_r($concerts);
    echo "</pre>";

    echo "<pre>";
    var_dump($concerts);
    echo "</pre>";
   
    ?>
</body>

</html>
