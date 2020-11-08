

<!DOCTYPE HTML>
<?php
	session_start();
?>
<html>
<head>
<title>ADMIN</title>
<style>
    h2{text-align:center;}
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


     //Lấy dữ liệu từ form về
     $tencay = $_POST['Tencay'];
     $dacdiem = $_POST['Dacdiem'];
     $loaicay=$_POST['Loaicay'];
     $cachchamsoc = $_POST['Cachchamsoc'];
     $hinhanh="./img/".$_FILES['Hinh']['name'];
     move_uploaded_file($_FILES['Hinh']['tmp_name'],$hinhanh);
     $motacay = $_POST['Motacay'];
     //Thao tác với CSDL
     include "connect.php";
     $sql = "INSERT INTO db_trees(Tencay, Dacdiem, Loaicay, Cachchamsoc, Hinh, Motacay)
     VALUES('$tencay','$dacdiem', '$loaicay', '$cachchamsoc', '$hinhanh', '$motacay')";
     $con->query($sql);
     $sql = "SELECT * FROM db_trees";
     $result = $con->query($sql);
    
    $con->close();
?>
    <h2><button  onclick="window.location.href='ds_trees.php'" style="height:50px;width:200px">Danh sách cây </button>
    <button onclick="window.location.href='add_trees.php'" style="height:50px;width:200px">Tiếp tục thêm cây</button></h2>

</div>
<!--header end here-->
<hr>
<div class="copyright">
	<p>© 2020 Admin .</p>
</div>
<!--footer end here-->
</body>
</html>
