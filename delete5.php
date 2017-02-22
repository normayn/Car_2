<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("cars",$con);

$caption=$_GET['caption'];
if(isset($_GET['caption']))
{
$caption=$_GET['caption'];
mysql_query("DELETE FROM uploads WHERE caption='$caption'");
}
header("Location:onsale.php");
mysql_close($con);


?>
