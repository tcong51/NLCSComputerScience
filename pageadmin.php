<!DOCTYPE HTML>
<?php
	session_start();
?>
<html>
<head>
<title>ADMIN</title>
<style>
</style>
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header start here-->
<div class="header">
		<div class="header-main">
		       <h1>ADMIN PAGE </h1>
               <?php 
	if(isset($_SESSION['tendangnhap'])){
			$tendangnhap = $_SESSION['tendangnhap'];
		}
	else{
		header("location:loginadmin.html");
    }
    ?>
    <div class="btn">
    <button style="height:50px;width:200px" onclick="window.location.href='add_trees.php'">THÊM CÂY</button><p></br></p> <button style="height:50px;width:200px"  onclick="window.location.href='ds_trees.php'">DANH SÁCH CÂY</button>
    </div>

    
    
</div>
<!--header end here-->
<div class="copyright">
	<p>© 2020 Admin Login Form.</p>
</div>
<!--footer end here-->
</body>
</html>