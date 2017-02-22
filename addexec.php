<title>BEAUTY-WISE SALON</title><?php
include('config.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"cars/" . $_FILES["image"]["name"]);
			
			$location="cars/" . $_FILES["image"]["name"];
			$name=$_POST['name'];
			$price=$_POST['price'];
			$description=$_POST['description'];
			
			$save=mysql_query("INSERT INTO sales (location,name,price,description) VALUES ('$location','$name','$price','$description')");
			header("location: upload.php");
			exit();					
	}
?>
