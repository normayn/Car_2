<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMINISTRATOR</title>
<meta name="description" content="Fashion website">
<meta name="keywords" content="fashion, beauty">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style13 {
	color: #FFFFFF;
	font-family: Georgia, "Times New Roman", Times, serif;
}
-->
</style>
</head>
<body>
<div id="templatemo_container">
  <!-- end of top panel -->
<div id="templatemo_content_panel_1">
  <!-- end of news section -->
<div id="templatemo_section_1_1">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="div">
<div id="header">
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="758" height="66" border="1" align="center" bgcolor="#333333">
  <tr>
    <td>
	  <span class="style13">
	<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("cars") or die ("database incorrect");
$user=mysql_real_escape_string($_POST['user']);
$pass=mysql_real_escape_string($_POST['pass']);


$query=mysql_query("SELECT*FROM admin WHERE user='$user' AND pass='$pass'");

$total=mysql_num_rows($query);
if($total>0)
{
	session_start();
	$_SESSION['user']='';
	header('location:upload.php');
}
else
{


       die('PLEASE LOGIN AS AN ADMINISTRATOR CLICK <a href="adminlogin.html">>>>HERE<<<</a> TO TRY AGAIN!!!');
}
?></span></td>
  </tr>
</table>


<p>&nbsp;</p>
</div>
<!-- end of content panel 2 -->
<!-- end of content panel 3 -->
</div>
</div>
</div> <!-- end of container -->
<div align=center>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>