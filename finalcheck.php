<?php
if(isset($_POST['search']))
{
  $valueToSearch=$_POST['valueToSearch'];
  $query="SELECT * FROM `apconform` WHERE  CONCAT(`pemailid`, `demailid`, `healthissue`, `apdate`, `aptime`, `approval`)LIKE '%".$valueToSearch."%'";
  $search_result=filterTable($query);
}
else{
  $query="SELECT * FROM `apconform`";
  $search_result=filterTable($query);
}
function filterTable($query)
{
  $connect =mysqli_connect("localhost:3307","root","","odp");
  $filter_Result=mysqli_query($connect,$query);
  return $filter_Result;
}
?>
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
        font-family:italic;
        font-size:100%;
        color:#EE1289
      }
      h1{
        font-family:bold;
        font-size:200%;
        color:#EE1289
      }
      table,tr,td
      {
      border:1px solid black ;
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
    <form action="finalcheck.php" method="POST">
<input type="text" name="valueToSearch" >
<input type="submit" value="filter"  name="search"><br><br>
<table>
  <tr>
    <th>patientemailid</th>
    <th>doctoremailid</th>
    <th>Healthissue</th>
    <th>Appointment Date</th>
    <th>Appointment Time</th>
    <th>Approval</th>
  </tr>
  <?php while($row=mysqli_fetch_array($search_result)):?>
    <tr>
      <td><?php echo $row['pemailid'];?></td>
      <td><?php echo $row['demailid'];?></td>
      <td><?php echo $row['healthissue'];?></td>
      <td><?php echo $row['apdate'];?></td>
      <td><?php echo $row['aptime'];?></td>
      <td><?php echo $row['approval'];?></td>
    </tr>
  <?php endwhile;?>

  </table>
</form>
     </body>
     </html>
