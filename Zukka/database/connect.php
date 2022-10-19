<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbaname = "zukka";

$con = new mysqli($hostname, $username, $password, $dbaname);

if ($con->connect_error) {
  die("No se ha podido acceder a la base de datos");
}

?>