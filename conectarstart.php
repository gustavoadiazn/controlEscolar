<?php
//DB details
$dbHost     = 'localhost';
$dbUsername = 'root'; //'administrador1';
$dbPassword = ''; //'_51C4473l4$';
$dbName     = 'seres';

//Create connection and select DB
$link = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($link->connect_error) {
    die("Unable to connect database: " . $link->connect_error);
}
