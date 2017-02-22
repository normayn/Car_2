<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>iCinema | Movies</title>
<meta name="keywords" content="iCinemas, Movies, kenya, online movie booking, online paying, mpesa,airtel money, orange cash" />
<meta name="description" content="iCinema.com is a cinema in kenya, one can book movies online, book seats, buy snacks and pay online. first of its kind in kenya" />

<link href="css/style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
.style5 {font-size: 16px}
.style6 {font-size: 14px}
-->
</style>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div align="center">
  <table width="897" height="69" border="1" align="center" bgcolor="#333333" class="style1">
    <tr>
      <td>
<?php
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('cars', $con);



$sql=("INSERT INTO orders(amount,service,cnumber, name, address ,email, phone) 
VALUES
('$_POST[amount]','$_POST[service]','$_POST[cnumber]','$_POST[name]','$_POST[address]','$_POST[email]','$_POST[phone]') ");


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

echo 'YOU HAVE SUCCESSFULLY MADE PAYMENTS FOR YOU CAR(S), CLICK:: <a href="gallery.php">>>>HERE<<<</a> TO GO BACK';
mysql_close($con);
?> 
 </tr>
  </table>
</div>