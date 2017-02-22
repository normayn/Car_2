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
.style2 {
	color: #000000;
	font-family: "Chiller", Times, serif;
	font-size: 55px;
	font-weight: bold;
.style5 {font-size: 16px}
.style6 {
	color: #FFFFFF;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style8 {font-size: 24px}
.style10 {
	font-size: 36px;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #FFFFFF;
}
.style11 {
	color: #FFFFFF;
	font-size: 18px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style12 {color: #FFFFFF}
.style15 {font-size: 14px}
.style16 {color: #FFFFFF; font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; }
.style17 {color: #999999}
.style18 {color: #FFFFFF; font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; }
.style19 {
	color: #000000;
	font-family: Georgia, "Times New Roman", Times, serif;
}
-->
</style>
</head>
<body>
<div id="templatemo_container">
<div id="templatemo_top_panel">
  <div align="left">
    <p>
      <!-- end of header section -->
      <!-- end of menu login section -->
    </p>
    </p>
    <span class="style2">MEDLEY MOTORS REPORT</span></div>
</div> 
<!-- end of top panel -->
<div id="templatemo_content_panel_1">
  <div align="center">
    <!-- end of news section --></div>
	<div align="left" class="style8">
	  <div align="center"><a href="Adminlogin.html" class="heading2"></a></div>
	</div>
	  <p align="center" class="style11"><a href="javascript: void(0);" class="style15" id=print onclick="window.print();"><img src="images/print-button.png" alt="DRGR" width="89" height="71" /></a></p>
  </div>
  <div id="templatemo_section_1_1">
    <div id="header">
      <div align="center" class="style5">
        <div style="border:#bd6f2f solid 1px;padding:4px 6px 2px 6px">
	    <div id="container">
	      <p><span class="style18">ORDERS</span></p>
		  <?php

$connect = mysql_connect("localhost", "root", "");

mysql_select_db("cars");

$quey1="select * from orders";

$result=mysql_query($quey1) or die(mysql_error());
?>
	      <table width="1008" height="70" border="1" align="center" bordercolor="#333333" bgcolor="#333333" class="style12" >
            <caption>&nbsp;
            </caption>
	        <tr>
              <th width="190" bgcolor="#333333"><div align="left" class="style18 style15">ID</div></th>
	          <th width="227" bgcolor="#333333"><div align="left" class="style18 style15">Amount</div></th>
	          <th width="227" bgcolor="#333333"><div align="left" class="style18 style15">Service</div></th>
	          <th width="222" bgcolor="#333333"><div align="left" class="style18 style15">Confirmation No.</div></th>
	          <th width="252" bgcolor="#333333"><div align="left" class="style18 style15">Full Names</div></th>
	          <th width="252" bgcolor="#333333"><div align="left" class="style18 style15">Physical Address</div></th>
	          <th width="252" bgcolor="#333333"><div align="left" class="style18 style15">Email</div></th>
	          <th width="252" bgcolor="#333333"><div align="left" class="style18 style15">Phone Number </div></th>
	          </tr>
            <?php
while($row=mysql_fetch_array($result)){
echo "<tr><td>";

echo $row['id'];

echo "</td><td>";

echo $row['amount'];

echo "</td><td>";

echo $row['service'];

echo "</td><td>";


echo $row['cnumber'];

echo "</td><td>";

echo $row['name'];

echo "</td><td>";

echo $row['address'];

echo "</td><td>";

echo $row['email'];

echo "</td><td>";

echo $row['phone'];

echo "</tr></td>";
		
}
 echo "</table>";

?>
          </table>
	      <p class="style16">REVIEWS</p>
	      <p class="style16">
	        <?php

$connect = mysql_connect("localhost", "root", "");

mysql_select_db("cars");

$quey1="select * from reviews";

$result=mysql_query($quey1) or die(mysql_error());
?>
	        </p>
	      <table width="999" height="70" border="1" align="center" bordercolor="#333333" bgcolor="#333333" class="style12" >
            <caption>&nbsp;
            </caption>
	        <tr>
              <th width="149" bgcolor="#333333"><div align="left" class="style6 style15">Car Type</div></th>
	          <th width="253" bgcolor="#333333"><div align="left" class="style6 style15">Review</div></th>
	          <th width="565" bgcolor="#333333"><div align="left" class="style6 style15">Action</div></th>
	          </tr>
            <?php
while($row=mysql_fetch_array($result)){
echo "<tr><td>";

echo $row['name'];

echo "</td><td>";

echo $row['review'];

echo "</td>";
echo '<td><a href="delete4.php? name='.$row['name'].'">Delete</a></td>';
echo"</td>";

echo "</tr></td>";
		
}
 echo "</table>";

?>
          </table>
	      <p class="style16">INQUIRIES</p>
	      <p>
	        <?php

$connect = mysql_connect("localhost", "root", "");

mysql_select_db("cars");

$quey1="select * from inquiries";

$result=mysql_query($quey1) or die(mysql_error());
?>
	        </p>
	      <table width="999" height="70" border="1" align="center" bordercolor="#333333" bgcolor="#333333" class="style12" >
            <caption>&nbsp;
            </caption>
	        <tr>
              <th width="142" bgcolor="#333333"><div align="left" class="style6 style15">Name</div></th>
	          <th width="167" bgcolor="#333333"><div align="left" class="style6 style15">phone</div></th>
	          <th width="157" bgcolor="#333333"><div align="left" class="style6 style15">company</div></th>
	          <th width="118" bgcolor="#333333"><div align="left" class="style6 style15">email</div></th>
	          <th width="267" bgcolor="#333333"><div align="left" class="style6 style15">Description</div></th>
	          <th width="267" bgcolor="#333333"><div align="left" class="style6 style15">Action</div></th>
	          </tr>
            <?php
while($row=mysql_fetch_array($result)){
echo "<tr><td>";

echo $row['fname'];

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
	      <p></p>
	    </p>
	      </div>
	      </div>
    
      </div>
    </div>
    <!-- end of section 1 -->
    <div class="cleaner_with_height">&nbsp;
      <div align="center"><span class="style17">mendleymotorskenya 2014
        </form>
        </span></div>
    </div>
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