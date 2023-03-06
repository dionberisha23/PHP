<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekti";

// Krijimi i connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//---------------------------------------------------------------


// Verifikimi i connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//---------------------------------------------------------------
?>
