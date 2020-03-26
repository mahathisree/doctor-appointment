<?php
include('configuration.php');
session_start();
$email=$_SESSION["email"];
$sql="select location from patient where doctor.emailid='$email'";
$res=mysqli_query($db,$sql);
?>
<html>
<head>
<title>menupage</title>
<style type="text/css">
h1
{
font-size:40pt;
font-family:bold;
color:#3D59AB
}
body
{
background-image:url("i7.jpeg");
background-repeat:no-repeat;
background-size:1540px 750px;
}
#help{
  color:pink;
  font-size:100%;
  font-family:bold;
  padding:20px;
  background-color:#3D59AB;
  border-radius:270px;
}

</style>
  </head>
<body>
  <div align="right">
    <form action="Logout.php">
      <input type="submit" value="Logout" name="submit">
    </form>
  <center>
<br>
<br>
<br><br><br><br>
    <h1>MENUPAGE</h1>
<form action="dprofile.php">
    <input id="help" type="submit" value="profile" >
</form><br><br>
<form action="patientreq.php">
    <input id="help" type="submit" value="requested appointments" >
  </form>
</center>
</body>
</html>
