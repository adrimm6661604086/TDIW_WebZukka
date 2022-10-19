<?php

include('connect.php');
$conn = $con;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $poblation = $_POST['poblation'];
    $zipCode = $_POST['zip-code'];
}

?>