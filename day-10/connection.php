<?php

$host = "localhost";
$database = "php_database_test";
$user = "root";
$password = "";

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) :
    echo "<span class='span-connection'>Connection failed</span>" . mysqli_connect_error();
else :
    echo "<span class='span-connection'>Connection successfully</span>";
endif;
