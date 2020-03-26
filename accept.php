<?php
include("configuration.php");
session_start();
$email=$_SESSION['email'];
$sql="INSERT INTO apconform(pemailid,demailid,healthissue,apdate,aptime,approval) SELECT pemailid,demailid,healthissue,apdate,aptime,NULL FROM appointment where demailid='$email'";

$res = mysqli_query($db,$sql);

$docres = $_POST['docapp'];
if($docres=='accept')
{
 $sql1 = "UPDATE apconform set approval='accepted' where demailid='$email'";
}
elseif ($docres=='deny')
{
  $sql1 = "UPDATE apconform set approval='Denied' where demailid='$email'";
}
$res1 = mysqli_query($db,$sql1);
?>
