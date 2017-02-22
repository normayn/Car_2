<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ADMINISTRATOR</title>
<meta name="keywords" content="iCinemas, Movies, kenya, online movie booking, online paying, mpesa,airtel money, orange cash" />
<meta name="description" content="iCinema.com is a cinema in kenya, one can book movies online, book seats, buy snacks and pay online. first of its kind in kenya" />

<link href="css/style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.style5 {font-size: 16px}
.style7 {
	color: #000000;
	font-family: Georgia, "Times New Roman", Times, serif;
}
-->
</style>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div align="center">
  <table width="627" height="69" border="1" align="center" bgcolor="#666666" class="style5">
    <tr>
      <td>
        <span class="style7">
    <?php 
	
	mysql_connect("localhost", "root", "") 
	or die("Connection Failed");
	 mysql_select_db("cars")or die("Connection Failed"); 
	$email = $_POST['email']; 
	$pass = $_POST['pass']; 
	$query = "UPDATE registration SET pass = '".md5($_POST['pass'])."' WHERE email = '$email'"; 
	if(mysql_query($query))
	
	{ echo "PASSWORD HAS BEEN UPDATED <a href='reset.php'>>>>GO BACK<<<</a>";
	
	} else
	
	{ echo "Update fail <a href='reset.php'>>>>GO BACK<<<</a>";
	
	}
	 ?></span>
    </tr>
  </table>
</div>