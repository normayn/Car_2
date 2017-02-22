<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php

$connect = mysql_connect("localhost", "root", "");

mysql_select_db("cars");

$quey1="select * from sales";

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
	    <input type="button" value="LOGOUT" class="style5" />
	    </a></div>
	</div>
	  <p align="center">&nbsp;</p>
  </div>
  <div id="templatemo_section_1_1">
    <div id="header">
      <div align="center" class="style5">
          <p align="center" class="style1 style6"><span class="style5"><a href="upload.php" class="style">Upload Car </a>|<span class="style6"><a href="users.php" class="style6"> Users  </a>|<a href="orders.php" class="style6"> Orders </a>|<a href="reset.php" class="style6">Reset passwords</a>|<a href="viewinquiries.php" class="style6">View Inquiries</a></span></span>|<a href="viewreviews.php" class="style6">Motor  Reviews </a>|<a href="onsale.php" class="style6">On Sale</a>|<a href="report.php" target="_blank" class="style6">Report</a>|<a href="level.php" target="_blank" class="style6">Inventory</a></p>
	  
	     <div style="border:#bd6f2f solid 1px;padding:4px 6px 2px 6px">
	    <div id="container">
		
	      <form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="MM_validateForm('brnu','','R');MM_validateForm('caption','','R');return document.MM_returnValue">
            <div align="center"><br />
              <table width="902" border="1" bordercolor="#333333" bgcolor="#333333">
                <tr align="right">
                  <td width="211"><div align="center" class="style7">Select Image: </div></td>
				</tr>
				<tr align="right">
                  <td width="675"><input name="image" type="file" class="ed style6" /></td>
				<tr align="right"> 
				  <td width="675"><input name="image2" type="file" class="ed style6" /></td>
				</tr>
				<tr align="right">
				  <td width="675"><input name="image3" type="file" class="ed style6" /></td>
				</tr>
				<tr align="right">
				  <td width="675"><input name="image4" type="file" class="ed style6" /></td>
                </tr>
				<tr align="right">
				  <td width="675"><input name="image5" type="file" class="ed style6" /></td>
                </tr>
				<tr>
                  <td height="27"><div align="center" class="style7">Car Name:</div></td>
				  <td><input name="name" type="text"  maxlength="20" required="required" /></td>
                  
                </tr>
				<tr>
                  <td height="27"><div align="center" class="style7">Price:</div></td>
                  <td><input name="price" type="text"  maxlength="20" required="required" /></td>
                </tr>
                <tr>
                  <td><div align="center" class="style7">Description: </div></td>
                  <td><span class="style6">
                    <textarea name="description" cols="25" rows="3"></textarea>
                  </span></td>
                </tr>
                
                
				<tr>
                  <td><div align="right"><span class="7"></span></div></td>
                  <td><input name="Submit" type="submit" class="style5" id="button1" value="Upload" /></td>
				</tr>
              </table>
              <table width="907" height="70" border="1" align="center" bordercolor="#333333" bgcolor="#333333" class="style7" >
  <caption>&nbsp;
  </caption>
  
  <tr>
    <th width="279" bgcolor="#333333"><div align="left" class="style8 style7">Car  Image </div></th>
    <th width="349" bgcolor="#333333"><div align="left" class="style8 style7">Car Name </div></th>
	<th width="279" bgcolor="#333333"><div align="left" class="style8 style7">Price</div></th>
    <th width="349" bgcolor="#333333"><div align="left" class="style8 style7">Description</div></th>
	</tr>
  <?php
while($row=mysql_fetch_array($result)){
echo "<tr><td>";

echo $row['location'];

echo "</td><td>";

echo $row['name'];

echo "</td><td>";

echo $row['price'];

echo "</td><td>";

echo $row['description'];

echo "</td>";
echo '<td><a href="delete.php? name='.$row['name'].'">Delete</a></td>';
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