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
    $Mact = $_GET['Mact'];
    // $Tencay = $_GET['Tencay'];
    $Dacdiem = $_GET['Dacdiem'];
    // $Loaicay = $_GET['Loaicay'];
    // $Cachchamsoc = $_GET['Cachchamsoc'];
    // $Motacay = $_GET['Motacay'];
    $con = new mysqli('localhost', 'root', '', 'database_trees');
    //require 'connect.php';
    $con->set_charset('utf8');
    $sql = "UPDATE db_trees SET Dacdiem ='$Dacdiem' WHERE Mact = '$Mact'";
    $con->query($sql);
    $con->close();
?>
    <h1 align = "center">Đã sửa thành công</h1><br> <h2 align="center"><a href = dssanpham.php >Quay về danh sách sản phẩm</a></h2>