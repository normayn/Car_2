<?php
	include("includes/db.php");
	include("includes/functions.php");
	
	if(isset($_REQUEST['command']) && $_REQUEST['command']=='add' && $_REQUEST['productid']>0){
		$pid=$_REQUEST['productid'];
		addtocart($pid,1);
		header("location:cart.php");
		exit();
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<?php

$connect = mysql_connect("localhost", "root", "");

mysql_select_db("cars");

$quey1="select * from sales";

$result=mysql_query($quey1) or die(mysql_error());
?>

<head>
  <title>MEDLEY MOTORS</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
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
.style9 {color: #FFFFFF}
.style10 {font-weight: bold; font-family: Georgia, "Times New Roman", Times, serif; color: #FFFFFF; }
.style11 {font-size: 12px}
.style13 {
	color: #FF3300;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
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
      	      <li><a href="gallery.php"class="current">Motor Gallery</a>/</li>
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
           	    <p class="style5 style8">HOT CARS ON SALE</p>
           	    <table width="626" border="1">
                  <tr>
                    <td width="206"><div align="right"><a href="login.html" class="heading2">
                    <input type="button" value="LOGOUT" class="current" />
                    </a></div></td>
                  </tr>
                </table>
           	    <p class="style5 style8">&nbsp;</p>
           	  </div>
			   
			  </h4></p>
                    
<div style="border:#d35584 solid 1px;padding:4px 6px 2px 6px">
    <form name="form1">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>
<div align="center">
  <p>&nbsp;</p>
  <table width="422" border="0" cellpadding="2px" class="style3">
		<?php
			$result=mysql_query("select * from sales") or die("select * from sales"."<br/><br/>".mysql_error());
			while($row=mysql_fetch_array($result)){
		?>
		<style type="text/css">
.vertical { background-color: yellow; }
.horizontal { display: inline; background-color: aqua; }
</style>
<ul>
<li class="horizontal">
    	<tr>
        	<td width="173"><p align="left"><span class="style1"><img src="<?php echo $row['location']?>" width="338" height="177"413"></span></p>
        	  <div align="center" class="style3">
        	    <div align="left"><span class="style9"><?php echo $row['name']?><br>           		           	      
        	      <?php echo $row['description']?><br>         	    
        	      Price: <span style="color: #FF3300"><big style="color:orange">KSH<?php echo $row['price']?></big></span></span><span class="style10"><br>
        	      <span class="style11">
        	      <input name="button" type="button" class="style5" onClick="addtocart(<?php echo $row['id']?>)" value="BUY" />
        	      </span>
        	      </span></div>
        	  </div>
        	  </td>
		</tr>
        <tr><td colspan="2"><hr size="2" /></td>
        <?php } ?>

    </table>
					
			  </p>
 
              <h4>
                </p>
              </h4>
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
