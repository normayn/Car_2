<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php

$connect = mysql_connect("localhost", "root", "");

mysql_select_db("cars");

$quey1="select * from inquiries";

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
.style1 {
	color: #FFFFFF;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
.style5 {font-size: 16px}
.style6 {color: #000000}
.style7 {color: #FFFFFF}
.style16 {color: #FFFFFF}
-->
</style>
</head>
<body>
<div id="templatemo_container">
<div id="templatemo_top_panel">
  <div align="center">
    <p>
      <!-- end of header section -->
      <!-- end of menu login section -->
    </p>
    <table width="197" height="120" border="0" align="center">
    <tr>
      <td><img src="images/coollogo_com-250804822.png" alt="asf" width="528" height="145" /></td>
    </tr>
  </table></p>
  </div>
</div> 
<!-- end of top panel -->
<div id="templatemo_content_panel_1">
  <div align="center">
    <!-- end of news section --></div>
	<div align="left" class="style8">
	  <div align="center"><a href="Adminlogin.html" class="heading2">
	    <input type="button" value="LOGOUT" class="body_txt" />
	    </a></div>
	</div>
	  <p align="center">&nbsp;</p>
  </div>
  <div id="templatemo_section_1_1">
    <div id="header">
      <div align="center" class="style5">
         <p align="center" class="style1 style6"><span class="style5"><a href="upload.php" class="style6">Upload Car </a>|<span class="style6"><a href="users.php" class="style6"> Users  </a>|<a href="orders.php" class="style6"> Orders </a>|<a href="reset.php" class="style6">Reset passwords</a>|<a href="viewinquiries.php" class="style6">View Inquiries</a></span></span>|<a href="viewreviews.php" class="style6">Motor  Reviews </a>|<a href="onsale.php" class="style6">On Sale</a>|<a href="report.php" target="_blank" class="style6">Report</a>|<a href="level.php" target="_blank" class="style6">Inventory</a></p>
	  
	    <div style="border:#bd6f2f solid 1px;padding:4px 6px 2px 6px">
	    <div id="container">
              <table width="885" height="70" border="1" align="center" bordercolor="#333333" bgcolor="#333333" class="style6" >
  <caption>&nbsp;
  </caption>
  
  <tr>
    <th width="142" bgcolor="#333333"><div align="left" class="style8 style16">Name</div></th>
    <th width="167" bgcolor="#333333"><div align="left" class="style8 style16>phone</div></th>
	<th width="157" bgcolor="#333333"><div align="left" class="style8 style16">company</div></th>
	<th width="118" bgcolor="#333333"><div align="left" class="style8 style16">email</div></th>
    <th width="267" bgcolor="#333333"><div align="left" class="style8 style16">Description</div></th>
	<th width="267" bgcolor="#333333"><div align="left" class="style8 style16">Action</div></th>
	</tr>
  <?php
while($row=mysql_fetch_array($result)){
echo "<tr><td>";

echo $row ['fname'];

echo "</td><td>";

echo $row['phone'];

echo "</td><td>";

echo $row['company'];

echo "</td><td>";


echo $row['email'];

echo "</td><td>";

echo $row['description'];

echo "</td>";
echo '<td><a href="delete3.php? fname='.$row['fname'].'">Delete</a></td>';
echo"</td>";

echo "</tr></td>";
		
}
 echo "</table>";

?>
</table>
			  
			  <br />
			  
                <br />
                <br />
              </p>
          </div>
	      </form>
	  
	  
	  
	  
	  </div>
    
      </div>
	  </div>
    <!-- end of section 1 -->
    <div class="cleaner_with_height">&nbsp;</div>
</div>

<!-- end of content panel 2 -->
<!-- end of content panel 3 -->
<div id="templatemo_footer_panel">
    <div align="center" class="style18"></div>
</div>
</div> <!-- end of container -->
<div align=center></div>
</body>
</html>