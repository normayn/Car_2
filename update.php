<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php

$connect = mysql_connect("localhost", "root", "");

mysql_select_db("cars");

$quey1="select * from orders";

$result=mysql_query($quey1) or die(mysql_error());
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ADMININSTRATOR</title>
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
.style6 {color: #FFFFFF}
.style7 {font-size: 16px; color: #000000; }
.style8 {color: #000000}
.style9 {font-family: Georgia, "Times New Roman", Times, serif}
.style10 {color: #000000; font-family: Georgia, "Times New Roman", Times, serif; }
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
	      <p>&nbsp;</p>
<form id="loginForm" name="loginForm" method="post" action="send.php" onsubmit="MM_validateForm('e_mail','','RisEmail','pass','','R');return document.MM_returnValue">
          <div align="center">
            <table width="575" height="138" border="1" align="center" cellpadding="0" cellspacing="0"   bordercolor="#FF3300" bgcolor="#999999" onfocus="MM_validateForm('nid','','RisNum','pass','','R');return document.MM_returnValue">
	<tr>
		<td colspan="2" bgcolor="#FF6600" style="text-align:center;"><span class="style5 style18 style8 style9">*Required fields</span></td>
	</tr>
    <tr>
      <td width="297"><div align="center" class="style7 style9">
        <div align="right" class="style12">
          <div align="right">Email: </div>
        </div>
      </div></td>
      <td width="393"><span class="style4 style8 style9">
        <input type="text" required="required" name="email" maxlength="20" />
        <span class="style11 style23  style5"><strong>*</strong></span>      </span></td>
    </tr>
    <tr>
      <td><div align="right" class="style10"><span class="style4 style3 style13">New Password:</span></div></td>
      <td><span class="style4 style8 style9">
          <input type="password" required="required" name="pass" maxlength="20" />
          <span class="style11 style23  style5">*          </span></span></td>
    </tr>
    <tr>
      <td><span class="style4"></span></td>
      <td><span class="style4">
        <input name="Submit" type="submit" class="narrow_field"  value="Update"/>
		<input name="Reset" type="reset" class="narrow_field" value="Clear"/>
        &nbsp;</span></td>
    </tr>
	<tr><td>&nbsp;</td>
	</tr>
  </table>
            <p><br />
              <!-- end of section 1 -->
              </p>
						</td>
                        </tr>
                        </td>
                  </tr>
	    </p>
            </div>
	      </form>
	      </div>
	  </div>
	</div>
              <p>
              
              <br />
                <br />
                <!-- end of section 1 -->
    </p>
    </div>
	      </div>
    
      <div class="cleaner_with_height">&nbsp;</div>
</div>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  </p>
	      <p><br />
	        
	        <br />
	        <br />
	          </p>
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