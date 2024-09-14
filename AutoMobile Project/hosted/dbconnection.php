<?php

    $host = "localhost";
    $username = "ennuwelx_testing";
    $password = "yLK4XjwPJCVbQDfQH4nJ";
    $database = "ennuwelx_testing";

    $conn = mysqli_connect($host, $username, $password, $database);

    if(!$conn) 
    {
        die("connection failed: ".mysqli_connect_error());
    }
    
?>