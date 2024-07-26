<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pgasdb";
$port = 3308;

// Create connection
$con = mysqli_connect($servername, $username, $password, $database, $port);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
