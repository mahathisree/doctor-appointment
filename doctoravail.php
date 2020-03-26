<html>
  <head>
    <title>Public profile</title>
    <style>
      #close{
        background:red;
        color:white;
        padding:10px;
      border-radius:270%;
            }
            body
            {
            background-image:url("i15.jpg");
            background-repeat:no-repeat;
            background-size:1540px 750px;
            }
            h3{
              font-size:150%;
              font-style:bold;
              color:#104E8B
            }
            h1{
              font-size:200%;
              font-family:bold;
              color:red
            }
    </style>
  </head>
  <body>
    <center><h1>Profile</h1></center>
    <?php
session_start();
$location=$_SESSION["location"];
$DB_SERVER = "localhost:3307";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_DATABASE = "odp";
$db = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
$sql="select * from doctor where doctor.location='$location'";
echo $location; 
       $res=mysqli_query($db,$sql);
       if(mysqli_num_rows($res)>0)
       {
         while($row=mysqli_fetch_assoc($res)){
         echo "<div align='right'>";
         echo "<table>";
         echo "<tr>";
         echo "<td><h3>Email id:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".$row["emailid"]."</h3></td></tr>";
         echo "<tr>";
         echo "<td><h3>Name:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".$row["name"]."</h3></td></tr>";
         echo "<br>";
         echo "<tr>";
         echo "<td><h3>Specializations:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".$row["specializations"]."</h3></td></tr>";
         echo "<br>";
         echo "<tr>";
         echo "<td><h3>Location:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&ensp;".$row["location"]."</h3></td></tr>";
         echo "<br>";
         echo "<tr>";
         echo "<td><h3>InTime:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&ensp;".$row["intime"]."</h3></td></tr>";
         echo "<br>";
         echo "<tr>";
         echo "<td><h3>OutTime:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&ensp;".$row["outime"]."</h3></td></tr>";
         echo "<tr>";
         echo "<td></td>";
        echo "<td><form action='appointdetails.php'><input id='close' type='submit' name='submit' value='BOOK APPOINTMENT'></form></td></tr>";
        echo "</table>";
        echo "</div>";
      }
      }
        else
          {
            echo "no doctors are available at $location";
          }
         ?>
</body>
</html>
