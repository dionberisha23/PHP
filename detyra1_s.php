<?php
include 'db.php';
?>
<html>
<style>
div.vlersimi {
	position: absolute;
	top: 720px;
    
	margin-left:20px;
	height: 200px;
  width: 25%;
  border-color: #ECECEC;
  border-style: solid;
  margin:;
  border-radius: 20px;
  border-width: medium;

  box-shadow: 5px 10px 18px #E0E0E0;
  background-color: white;
}

div.detyrat {
	margin-left:400px;
	height: 600px;
  width: 70%;
  border-color: #ECECEC;
  border-style: solid;
  margin:;
  border-radius: 20px;
  margin-bottom:20px;
  border-width: medium;
  box-shadow: 5px 10px 18px #E0E0E0;
  background-color: white;
}

div.position {
    position: absolute;
    top: 20%;
    left: 43%;
    margin-top: 200px;
    margin-left:-220px;
}

   h3{
    font-family: Arial, sans-serif;
    color: white;
    font-size: 60px;
    text-align: left;
  }

  div.center{

    text-align: center;
  }

  input[type=submit].a {
  background-color: #780808;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
  border-radius: 12px;
  transition: 0.3s;

}

input[type=submit].a:hover {
 
  background-color: white;
  color: #780808;
  border: 1px solid #780808;
}

  .welcome{
    position: absolute;
    top: 20%;
    left: 43%;
    margin-top: 320px;
    margin-left:-75px;
    font-family: Arial, sans-serif;
    color: white;
    font-size: 60px;
    text-align: center;
  }

  body {
    margin:0;
    padding:0;
    overflow-x:hidden;
}
div.white{
    height: 100px;
  width: 100%;
  background-repeat:no-repeat;
  background-size: cover;
  background-color: white;

  }

.color-overlay {
  width: 100%;
  height: 100%;
  background: #000;
  opacity: .6;
 
}
.color-overlay2 {
  width: 100%;
  height: 100%;
  background: #420000;
  opacity: .7;
 
}
  div.foto{
    height: 300px;
  width: 100%;
  background-repeat:no-repeat;
  background-size: cover;
  background-image: url("foto2.jpg");
  }

  div.foto2{
     height: 300px;
  width: 100%;
  background-repeat:no-repeat;
  background-size: cover;
  background-image: url("foto1.jpg");
  }
  img.logo {
    height: 150px;
  width: 100%;
  }
  img.social {
    height: 30px;
  width: 100%;
  }
  ul.nav {
  padding-left: 0px;
  
  text-align: center;
}
ul.nav > li {
  display: inline-block;
  padding: 10px 20px;
}
 a :hover {
  font-weight: bold;
}
ul.nav > li > a {
  color: darkslategrey;
  text-decoration: none;
  font-family: Verdana, Sans-serif;
  font-weight: 150;

}
head.menu {
  height: 200px;
  width: 100%;
}
</style>
<head class = "menu">
<ul class="nav">
  <li><a href="/logo"><img class="logo" src="logo.png" alt="logo"></a></li>
  

</ul>
<ul class="nav">
  
   <li><a href="student.php" style="color: orangered;">Home</a></li>
  <li><a href="lendet_student.php">Lendet</a></li>
  <li><a href="profili_s.php">Profili</a></li>
  <li><a href="FAQ.php">FAQ</a></li>

</ul>

<ul class="nav">
  
  <li><a href="https://twitter.com/rektorati?lang=en" style="color: orangered;">
    <img class="social" src="tw.png" alt="tw"></a></li>
  
   <li><a href="https://www.instagram.com/accounts/login/?next=/up_hasanprishtina/" style="color: orangered;"><img class="social" src="in.png" alt="in"></a></li>

    <li><a href="https://www.facebook.com/UniversitetiPrishtines/" style="color: orangered;"><img class="social" src="fb.png" alt="fb"></a></li>

</ul>
</head>

<body>

<div class ="foto">
  <div class="color-overlay">
  </div>
   <div style ="position: absolute;top: 380px;left: 42%;">
    <h3>Detyra 1</h3>
</div>
</div>

<div class ="white">
  </div>

  <div class ="detyrat">
  	<h2 style="font-family: sans-serif;text-align:center;">Pershkrimi i Detyres</h2>
  	<p style="font-family: sans-serif;text-align:center;">Ketu supozohet te pershkruhet detyra me kerkesat e veta</p>
    <div class="center" style = "position: absolute;top: 950px;left: -11%;width: 50%;height: 100%;">
<form action="detyra_forma.php">
  <input type="submit" class="a" value="Dorezo Detyren">
</form> 
</div>    
  </div>

  <div class ="vlersimi">
  	<h4 style="font-family: sans-serif;text-align:center;">Data e Dorzimit</h4>
     <p style="font-family: sans-serif;text-align:center;">
      <?php
    
     session_start();
$detyra="detyra1";
$emri=$_COOKIE['emri'];
$sql = "SELECT * FROM vlersimi WHERE emri='$emri' AND detyra ='$detyra'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    $data= $row["data"];
    $pikt= $row["piket"];
    echo $data;
  }
?>
</p>
    
  	<h4 style="font-family: sans-serif;text-align:center;">Piket</h4>
    <p style="font-family: sans-serif;text-align:center;">
      <?php
      echo $pikt;
      ?>
    
/100</p>
</div>



