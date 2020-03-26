<?php
   include("configuration.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $mydname = mysqli_real_escape_string($db,$_POST['t1']);
      $myspl = mysqli_real_escape_string($db,$_POST['t2']);
      $myloc= mysqli_real_escape_string($db,$_POST['t3']);
      $myinit= mysqli_real_escape_string($db,$_POST['t4']);
      $myoutt=mysqli_real_escape_string($db,$_POST['t5']);
      $myemail=mysqli_real_escape_string($db,$_POST['t6']);
      $mypwd=mysqli_real_escape_string($db,$_POST['t7']);

      $sql = "INSERT INTO doctor values('$myemail','$mypwd','$mydname','$myspl','$myinit','$myoutt','$myloc')";
      $result = mysqli_query($db,$sql);
        header("location: Login.php");

   }
?>
