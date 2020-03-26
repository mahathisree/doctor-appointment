<?php
include('configuration.php');
?>
<html>
<head>
<style type="text/css">
  #help{
    color:pink;
    font-size:100%;
    font-family:bold;
    padding:20px;
    background-color:#8B3A62;
    border-radius:270px;
  }
  body
  {
  background-image:url("i3.jpg");
  background-repeat:no-repeat;
  background-size:1540px 750px;
  }
  b{
    font-size: 24;
    color:midnightblue
  }
  h{
    font-size:48;
    color:	#8B3A62
  }

</style>
<title></title>
</head>
<body>
<center><h>MENUPAGE</h>
  <br><br><br><br>
  <b>SELECT YOUR TYPE<b><br><br>
  <form action="patientform.php">
  <input id="help" type="submit" value="PATIENTSIGNUP" name="p1">
</form>
  <form action="doctordetails.php">
  <input id="help" type="submit" value="DOCTORSIGNUP" name="d1">
</form>
</center>
</body>
</html>
