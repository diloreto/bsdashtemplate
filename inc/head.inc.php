<?php require("PHP-Login/login/loginheader.php"); ?>
<?php

// Connect to database
$mysqli = new mysqli("localhost", "tonydilo_matty", "Concrete#1", "tonydilo_marinaro");

/*
 * This is the "official" OO way to do it,
 * BUT $connect_error was broken until PHP 5.2.9 and 5.3.0.
 */
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}


mysqli_close($link);
?>