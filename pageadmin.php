<!DOCTYPE html>
<?php
	session_start();
?>
<html>
<head>
<title>ADMIN</title>
<meta charset="utf8">
<link rel="stylesheet" href="trangadmin.css">
</head>
<body>
    <?php 
	if(isset($_SESSION['tendangnhap'])){
			$tendangnhap = $_SESSION['tendangnhap'];
		}
	else{
		header("location:loginadmin.html");
    }
    ?>
    <div class="btn">
    <button onclick="window.location.href='add_trees.php'">THÊM CÂY</button>
    </div>
    <div class="btn">
    <button onclick="window.location.href='ds_trees.php'">DANH SÁCH CÂY</button>
    </div>
</body>
</html>