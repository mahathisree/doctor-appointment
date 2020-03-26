<html>
<head>
  <title></title>
  <style type="text/css">
  b{
    font-size:200%;
    font-style: oblique;
    font-color:#00008B
  }
  i{
    font-size:100%;
    font-style:italic;
    font-color::#00008B
  }
  body
  {
  background-image:url("i16.jpg");
  background-repeat:no-repeat;
  background-size:1540px 750px;
  }
  </style>
</head>
<body>
  <?php
     include("configuration.php");
     session_start();
     if($_SERVER["REQUEST_METHOD"] == "POST") {
        $pemailid= mysqli_real_escape_string($db,$_POST['text1']);
        $demailid = mysqli_real_escape_string($db,$_POST['text2']);
        $healthissue= mysqli_real_escape_string($db,$_POST['text3']);
        $apdate= mysqli_real_escape_string($db,$_POST['d']);
        $aptime=mysqli_real_escape_string($db,$_POST['text4']);

        $sql = "INSERT INTO appointment values('$pemailid','$demailid','$healthissue','$apdate','$aptime')";
        $result = mysqli_query($db,$sql);

     }
  ?>

  <br><br><br><br>
  <center>
  <b>wait for your doctor to conform your appointment</b>
    <br><br>
      <i> to check your appointment status<i>
        <a href="finalcheck.php"> click here</a>
      </center>
      </body>
      </html>
