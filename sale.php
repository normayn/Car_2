<?php
session_start();

?>
<!DOCTYPE html>
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
.style8 {
	color: #C93300;
	font-size: 18px;
}
.style15 {
	font-size: 14px;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #FF3300;
	font-weight: bold;
}
.style16 {
	color: #FF6600;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style17 {
	font-size: 16px;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
	color: #FF3300;
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
      	<div align="left">
      	  <ul class="style3">
      	     <li><a href="index.html"class="current" >Home</a>/</li>
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
        <h3 align="center">CATEGORIES</h3>
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
           	    <p align="center" class="style5 style8">UPLOAD YOUR CAR FOR SALE </p>
				<br>
				<table width="722" border="1">
                  <tr>
                      <td width="206"><div align="right">
                      <p><a href="login.html" class="heading2">
                        <input type="button" value="LOGOUT" class="current" />
                        </a></p>
                     <br>
                    </div></td>
                  </tr>
                </table>
           	    <p align="center" class="style5 style8">&nbsp;</p>
           	  </div>
			   <style type="text/css">
<!--
.ed{
border-style: ridge;
border-width: thick;
border-color: #FF6600;
padding:2px;
margin-bottom: 10px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style: dashed;
border-width:thin;
border-color:#00CCFF;
padding:10px;
background-color: #FF6600;
height: 30px;
}
#imagelist{
border: ridge;
border-width: thick;
border-color: #FF6600;
float: left;
padding:5px;
width:800;
margin: 10px auto;
}
p{
margin:0;
padding:0;
text-align: center;
font-style: normal;
font-size: 12px;
text-indent: 2;
}
#caption{
margin-top: 10px;
font-size: 10px;
font-family: Georgia, "Times New Roman", Times, serif;
color: #FFFFFF;
background-color: #FF3300;

}
img{
height: 119px;
}
-->
</style>
	<form action="addexec1.php" method="post" enctype="multipart/form-data" name="addroom" onSubmit="MM_validateForm('caption','','R');return document.MM_returnValue">
  <div align="center"><span class="style16">Select Image: </span><br />
    <input type="file" name="image" class="ed">
    <br />
    <span class="style16">Price/Description    </span><br />
    <textarea name="caption" cols="25" rows="3"></textarea>
    <br />
    <input type="submit" name="Submit" value="Upload" id="button1" />
  </div>
</form>

 <div align="center">
          <p align="center"><br />
          <span class="style15">Cars on sale          </span></p>
        </div>
        <div style="border:#bd6f2f solid 1px;padding:4px 6px 2px 6px">
          <p>
            <?php
include('config.php');
$result = mysql_query("SELECT * FROM uploads");
while($row = mysql_fetch_array($result))
{
echo '<div id="imagelist">';
echo '<p><img src="'.$row['location'].'"></p>';
echo '<p id="caption">'.$row['caption'].' </p>';
echo '</div>';
}
?>
          </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <h4>
              <HR></h4>
            </div>
          </div>
          <div align="center">Medleymotors 2014 </div>
        </div>
      </section>
      <!-- aside --><!-- content -->
    </div>
    <!-- footer -->
    <footer></footer>
</div>
</body>
</html>
