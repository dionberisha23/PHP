 <?php
session_start();
 include 'db.php';
  // nxerja e te dhenave nga forma ne php
$password =  $_REQUEST['psw'];
$email = $_REQUEST['email'];
//---------------------------------------

// egzekutimi i query ne php
$sql = "SELECT * FROM register WHERE email='$email' ";
$result = $conn->query($sql);
//-----------------------------------------------------

// perdorimi i te dhenave nga query per if/else statements
while($row = $result->fetch_assoc()) {
  if(password_verify($password, $row["psw"]))
  {
      $_SESSION['emri'] = $row["emri"];
      $_SESSION['mbiemri'] = $row["mbiemri"];
      $_SESSION['loged_in'] = true;
      setcookie("emri", $_SESSION['emri'], time()+36000);
      setcookie("mbiemri", $_SESSION['mbiemri'], time()+36000);
      setcookie("loged_in", $_SESSION['loged_in'], time()+36000);

    if($row["roli"]==="Student")
    {


    // header perdoret per navigim ne url te caktuara
     header("Location: student.php");
    }
    else if($row["roli"]==="Profesor")
    {
     header("Location: profesor.php");
    }
  }
  //-------------------------------------------------------------
  else{
    echo '
    <div class ="password">
    <div class ="center">
    <span><a>Password-i inkorekt</a></span>
    </div>
    </div>
      ';
  }
 
}
//---------------------------------------------------------------


// $conn->close() pedoret per mbylljen e lidhjes me databaze
$conn->close();
//---------------------------------------------------------------
?>