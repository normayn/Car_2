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
.style9 {font-size: 14px}
.style10 {
	color: #FFFFFF;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
}
-->
</style>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div align="center">
  <table width="754" height="124" border="1" bgcolor="#333333">
    <tr>
      <td><p align="center">
        <?php
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('cars', $con);



$sql=("INSERT INTO registration(firstname,secondname,username,pass,email,gender,mobile) 
VALUES
('$_POST[firstname]','$_POST[secondname]','$_POST[username]','".md5($_POST['pass'])."','$_POST[email]','$_POST[gender]','$_POST[mobile]') ");

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($con);

?>
      </p>
      <p align="center" class="style5 style10"><strong>Thank you for registering with our salon,please click below link to view moto gallery </strong></p>
      <p align="center" class="style9"><span class="style5 style5 style10"><strong><a href='gallery.php'>>>>CLICK HERE<<<</a></strong></span> </p>
      <p align="center" class="style9">&nbsp;</p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
