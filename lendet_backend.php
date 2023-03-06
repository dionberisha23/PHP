<?php
session_start();
 include 'db.php';

// egzekutimi i query ne php
$sql = "SELECT * FROM lendet ORDER BY id ASC";
$result = $conn->query($sql);

 while($row = $result->fetch_assoc()) {
$_SESSION['titulli'] = $row["titulli"];
setcookie("titulli", $_SESSION['titulli'], time()+36000);

}
//-----------------------------------------------------
$conn->close();
?>