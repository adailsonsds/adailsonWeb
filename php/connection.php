<?php

$servername = "mysql";
$username = "root";
$password = "root";
$database = "controleEstoque";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

return $connection;