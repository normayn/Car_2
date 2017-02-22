<?php
session_start();

if ($_SESSION['username'])
?>
<!DOCTYPE html>
<?php

$connect = mysql_connect("localhost", "root", "");

mysql_select_db("cars");

$quey1="select * from reviews";

$result=mysql_query($quey1) or die(mysql_error());
?>
<html lang="en">
<head>
  <title>MENDLEY MOTORS</title>
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
.style27 {
	font-size: 12px;
	color: #FFFFFF;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style13 {color: #FFFFFF; font-size: 16px; font-family: Georgia, "Times New Roman", Times, serif; }
.style29 {
	color: #FF3300;
	font-size: 16px;
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
            <li><a href="search.php">Search vehicle</a></li>
			<li><a href="news.php">News Updates</a></li>
			<li><a href="inquiries.php">Customer Inquiries</a></li>
			<li><a href="sale.php">Sale Vehicle</a></li>
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
           	    <p class="style5 style8">Update motor riviews </p>
           	    <table width="626" border="1">
                  <tr>
                    <td width="345"><span class="style29"><?php echo "User ID: ".$_SESSION['username']."";?></span></td>
                    <td width="206"><div align="right">
                      <p><a href="login.html" class="heading2">
                        <input type="button" value="LOGOUT" class="current" />
                        </a></p>
                     <br>
                    </div></td>
                  </tr>
                </table>
           	  </div>
			    <form action="reviewconn.php" method="post" >
			  <table width="348" height="176" border="0" align="center" class="style21">
                <tr>
                  <td width="73"><div align="right" class="style25">Car Type :</div></td>
                  <td width="264"><div align="left" class="style25"><span class="style13">
                    <select name="name" id="name" class="required" required >
                      <option value="">Select</option>
                      <option value="Toyota">Toyota</option>
                      <option value="Mazda">Mazda</option>
					  <option value="Audi">Audi</option>
					  <option value="Ford">Ford</option>
					  <option value="Hyndai">Hyndai</option>
					  <option value="Hyndai">Hyndai</option>
					  <option value="Mitsubishi">Mitsubishi</option>
					  <option value="Alfa Romeo">Alfa Romeo</option>
					  <option value="Lamboghini">Lamboghini</option>
					  <option value="Ferrari">Ferrari</option>
					  <option value="Other-Specify">Other-Specify</option>
					  
                    </select>
                  </span></div></td>
                </tr>
                <tr>
                  <td><div align="right" class="style43 style22 style24">Review:</div></td>
                  <td><span class="style25">
                    <textarea name="review" cols="40" rows="5"></textarea>
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
			  <hr>
			  <p class="style5 style8">Car Reviews </p>
			  
			    <span class="style27">
		      <?php
while($row=mysql_fetch_array($result)){
echo "<p>";

echo $row['name'];

echo "&nbsp;&nbsp;: &nbsp;";


echo $row['review'];
echo "<br>";
echo "";
}
echo "</p>";

?></span>
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
