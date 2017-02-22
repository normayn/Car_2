<?php
error_reporting(E_ERROR | E_PARSE);
	include("includes/db.php");
	include("includes/functions.php");
	
	if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
		remove_product($_REQUEST['pid']);
	}
	else if($_REQUEST['command']=='clear'){
		unset($_SESSION['cart']);
	}
	else if($_REQUEST['command']=='update'){
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=intval($_REQUEST['product'.$pid]);
			if($q>0 && $q<=999){
				$_SESSION['cart'][$i]['qty']=$q;
			}
			else{
				$msg='Some proudcts not updated!, quantity must be a number between 1 and 999';
			}
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MENDLEY MOTORS</title>
  <script language="javascript">
	function del(pid){
		if(confirm('Do you really mean to delete this item')){
			document.form1.pid.value=pid;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
	function clear_cart(){
		if(confirm('This will empty your shopping cart, continue?')){
			document.form1.command.value='clear';
			document.form1.submit();
		}
	}
	function update_cart(){
		document.form1.command.value='update';
		document.form1.submit();
	}


</script>
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
	color: #FFFFFF;
	font-family: "Times New Roman", Times, serif;
	font-size: 36px;
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
.style30 {font-weight: bold; font-family: Georgia, "Times New Roman", Times, serif; color: #000000; }
.style34 {color: #FF3300; font-size: 12px; font-weight: bold; }
.style36 {color: #000000; font-size: 12px; }
.style38 {font-family: Georgia, "Times New Roman", Times, serif; font-size: 16px; font-weight: bold; font-style: italic; color: #000000; }
.style40 {color: #000000; font-size: 12px; font-weight: bold; }
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
      	      <li><a href="reviews.php">Car Reviews </a>/</li>
      	      <li><a href="services.html">Services</a>/</li>
      	      <li><a href="contacts.html">Contact Us</a>/</li>
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
			<li><a href="login.html">Login</a></li>
          	<li><a href="registration.html">Registration</a></li>
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
           	    <p class="style5 style8">YOUR CAR(S) </p>
       	      </div>
			   
			 
<h4>
                </p>
              </h4>
             
              <form name="form1" method="post">
<input type="hidden" name="pid" />
<input type="hidden" name="command" />
	<div style="margin:0px auto; width:600px;" >
      <div style="padding-bottom:10px">

              <div align="left">
                <input type="button" class="style5" onClick="window.location='gallery.php'" value="Continue Shopping" />
                </div>
      </div><div style="color:#F00"></div>
    	<table width="100%" border="0" cellpadding="5px" cellspacing="1px" bordercolor="#FF0000" bgcolor="#FF6600" class="style3" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#E1E1E1">
    	<?php
			if(is_array($_SESSION['cart'])){
            	echo '<tr bgcolor="#D35584" style="font-weight:bold"><td>ID</td><td>Name</td><td>Price</td><td>Qty</td><td>Amount</td><td>Options</td></tr>';
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
					$pname=get_product_name($pid);
					if($q==0) continue;
			?>
            		<tr bgcolor="#FFFFFF">
            		  <td width="23%" bordercolor="#FF3300" bgcolor="#CCCCCC" class="style8"><span class="style40"><?php echo $i+1?></span></td>
            		<td width="15%" bordercolor="#FF3300" bgcolor="#CCCCCC" class="style3"><span class="style30"><?php echo $pname?></span></td>
                    <td width="17%" bordercolor="#FF3300" bgcolor="#CCCCCC" class="style3"><span class="style40">KSH <?php echo get_price($pid)?></span></td>
                    <td width="8%" bordercolor="#FF3300" bgcolor="#CCCCCC" class="style3"><input name="product<?php echo $pid?>" type="text" class="style3" value="<?php echo $q?>" size="2" maxlength="3" /></td>                    
                    <td width="17%" bordercolor="#FF3300" bgcolor="#CCCCCC" class="style3"><span class="style40">KSH  <?php echo get_price($pid)*$q?></span></td>
                    <td width="20%" bordercolor="#FF3300" bgcolor="#CCCCCC" class="style3"><a href="javascript:del(<?php echo $pid?>)" class="style40">Remove</a></td>
            		</tr>
            <?php					
				}
			?>
				<tr><td bordercolor="#FF9900" bgcolor="#CCCCCC"><span class="style36">Order Total: KSH<?php echo get_order_total()?></span></td>
				<td colspan="5" align="right" bordercolor="#FF3300" bgcolor="#CCCCCC"><span class="style34">
				  <input type="button" class="style3" onClick="clear_cart()" value="Clear Cart">
				  <input type="button" class="style3" onClick="update_cart()" value="Update Cart">
				  <input type="button" class="style3" onClick="window.location='billing.php'" value="Place Order">
				</span></td>
				</tr>
			<?php
            }
			else{
				echo "<tr bgColor='#FFFFFF'><td>There are no items in your shopping cart!</td>";
			}
		?>
        </table>
    </div>
</form>
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
