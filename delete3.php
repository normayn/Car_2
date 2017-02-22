<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("cars",$con);

$fname=$_GET['fname'];
if(isset($_GET['fname']))
{
$fname=$_GET['fname'];
mysql_query("DELETE FROM inquiries WHERE fname='$fname'");
}
header("Location:viewinquiries.php");
mysql_close($con);


?>
