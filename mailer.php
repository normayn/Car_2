<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php

$connect = mysql_connect("localhost", "root", "");

mysql_select_db("cars");

$quey1="select * from uploads";

$result=mysql_query($quey1) or die(mysql_error());
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ADMINISTRATOR</title>
<meta name="keywords" content="iCinemas, Movies, kenya, online movie booking, online paying, mpesa,airtel money, orange cash" />
<meta name="description" content="iCinema.com is a cinema in kenya, one can book movies online, book seats, buy snacks and pay online. first of its kind in kenya" />

<link href="css/style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.style6 {color: #FFFFFF}
.style8 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
-->
</style>
</head>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p>
</p>
<p>&nbsp;</p>
</div>
<div align="center">
<table width="550" border="1" align="center" bgcolor="#666666" class="style6">
  <tr>
    <td>
	
	  <span class="style8">
	  <?php
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$to=$email;
$subject="Welcome to www.webinfopedia.com";

$message="From:$email <br />subject:$subject <br />".$message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: <info@webinfopedia.com>' . "\r\n";
$headers .= 'Cc: webinfopedia.com@gmail.com' . "\r\n";
@mail($to,$subject,$message,$headers);
if(@mail)
{
echo "Message has been successfully sent <a href='mail.php'>>>>GO BACK<<<</a>";	
}
?></span></td>
  </tr>
</table>
<div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
