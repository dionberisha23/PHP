<?php
include 'db.php';


?>

<html>
<!-- perdorimi i css per front end -->
<style>
select {
    width: 100%;
  padding: 20px 20px;
  margin: 8px 0;
  display: inline-block;
  background-color: #f6f6f6;
  border: none;
  border-radius: 20px;
  color : grey;

  }

	a {
		font-family: sans-serif;
		text-decoration: none;
		color:#780808;
		transition: 4s;
	}

	a:hover {
		text-decoration: underline;
		color:#780808;
		font-family: sans-serif;

	}

    a.reg {
    font-family: sans-serif;
    text-decoration: none;
    color:grey;
    transition: 4s;
  }

  a.reg:hover {
    text-decoration: underline;
    color:grey;
    font-family: sans-serif;

  }

	div.center{

		text-align: center;
	}
	div.zbrast{
		 
		height:400px;
  width: 100%;
  align-content: center;
  }
div.password{
   position: absolute;
    top: 20%;
    left: 43%;
    margin-top: 450px;
    margin-left: -40px;
}
	div.white{
		 position: absolute;
    top: 20%;
    left: 43%;
    margin-top: -50px;
    margin-left: -50px;
		height: 600px;
  width: 400px;
  align-content: center;

  padding: 10px;
  box-shadow: 5px 10px 18px #E0E0E0;
  background-color: white;
  }


input[type=text], input[type=password],[type=textbox]  {
  width: 100%;
  padding: 20px 20px;
  margin: 8px 0;
  display: inline-block;
  background-color: #f6f6f6;
  border: none;
  border-radius: 20px;
}

input[type=submit] {
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

input[type=submit]:hover {
 
  background-color: white;
  color: #780808;
  border: 1px solid #780808;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;

}




	}
	.fonti {
		font-family: Helvetica, sans-serif;
		color : grey;

	}
	
	</style>
<head>
	</head>
	<body style="background-image: url('prapavija.png')">
		
 <div class = "white">
<form method="post" action="lendet_student.php">
  <div class="imgcontainer">
    <img src="logo.png" alt="Avatar" class="avatar">
    <h3 class = "fonti">Universiteti i Prishtines<br>"Hasan Prishtina"</h3>
  </div>

  <div class="container">
    <input type="textbox" placeholder="Permbajtja e Detyres" name="detyra_permbajtja" required>

 <select name="detyra" id="detyra">
    <option value="detyra1">Detyra 1</option>
    <option value="detyra2">Detyra 2</option>
  </select>
    
    <input type="text" placeholder="email" name="email" required>
</div>
    <div class="zbrast">
    <div class ="center">  
    <input type="submit" value="Dorzo">
<div class ="center">
    <span><a class="reg">
<?php
session_start();
$detyra= $_REQUEST['detyra'];
$emri=$_COOKIE['emri'];
$data =date("Y-m-d h:i:sa");



$sql = "INSERT INTO vlersimi (emri, detyra, data, piket) VALUES ('$emri', '$detyra', '$data', '0')";

$result = $conn->query($sql);
$conn->close();
?>

  </a></span>
</div>
</div>

</div>
    
</form>
 
</div>

	</body>
  </html>
  
 