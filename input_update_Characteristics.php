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
               <hr>
               <?php 
	if(isset($_SESSION['tendangnhap'])){
        $tendangnhap = $_SESSION['tendangnhap'];
    }
else{
    header("location:loginadmin.html");
}
    $Code = $_GET['Code'];
    $Characteristics = $_GET['Characteristics'];
    include "connect.php";
    $sql = "UPDATE db_trees SET Characteristics ='$Characteristics' WHERE Code = '$Code'";
    $data = $con->query("SELECT Code FROM db_trees WHERE Code = '$Code'");
    $data = $data->fetch_assoc();
    echo '<marquee><h1 >Đã sửa thành công</h1></marquee>';
    echo'<br>';
    echo' <h2 class="copyright"><a href =detail_trees.php?id='.$data['Code'].'>Quay về xem chi tiết</a></h2>';
    echo' <h2 class="copyright"><a href =ds_trees.php.>Quay về danh sách cây</a></h2>';
    $con->query($sql);
    $con->close();
?>

    
    
</div>
<!--header end here-->
<hr>
<div class="copyright">
	<p>© 2020 Admin .</p>
</div>
<!--footer end here-->
</body>
</html>
