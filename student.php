<html>
<style>
  .container1 {
      height: 450px;
    }
    #map {
      width: 100%;
      height: 100%;
      border: 1px solid blue;
    }
    #data, #allData {
      display: none;
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
    height: 500px;
  width: 100%;
  background-repeat:no-repeat;
  background-size: cover;
  background-image: url("foto2.jpg");
  }

	div.foto2{
		height: 500px;
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


  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/googlemap.js"></script>


<ul class="nav">
	<li><a href="/logo"><img class="logo" src="logo.png" alt="logo"></a></li>
  

</ul>
<ul class="nav">
	
  <li><a style="color: orangered;">Home</a></li>
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
  <div class ="welcome">
 <h>Welcome,<br>
 <?php

session_start();
echo $_COOKIE['emri'] . " " . $_COOKIE['mbiemri'];
?> !</h>
</div>
</div>
<div class="white">
</div>
<div class="container1">
    <center><h1>Access Google Maps API in PHP</h1></center>
    <?php 
      require 'education.php';
      $edu = new education;
      $coll = $edu->getCollegesBlankLatLng();
      $coll = json_encode($coll, true);
      echo '<div id="data">' . $coll . '</div>';

      $allData = $edu->getAllColleges();
      $allData = json_encode($allData, true);
      echo '<div id="allData">' . $allData . '</div>';      
     ?>
    <div id="map"></div>
  </div>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key={your api key}&callback=loadMap">
</script>

  </body>
</html>