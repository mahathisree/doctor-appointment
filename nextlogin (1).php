<?php
include('configuration.php');
session_start();
?>
<html>
<head>
<title>loginpage</title>
<style type="text/css">
body
{
background-image:url("pc10.jpg");
background-repeat:no-repeat;
background-size:1540px 750px;
}
h1
{
font_size:40pt;
font_family:bold;
color:blue
}
h2
{
font_size:20pt;
font_family:italic;
color:blue
}

</style>
</head>
<body>
<center>
<h1>ONLINE DOCTOR APPOINTMENT</h1>
<center>
<br>
<br><br><br><br>
<h3 style="background.cyan"><?php echo $_SESSION["error"]; ?></h3>
<div align="center">
<form action="dd.php">
<h1>Username:</h1>
<input type="text" name ="t1" required><br>
<h1>Password:</h1>
<input type="Password" name="t2" required><br>
<br>
<input type="radio" name="t3" value="Doctor" >Doctor<br>
<input type="radio" name="t3" value="Patient">Patient<br>
<input type="submit" value="sign in">
</form>
<form action="register.php">
<input type="submit" value="sign up">
</form>
</div>
</body>
</html>
