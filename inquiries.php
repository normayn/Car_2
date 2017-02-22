<!DOCTYPE html>
<?php
session_start();

?>
<?php

$connect = mysql_connect("localhost", "root", "");

mysql_select_db("cars");

$quey1="select * from reviews";

$result=mysql_query($quey1) or die(mysql_error());
?>
<html lang="en">
<head>
  <title>MEDLEY MOTORS</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <!--[if lt IE 7]>
    <script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
  <![endif]-->
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
  <![endif]-->
  <style type="text/css">
<!--
.style2 {
	color: #000000;
	font-family: "Chiller", Times, serif;
	font-size: 55px;
	font-weight: bold;
}
.style3 {
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style5 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	font-weight: bold;
	font-style: italic;
}
.style8 {color: #C93300}
.style9 {
	color: #FFFFFF;
	font-size: 16px;
	font-style: italic;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style16 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
}
.style19 {color: #333333}
.style20 {color: #666666}
.style21 {	color: #000000;
	font-size: 16;
}
.style22 {color: #FFFFFF}
.style24 {
	font-size: 14px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style25 {color: #FFFFFF; font-size: 14px; font-family: Georgia, "Times New Roman", Times, serif; }
.style13 {color: #FFFFFF; font-size: 16px; font-family: Georgia, "Times New Roman", Times, serif; }
.style28 {
	font-size: 16px;
	color: #FF3300;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
-->
  </style>
</head>

<body>
  <div id="main">
  	<div align="right">
  	  <!-- header -->
    </div>
  	<header>
      <nav>
      	<div align="right">
      	  <ul class="style3">
      	   <li><a href="index.html" >Home</a>/</li>
      	      <li><a href="gallery.php">Motor Gallery</a>/</li>
      	      <li><a href="reviews.php"class="current">Car Reviews </a>/</li>
      	      <li><a href="services.html">Services</a>/</li>
      	      <li><a href="contacts.html">Contact Us </a>/</li>
      	      <li><a href="about.html">About Us</a></li>
   	      </ul>
   	    </div>
      </nav>
      <p align="right" class="style2">&nbsp;</p>
      <p align="left" class="style2">MEDLEY MOTORS </p>
    </header>
   
    <div align="left"><img src="images/p1.jpg" alt="sf" width="445" height="224">    <img src="images/auto-repair-website-design.png" alt="asf" width="438" height="228"></div>
    <div class="wrapper">
      <!-- aside -->
      <aside id="leftSidebar">
        <h3 align="center">CaTEGORIES</h3>
        <div class="indent">
        	<ul class="p3">
            <li><a href="search.php" style="color: #000000">Search vehicle</a></li>
			<li><a href="news.php" style="color: #000000">News Updates</a></li>
			<li><a href="inquiries.php" style="color: #000000">Customer Inquiries</a></li>
			<li><a href="sale.php" style="color: #000000">Sale Vehicle</a></li>
          </ul>
            <p><img src="images/banner3.jpg" alt="df" width="155" height="101"></p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
      </aside>
      <!-- content -->
      <section id="content">
        <div class="inside">
          <div class="box">
          	<div class="inner1">
           	  <div class="wrapper-ie">
           	    <p align="center" class="style5 style8">Update motor riviews </p>
				<table width="626" border="1">
                  <tr>
                      <td width="206"><div align="right">
                      <p><a href="login.html" class="heading2">
                        <input type="button" value="LOGOUT" class="current" />
                        </a></p>
                     <br>
                    </div></td>
                  </tr>
                </table>
       	      </div>
		      <form action="inqconn.php" method="post" >
			  <table width="410" height="176" border="0" align="center" class="style21">
                <tr>
                  <td width="110"><div align="right" class="style25">Full names :</div></td>
                  <td width="290"><div align="left" class="style25"><span class="style13">
                    <input type="text" name="fname"required>
                  </span></div></td>
                </tr>
				 <tr>
                  <td width="110"><div align="right" class="style25">Mobile No:</div></td>
                  <td width="290"><div align="left" class="style25"><span class="style13">
                    <input type="text" name="phone"required>
                  </span></div></td>
                </tr>
				 <tr>
                  <td width="110"><div align="right" class="style25">Company  :</div></td>
                  <td width="290"><div align="left" class="style25"><span class="style13">
                    <input type="text" name="company"required>
                  </span></div></td>
                </tr>
				<tr>
                  <td width="110"><div align="right" class="style25">Email  :</div></td>
                  <td width="290"><div align="left" class="style25"><span class="style13">
                    <input type="email" name="email"required>
                  </span></div></td>
                </tr>
                <tr>
                  <td><div align="right" class="style43 style22 style24">Description:</div></td>
                  <td><span class="style25">
                    <textarea name="description" cols="40" rows="5"></textarea>
                  </span></td>
                </tr>
                <tr>
                  <td><div align="right"></div></td>
                  <td><div align="left">
                      <p>
                        <input name="Submit" type="submit" class="narrow_field"  value="Submit"/>
                        <input name="Reset" type="reset" class="narrow_field" value="Reset"/>
                      </p>
                  </div></td>
                </tr>
              </table>
			  <p class="style9">&nbsp;</p>
			  <hr>
		      </form>			  
			    </p>
		    </div>
          </div>
		  
          <div align="center">Medleymotors 2014 <a href="Adminlogin.html" title="" target="_blank" class="first style16 style20 style19"></a></div>
        </div>
      </section>
      <!-- aside --><!-- content -->
    </div>
    <!-- footer -->
    <footer></footer>
</div>
</body>
</html>
