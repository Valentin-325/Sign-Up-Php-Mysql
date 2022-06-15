<?php

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once '../dbcon.php';
    require_once 'functions.php';


    if(identicUsername($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $username, $email, $password);
}else {
    header("location: ../signup.php");
    exit();
}