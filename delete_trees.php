<!DOCTYPE html>
<?php
	session_start();
?>
<?php 
	if(isset($_SESSION['tendangnhap'])){
			$tendangnhap = $_SESSION['tendangnhap'];
		}
	else{
		header("location:loginadmin.html");
    }
?>
<html>
	<head>
	<meta charset="utf8">
		<style>
		</style>
	</head>
	<script>
	</script>
	<body>
		<marquee direction="right"><h1> Đã xóa sản phẩm !!!</h1></marquee>
<?php 
	$Code=$_GET['id'];
	// echo $Code;
	include "connect.php";
	$data = $con->query("SELECT Species FROM db_trees WHERE Code='$Code' ");
	$data = $data->fetch_assoc();
	$Species_null=$data['Species'];
	// echo $Species_null;
    $delete =$con->query("DELETE FROM db_trees WHERE Code=$Code");

	 echo "<form action=chitiet.php method=GET>";
	 echo '<table frame="border" border=4>';
	 echo "<tr id='tr'><th>Tên cây </th><th>Lựa chọn</th>";
	 foreach ($sql = $con->query("SELECT Code,TreeName FROM db_trees WHERE Species='$Species_null' ") as $value){
		 echo "<tr id='tr'>
		 <td > ".$value['TreeName']."</td>
		 <td><h3><a href =detail_trees.php?id=".$value['Code'].">Xem chi tiết</a>||<a href='#' onclick='notices(".$value['Code'].")' >Xóa</a>||<a href=update_trees.php?id=".$value['Code']." >Sửa</a></h3></td>
		</tr>"; 
		 }
	   echo "</table>";
	   echo "</form>";
	 $con->close();

?>
	<div id="notice"></div>
	</body>
</html>