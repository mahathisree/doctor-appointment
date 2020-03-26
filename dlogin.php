<?php
   include("configuration.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['t1']);
      $mypassword = mysqli_real_escape_string($db,$_POST['t2']);

      $sql = "(SELECT emailid FROM patient WHERE emailid = '$myusername' and password = '$mypassword'
              union
              SELECT emailid FROM doctor WHERE emailid = '$myusername' and password = '$mypassword')";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row
    //$count=1;
      if($count == 1) {
         //session_register("myusername");
        echo "welcome $username";

         header("location: menupage.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
