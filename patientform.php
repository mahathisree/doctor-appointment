<?php
include('configuration.php');
?>
<html>
<head>
  <title>registerpage</title>
<style type="text/css">
body
{
background-image:url("i4.jpg");
background-repeat:no-repeat;
background-size:1540px 750px;
}
b
{
font-size:24;
font_family:bold;
color:#8B0A50
}
h{
  font-size:48;
  font-family: italic;
  color:#8B0A50
}
#help{
  color:pink;
  font-size:100%;
  font-family:bold;
  padding:20px;
  background-color:#8B0A50;
  border-radius:20px;
}
</style>
</head>
<body>
  <center>
  <form  action="formdetails.php" method="post">
    <table>
        <h>PATIENT FORM<h><br>
    <tr>
      <td> <b>PatientName:</b></td>
      <td><input type="text" name="text1" required></td></tr><br>
     <tr>
     <td><b>FatherName:</b></td>
    <td><input type="text" name="text2"></td></tr><br>
     <tr>
     <td><b>Email_id:</b></td>
    <td><input type="text" name="text3" required></td></tr><br>
     <tr>
    <td><b>Set password:</b></td>
    <td><input type="password" name="pass" required></td></tr><br>
    <tr>
  <td><b>Health issue:</b></td>
    <td> <input type="text" name="text4" required ></td></tr><br>
    <tr>
    <td> <b>Location:</b></td>
    <td> <input type="text" name="text6"></td></tr><br>
  </table>
     <br>
     <input id="help" type="submit" value="submit">
   </form>
 </center>
 </body>
 </html>
