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
mysql_query("DELETE FROM sales WHERE name='$name'");
}
header("Location:upload.php");
mysql_close($con);


?>
