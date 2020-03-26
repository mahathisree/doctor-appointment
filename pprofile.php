<html>
  <head>
    <title>Public profile</title>
    <style>
      #close{
        background:#EE1289;
        color:white;
        padding:10px;
      border-radius:20%;}
      body
      {
      background-image:url("i12.jpg");
      background-repeat:no-repeat;
      background-size:1540px 750px;
      }
      h3{
        font-family:bold;
        font-size:150%;
        color:#EE1289
      }
      h1{
        font-family:bold;
        font-size:200%;
        color:#EE1289
      }
    </style>
  </head>
  <body>
    <div align="right">
    <form action="Logout.php">
      <input type="submit" id="close" value="LogOut">
    </form>
  </div>
    <center><h1>PROFILE</h1></center>
    <?php
session_start();
$email=$_SESSION["email"];
$DB_SERVER = "localhost:3307";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_DATABASE = "odp";
$db = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
$sql="select * from patient where email='$email'";
       $res=mysqli_query($db,$sql);
       if(mysqli_num_rows($res)>0)
       {
         $row=mysqli_fetch_assoc($res);
         echo "<table>";
         echo "<tr>";
         echo "<td><h3>Email id:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".$row["email"]."</h3></td></tr>";
         echo "<br><br>";
         echo "<tr>";
         echo "<td><h3>Father Name:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".$row["fname"]."</h3></td></tr>";
         echo "<br><br>";
         echo "<tr>";
         echo "<td><h3>Location:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".$row["location"]."</h3></td></tr>";
        echo "<br><br>";
         echo "<tr>";
         echo "<td><h3>Health issue:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;".$row["healthissue"]."</h3></td></tr>";
         echo "</table>";
         }
         ?>
