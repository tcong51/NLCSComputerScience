<?php
    session_start();
?>

<?php 
	if(isset($_SESSION['tendangnhap'])){
			$tendangnhap = $_SESSION['tendangnhap'];
		}
	else{
		header("location:loginadmin.php");
    }
?>
<?php
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

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Thêm sản phẩm thành công</title>
    </head>
    <body>
        <div class="btn">
            <button onclick="window.location.href='ds_trees.php'">Danh sách cây</button>
        </div>
        <div class="btn">
            <button onclick="window.location.href='add_trees.php'">Tiếp tục thêm cây</button>
        </div>
    </body>
</html>