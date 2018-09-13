<!doctype html>
<html>

<head>
    <!--
   Exercise 02_01_01
   Author: Jaggar Hample
   Date: 9/11/18
   
   MultipleScripts.php
-->
    <title>PHP Environment Info</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="inital-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    // Information about current settings and versions.
    <h1>PHP Environment Info</h1>
    <p>
        // Reveals which version of PHP we are running This page was rendered with
        <?php
        echo phpversion();
        ?>
    </p>
    <p>
        // Reveals which version of Zend Engine we are running This PHP code was rendered with Zend Engine version
        <?php
        echo zend_version();
        ?>
    </p>
    <p>
        // Reveals which default MIME type is being used PHP's default MIME type is
        <?php
        echo ini_get("default_mimetype");
        ?>
    </p>
    <p>
        // Reveals the maximum execution time for PHP The maximum allowable execution for PHP script is
        <?php
        echo ini_get("max_execution_time");
        ?>
    </p>
</body>

</html>
