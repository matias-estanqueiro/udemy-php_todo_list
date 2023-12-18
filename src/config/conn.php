<?php

    // connect to database
    $host = "localhost";
    $dbname = "todolist";
    $user = "root";
    $password = "";
    
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        // set the PDO error mode to exception. PDO errors will be thrown as exceptions
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // PDOException : If error occurs display error message 
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

?>