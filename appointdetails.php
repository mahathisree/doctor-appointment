<?php
include('configuration.php');
session_start();
$location=$_SESSION["location"];
$sql="select email from patient where patient.location='$location'";
       $res=mysqli_query($db,$sql);
       if(mysqli_num_rows($res)>0)
       {
         $row=mysqli_fetch_assoc($res);
         $email=$row["email"];
         echo "<k>WELCOME $email<k>";
         $_SESSION["email"]=$email;
       }
?>
<html>
<head>
  <title>registerpage</title>
<style type="text/css">
body
{
background-image:url("i13.jpg");
background-repeat:no-repeat;
background-size:1540px 750px;
}
b
{
font_size:60pt;
font_family:bold;
color:#0000CD	;
}
k{
  font-size:30pt;
  font-family:italic;
  color:#0000CD
}
#close{
  background:#0000CD;
  color:white;
  padding:10px;
border-radius:20%;
}
</style>
</head>
<body >
  <center>
<br><br><br>
<form action='wait.php' method='post'>
  <table>
    <tr>
 <td><b>Patientemailid:</b></td>
<td><input type='text' name='text1' value='<?php echo $email ?>' required></td></tr>
<tr><td><b>Doctoremailid:</b></td>
<td><input type='text' name='text2'></td></tr>
<tr><td><b>Health problem</b></td>
<td><input type='text' name='text3' required></td></tr>
<tr><td><b>Date</b></td>
<td><input type='date' name='d' required></td></tr>
<tr><td><b>Time</b></td>
<td><input type='time' name='text4' required ></td></tr>
<tr><td></td>
<td><input id="close" type='submit' value='submit'></td></tr>
</table>
</form>
</center>
</body>
 </html>
