<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Đăng nhập thành công</title>
  <meta charset="utf8">
</head>
<body>
<?php
  //Lấy dữ liệu từ form về
  $tendangnhap = $_POST['tendangnhap'];
  $matkhau = $_POST['matkhau'];
  //Thao tác với CSDL
  //B1: Tạo kết nối
  include "connect.php";
  //B2: Viết câu sql
  $sql = "SELECT * FROM db_admin WHERE (tendangnhap='".$tendangnhap."') AND (matkhau='".$matkhau."')";
  //B3: Thực hiện truy vấn
  $result=$con->query($sql);
  //B4: Xử lý
  if($result-> num_rows > 0){
    //Đăng nhập thành công
    $_SESSION['tendangnhap'] = $_POST['tendangnhap'];
    header("location: pageadmin.php");
  }
  else{
    echo "Đăng nhập thất bại";
    header("location: loginadmin.html");
  }
  //B5: Đóng kết nối
  $con->close();
?>
</body>
</html>
