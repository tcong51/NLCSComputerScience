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
    $mact = $_GET['Mact'];
    // echo $mact;
    //Lấy dữ liệu từ form về
    // $hinhanh="./img/".$_FILES['Hinh']['name'];
    // move_uploaded_file($_FILES['Hinh']['tmp_name'],$hinhanh);

    //Thao tác với CSDL
    
    include "connect.php";
    $sql = "UPDATE db_trees SET Hinh = '$hinhanh' WHERE Mact = '$mact'";
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