<?php
$localhost = "localhost";
$user = "root";
$password = "";
$database = "php_database_test";

$connect = mysqli_connect($localhost, $user, $password, $database);

$sql = mysqli_query($connect, "SELECT * FROM users");

if (mysqli_connect_error()) :
    echo "Error connection in database" . mysqli_connect_error();
else :
    echo "Database connected";
endif;