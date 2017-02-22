<?php
	include("includes/db.php");
	include("includes/functions.php");
	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MENDLEY MOTORS</title>
  <script language="javascript">
	function validate(){
		var f=document.form1;
		if(f.name.value==''){
			alert('Your name is required');
			f.name.focus();
			return false;
		}
		f.command.value='update';
		f.submit();
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
.style7 {font-weight: bold; font-family: Georgia, "Times New Roman", Times, serif; font-style: italic; }
.style8 {
	color: #C93300;
	font-size: 18px;
}
.style9 {color: #FFFFFF}
.style10 {font-size: 16px}
.style12 {font-family: Georgia, "Times New Roman", Times, serif}
.style13 {color: #FFFFFF; font-size: 16px; font-family: Georgia, "Times New Roman", Times, serif; }
.style14 {font-size: 16px; font-family: Georgia, "Times New Roman", Times, serif; }
.style15 {color: #FF3300}
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
      	    <li><a href="index.html" class="current">Home</a>/</li>
      	      <li><a href="gallery.php">Motor Gallery</a>/</li>
      	      <li><a href="index-2.html">Services</a>/</li>
      	      <li><a href="index-3.html">Contact Us</a>/</li>
      	      <li><a href="index-4.html">Car  Reviews</a>/</li>
      	      <li><a href="index-5.html">About Us</a></li>
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
           	    <p align="left" class="style5 style8">BILLING INFORMATION</p>
           	    <table width="281" border="1" align="center">
                  <tr>
                    <td><span class="style15">Bank details </span></td>
                    <td><span class="style15">Co-op Bank #3346666</span></td>
                  </tr>
                  <tr>
                    <td><span class="style15">Mpesa</span></td>
                    <td><span class="style15">34554</span></td>
                  </tr>
                  <tr>
                    <td><span class="style15">Airtel</span></td>
                    <td><span class="style15">56674</span></td>
                  </tr>
                  <tr>
                    <td><span class="style15">YU Cash </span></td>
                    <td><span class="style15">466674</span></td>
                  </tr>
                </table>
           	    <p>&nbsp;</p>
           	  </div>
			   
			  <form action="billingconn.php"method="post" name="loginform" onSubmit="MM_validateForm('fname','','R','lname','','R','studentID','','R','pass','','R');return document.MM_returnValue">
					 <table width="486" height="286" border="0" align="center">
        
        <tr>
          <td><div align="right" class="style9 style10 style12"><strong>Order total</strong> : </div></td>
          <td><span class="style7 style9 style10 style12" onfocus="MM_validateForm('fnames','','R','mobile','','RisNum','employer','','R','duties','','R','pass','','R');return document.MM_returnValue">
            <label for="label"></label>
            <input type="text" name="amount" id="amount" value="<?php echo get_order_total()?>">          
            * </span></td>
        </tr>
		 <tr>
          <td align="left"><div align="right" class="style13">Service   : </div></td>
          <td><span class="style13">
            <label for="label9"></label>
            <select name="service" id="service" class="required" required >
              <option value="">Select</option>
			  <option value="Bank Transfar">Bank Transfar</option>
              <option value="Mpesa">Mpesa</option>
              <option value="Airtel Money">Airtel Money</option>
			  <option value="YU Cash">YU Cash</option>
            </select>            
            *</span></td>
        </tr>
		<tr>
          <td width="245"> <div align="right" class="style13">Confirmation No   / Bank Details: </div></td>
          <td width="231"><span class="style7 style9 style10 style12">
            <label for="textfield"></label>
            <input type="text" name="cnumber"required>          
            *
		  </span></td>
        </tr><tr>
          <td><div align="right" class="style13">Full names   : </div></td>
          <td><span class="style13">
            <label for="labe16"></label>
                        
            <input type="text" name="name" required />            
            *</span></td>
        </tr>
          
       <tr>
          <td align="left"><div align="right" class="style13">Physical Address  : </div></td>
          <td><span class="style13">
            <label for="label9"></label>
            <input type="text" name="address" required />            
            *</span></td>
        </tr>
		 <tr>
          <td align="left"><div align="right" class="style13">Email   : </div></td>
          <td><span class="style13">
            <label for="label9"></label>
            <input type="email" name="email" required />            
            *</span></td>
        </tr>
		
		 <tr>
          <td align="left"><div align="right" class="style13">Mobile No   : </div></td>
          <td><span class="style13">
            <label for="label9"></label>
            <input type="text" name="phone" required/>            
            *</span></td>
        </tr>
		<tr>
          <td align="left"><span class="style12"></span></td>
          <td>
            <span class="style14">
            <input type="submit"name="submit" value="Place Order"/>
            <input type="Reset"name="submit2" value="Clear"/>            
            </span></tr>
      </table>
					 <strong></strong>
			  </form>
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
