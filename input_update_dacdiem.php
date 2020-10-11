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
    $mact = $_GET['Mact'];
    // $Tencay = $_GET['Tencay'];
    $dacdiem = $_GET['Dacdiem'];
    // $Loaicay = $_GET['Loaicay'];
    // $Cachchamsoc = $_GET['Cachchamsoc'];
    // $Motacay = $_GET['Motacay'];
    $con = new mysqli('localhost', 'root', '', 'database_trees');
    //require 'connect.php';
    $con->set_charset('utf8');
    $sql = "UPDATE db_trees SET Dacdiem ='$dacdiem' WHERE Mact = '$mact'";
    $data = $con->query("SELECT Mact FROM db_trees WHERE Mact = '$mact'");
    $data = $data->fetch_assoc();
    echo '<h1 >Đã sửa thành công</h1>';
    echo'<br>';
    echo' <h2><a href =detail_trees.php?id='.$data['Mact'].'>Quay về xem chi tiết</a></h2>';
    $con->query($sql);
    $con->close();
?>
