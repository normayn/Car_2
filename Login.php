<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Fashion website</title>
<meta name="description" content="Fashion website">
<meta name="keywords" content="fashion, beauty">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #FFFFFF;
}
-->
</style>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
<div align="center">
</p>
<table width="798" height="124" border="1" align="center" bgcolor="#333333" class="style5">
    <tr>
      <td><p align="center" class="style1">
    <?php

session_start();

$username = $_POST['username'];
$pass = md5($_POST['pass']);

if ($username&&$pass)
{
$connect = mysql_connect("localhost","root","") or die ("couldnt connect");

mysql_select_db("cars") or die ("couldnt find Database");

$query=mysql_query("select* from registration where username='$username'");

$numrows = mysql_num_rows($query);

if ($numrows!=0)
{

while ($row = mysql_fetch_assoc($query))
{

$dbusername = $row['username'];
$dbpass = $row['pass'];

}

//check
if ($username==$dbusername&&$pass==$dbpass)
{


echo "YOU HAVE SUCCESSFULLY LOGGED IN <a href='gallery.php'>>>>CLICK HERE<<<</a>TO VIEW LATEST CAR MODELS";

$_SESSION['username']=$username;


}
else 
 
   echo "Incorrect password!<a href='login.html'>>>>TRY AGAIN<<<</a>";


}
else
 die("Username is not registered <a href='login.html'>>>>GO BACK<<<</a> ");

}
else 
  die ("Please enter username and password");


?></td>
  </tr>
</table>