<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("cars",$con);

$name=$_GET['name'];
if(isset($_GET['name']))
{
$name=$_GET['name'];
mysql_query("DELETE FROM reviews WHERE name='$name'");
}
header("Location:viewreviews.php");
mysql_close($con);


?>
