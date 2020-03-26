<?php
include('configuration.php');
session_start();
$email=$_SESSION["email"];
$sql="select location from patient where patient.email='$email'";
       $res=mysqli_query($db,$sql);
       if(mysqli_num_rows($res)>0)
       {
         $row=mysqli_fetch_assoc($res);
         $location=$row["location"];
         $_SESSION["location"]=$location;
       }
?>
<html>
<head>
<title>menupage</title>
<style type="text/css">
h1
{
font-size:40pt;
font-family:times;
color:black
}
body
{
background-image:url("i7.jpeg");
background-repeat:no-repeat;
background-size:1540px 750px;
}
#help{
  color:#3D59AB;
  font-size:100%;
  font-family:bold;
  padding:20px;
  background-color:#878787;
  border-radius:270px;
}
</style>
  </head>
<body>
  <div align="right">
  <form action="Logout.php">
  <input type="submit" value="Logout" name="submit">
</form>
</div>
  <center>
<br>
<br>
<br>
    <h1>MENUPAGE</h1>
<form action="pprofile.php" method="POST">
    <input id="help" type="submit" value="profile" >
</form>
<form action="doctoravail.php" method="POST">
    <input  id="help" type="submit" value="doctor availability">
  </form>
</center>
</body>
</html>
