<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf8">
		<style>
		body{  text-color:white;
	background-image:url(background11.jpg);}
h1{
	color:yellow;}
	p {font-size:20px;
			text-decoration: none;
    color: blue;
    margin-bot: 100px;
    border-top:5px solid white;}
	#color{color:blue; 
			margin:center;}
			#color{text-decoration:none;}
		#color:hover{color : pink;}
	#tr {color:white;
	}
	#tr td s a :hover {text-color:blue;
									}
	#trc {color:white;
	}
	
	table{ border-color:brown;}
		</style>
	</head>
	<body>
		<marquee direction="right"><h1> Đã xóa sản phẩm !!!</h1></marquee>
		
<?php 
    
    // $loaicay=$_GET['Loaicay_cookie'];
    $ca=$_GET['$ca']
    $mact=$_GET['id'];
    include "connect.php";
    $con->set_charset('utf8');
    $sql = $connect->query("SELECT Loaicay FROM db_trees WHERE Mact='$mact' ");
   
    include "connect.php";
    $con->set_charset('utf8');
    // $data="DELETE FROM db_trees WHERE Mact=$mact";
    $result =$connect->query($data);

	$sql = $connect->query("SELECT id, tensp, giasp FROM sanpham WHERE idtv='$idtv' ");
	 $value= $sql->fetch_assoc();
	echo "<form action=chitiet.php method=GET id='form'>";
	echo '<table frame="border" border=4>';
	echo "<tr id='tr'><th>STT</th><th>Tên sản phẩm</th><th>Giá sản phẩm</th><th>Lựa chọn</th>";
	foreach ($sql = $connect->query("SELECT id, tensp, giasp FROM sanpham WHERE idtv='$idtv' ") as $value){
		echo "<tr id='tr'>
		<td >".$value['id']."</td>
		<td>".$value['tensp']."</td>
		<td>".$value['giasp']."</td>
		<td><h3><a  id='color' href =chitiet.php?id=".$value['id']." >Chi tiết </a>||<a id='color' href =xoasp.php?id=".$value['id']." >Xóa</a>||<a id='color' href=suasp.php?id=".$value['id']." >Sửa</a></h3></td>
		</tr>";
		}
	echo "</table>";
	echo "</form>";
	//cookie ghi nho idtv de xoa.php thuc hien
	setcookie("iddn", $idtv, time()+600);
	//echo $idtv;
    $con->close();

?>
	
<p> <a href="login.html" id="color">Trở về đăng nhập</a> </p>
 <p> <a href="Themsp.html" id="color">Trở về thêm sản phẩm</a> </p>
 <p> <a href="form.html" id="color">Trở về trang đăng ký</a> </p>
  <p><a href="Dangxuat.php" id="color">Đăng xuất</a></p>
	</body>
</html>