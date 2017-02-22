<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("cars",$con);

$firstname=$_GET['firstname'];
if(isset($_GET['firstname']))
{
$firstname=$_GET['firstname'];
mysql_query("DELETE FROM registration WHERE firstname='$firstname'");
}
header("Location:users.php");
mysql_close($con);


?>
