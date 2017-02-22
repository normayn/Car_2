<?php
session_start();


?>
<?php

$connect = mysql_connect("localhost", "root", "");

mysql_select_db("cars");

$quey1="select * from sales";

$result=mysql_query($quey1) or die(mysql_error());
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
	font-style: underline;
}
.style8 {
	color: #C93300;
	font-size: 18px;
}
.style10 {font-weight: bold; font-family: Georgia, "Times New Roman", Times, serif; color: #FFFFFF; }
.style14 {font-weight: bold; font-family: Georgia, "Times New Roman", Times, serif; color: #BA2A01; }
.style16 {font-weight: bold; font-family: Georgia, "Times New Roman", Times, serif; color: #FF3300; font-size: 16px; }
.style17{
	color: #FFFFFF;;
	font-size: 18px;
}
-->
  </style>
  <script language="javascript">
	function addtocart(pid){
		document.form1.productid.value=pid;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>
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
      	      <li><a href="reviews.php">Car Reviews </a>/</li>
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
           	    <p align="center" class="style5 style17">SEARCH BY CAR TYPE </p>
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
			  <form name="form1">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>
			   
			  </h4>
			  <form action = "" method = "GET">
			<select name="name">
                        <?php 
					$get=mysql_query("select * from sales");
					while($a=mysql_fetch_array($get))
					{
					$id=$a['id'];
					$name =$a['name'];
					print"<option>$name</option>";
					}
				?>
              </select>
                      <input name="submit" type =  "submit" class="narrow_field " value = "search"/>
                      <table width="628" height="53" border="1" align="left" bordercolor="#FF3300" bgcolor="#FC5523" class="style10">
<tr>
<th width="127" bgcolor="#C52C00"><div align="right" class="style14">
  <div align="left">Name</div>
</div></th>
<th width="130" bgcolor="#C52C00"><div align="right" class="style14">
  <div align="left">Price</div>
</div></th>
<th width="137" bgcolor="#C52C00"><div align="right" class="style14">
  <div align="left">Description</div>
</div></th>
<th width="206" bgcolor="#C52C00"><div align="right" class="style14">
  <div align="left">Action</div>
</div></th>
<th width="127" bgcolor="#C52C00"><div align="right" class="style14">
  <div align="left">View Photos</div>
</div></th>


	<?php
if($_GET){
    $name = $_GET['name'];
	$connect = mysql_connect("localhost","root","");
	if($connect){
	    mysql_select_db("cars",$connect);
		$query = "SELECT * FROM sales WHERE name='" . $name . "'"; 
		$results = mysql_query($query);
		while($row = mysql_fetch_array($results)){
		       echo "<tr><td>";
			
			   
			    echo $row['name'] ;
				
			    echo "</td><td>";
			   
			   echo $row['price'];
			   
			   echo "</td><td>";
			   
			   echo $row['description'];
			   
			   echo "</td>";
               echo '<td><a href="billing1.php?"><font color="#FFFFFF">PURCHASE</font></a></td>';
               echo"</td>";
			   
			   echo "</tr></td>";
		
			   }
			   
			   echo "</table>";
	} else 
	
	{
          die("Database not found" . mysql_error() ); 
	}
}

?>
</table>
</form>

</style>
</head>
<body>

<div class="img">
  <a target="_blank" href="klematis_big.htm">
    <img src="klematis_small.jpg" alt="Klematis" width="110" height="90">
  </a>
  <div class="desc">Front</div>
</div>
<div class="img">
  <a target="_blank" href="klematis2_big.htm">
    <img src="klematis2_small.jpg" alt="Klematis" width="110" height="90">
  </a>
  <div class="desc">Back</div>
</div>
<div class="img">
  <a target="_blank" href="klematis3_big.htm">
    <img src="klematis3_small.jpg" alt="Klematis" width="110" height="90">
  </a>
  <div class="desc">Left</div>
</div>
<div class="img">
  <a target="_blank" href="klematis4_big.htm">
    <img src="klematis4_small.jpg" alt="Klematis" width="110" height="90">
  </a>
  <div class="desc">Right</div>
</div>
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
