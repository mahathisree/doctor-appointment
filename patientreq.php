<html>
  <head>
    <title>Public profile</title>
    <style>
      #close{
        background:red;
        color:white;
        padding:10px;
      border-radius:20%;}
      body
      {
      background-image:url("p20.jpg");
      background-repeat:no-repeat;
      background-size:1540px 750px;
      }
      h3{
        font-size:150%;
        font-style:bold;
        color:black
      }
    </style>
  </head>
  <body>
    <center><h1>Profile</h1></center>
    <?php
session_start();
$email=$_SESSION["email"];
$DB_SERVER = "localhost:3307";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_DATABASE = "odp";
$db = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
$sql="select * from appointment where appointment.demailid='$email'";
       $res=mysqli_query($db,$sql);
       if(mysqli_num_rows($res)>0)
       {
         $row=mysqli_fetch_assoc($res);
         echo "<table>";
         echo "<tr>";
         echo "<td><h3>PatientEmail id:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".$row["pemailid"]."</h3></td></tr>";
         echo "<tr>";
         echo "<td><h3>Health issue:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".$row["healthissue"]."</h3></td></tr>";
         echo "<br>";
         echo "<tr>";
         echo "<td><h3>Date:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".$row["apdate"]."</h3></td></tr>";
        echo "<br>";
         echo "<tr>";
         echo "<td><h3>Time:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;".$row["aptime"]."</h3></td></tr>";
          echo "</table>";
          echo "<form action='doctorres.php'>";
         echo "<input id='close' type='submit' value='report' name='submit'></form>";
        }
         ?>
