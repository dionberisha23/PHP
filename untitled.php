<?php
include 'db.php';

?>


 <html>
 <script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethint.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>
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


	div.center{

		text-align: center;
	}
	div.zbrast{
		 
		height:400px;
  width: 100%;
  align-content: center;
  }

	div.white{
		 position: absolute;
    top: 20%;
    left: 43%;
    margin-top: -50px;
    margin-left: -50px;
		height: 900px;
  width: 400px;
  align-content: center;

  padding: 10px;
  box-shadow: 5px 10px 18px #E0E0E0;
  background-color: white;
  }
  div.password{
   position: absolute;
    top: 20%;
    left: 43%;
    margin-top: 820px;
    margin-left: 13px;
}


input[type=text], input[type=password] {
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

<form action="Regjistrohu.php" method="post">
  <div class="imgcontainer">
    <img src="logo.png" alt="Avatar" class="avatar">
    <h3 class = "fonti">Universiteti i Prishtines<br>"Hasan Prishtina"</h3>
  </div>

  <div class="container">
    <input type="text" placeholder="Emri" name="name"required>
    
    <input type="text" placeholder="Mbiemri" name="sname" required>

    <input type="password" placeholder="Fjalkalimi" name="psw" required>
    <input type="password" placeholder="Konfirmo Fjalkalimin" name="pswconfirm" required>

    <input type="text" placeholder="E-mail" name="email" onkeyup="showHint(this.value)" required>
    <p>Suggestions: <span id="txtHint"></span></p>
    <input type="text" placeholder="Konfirmo E-mail" name="emailconfirm"  required>

     <input type="text" placeholder="Adresa Perkatese" name="adresa"  required>

</div>
    <div class="zbrast">
    <div class ="center"> 
    <input type="submit" value="Regjistrohu">
</form>       
</div>
</div>
    

</div>

	</body>
  </html>

<?php
session_start();
$emailc = $_REQUEST['emailconfirm'];
$pswc = $_REQUEST['pswconfirm'];
$emri = $_REQUEST['name'];
$mbiemri =  $_REQUEST['sname'];
$adresa = $_REQUEST['adresa'];
$password =  $_REQUEST['psw'];
$email = $_REQUEST['email'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);






if(($password===$pswc)&&($email===$emailc))
{
$sql = "INSERT INTO register (emri, mbiemri, adresa, psw, email)
VALUES ('$emri', '$mbiemri', '$adresa', '$hashed_password', '$email')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("Location: login.php");
}
else if ((isset($_POST['submit']))&&($password!==$pswc)||($email!==$emailc))
{
   echo '
    <div class ="password">
    <div class ="center">
    <span><a>Password-at ose Email-at nuk pershtaten!</a></span>
    </div>
    </div>
      ';
}
$conn->close();
?>
