<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "loginsistem";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if(!$conn) { //Daca conexiunea cu baza de date nu a reusit, sa ne apare mesajul de mai jos.
    die("Connection failed: " . mysqli_connect_error());
}