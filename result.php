<?php
session_start();
$result=$_POST['t1'];
$GLOBALS['error']="";
        if($result=='accept')
            {
            echo '<script type="text/javascript">window.location="dmenupage.php";</script>';
            }
            else if($result=='deny')
            {
            echo '<script type="text/javascript">window.location="pmenupage.php";</script>';
            }

?>
