<?php
   include("configuration.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myname = mysqli_real_escape_string($db,$_POST['text1']);
      $myfname = mysqli_real_escape_string($db,$_POST['text2']);
      $myemail= mysqli_real_escape_string($db,$_POST['text3']);
      $mypwd= mysqli_real_escape_string($db,$_POST['pass']);
      $myhlth=mysqli_real_escape_string($db,$_POST['text4']);
      $myloc=mysqli_real_escape_string($db,$_POST['text6']);


      $sql = "INSERT INTO patient values('$myemail','$myname','$myfname','$mypwd','$myloc','$myhlth')";
      $result = mysqli_query($db,$sql);
        header("location: Login.php");

   }
?>
