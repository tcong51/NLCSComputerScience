<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head>
        <title>Sửa sản phẩm</title>
        <meta charset="utf8">
    </head>
    <script>
    function notices_dacdiem(value){
	  var result = confirm("Are you sure?")
		if(result)  {
			var xmlhttp = new XMLHttpRequest();
	 		xmlhttp.onreadystatechange = function() {
	   		if (this.readyState == 4 && this.status == 200) {
		 	document.getElementById("notices").innerHTML = this.responseText;
	   			}
	 		};
	 	xmlhttp.open("GET",`input_update_dacdiem.php?id=${value}`,true);
	 	xmlhttp.send();
		alert("You have updated! ");
		} else {
				alert("You have not updated!");
			   }
	 
   	}
       function notices_cachchamsoc(value){
	  var result = confirm("Are you sure?")
		if(result)  {
			var xmlhttp = new XMLHttpRequest();
	 		xmlhttp.onreadystatechange = function() {
	   		if (this.readyState == 4 && this.status == 200) {
		 	document.getElementById("notices").innerHTML = this.responseText;
	   			}
	 		};
	 	xmlhttp.open("GET",`input_update_cachchamsoc.php?id=${value}`,true);
	 	xmlhttp.send();
		alert("You have updated! ");
		} else {
				alert("You have not updated!");
			   }
	 
   	}
       function notices_motacay(value){
	  var result = confirm("Are you sure?")
		if(result)  {
			var xmlhttp = new XMLHttpRequest();
	 		xmlhttp.onreadystatechange = function() {
	   		if (this.readyState == 4 && this.status == 200) {
		 	document.getElementById("notices").innerHTML = this.responseText;
	   			}
	 		};
	 	xmlhttp.open("GET",`input_update_motacay.php?id=${value}`,true);
	 	xmlhttp.send();
		alert("You have updated! ");
		} else {
				alert("You have not updated!");
			   }
	 
   	}
    </script>
    <body>
        <div id="notices"></div>
    </body>
</html>
<?php
    if(isset($_SESSION['tendangnhap'])){
        $tendangnhap = $_SESSION['tendangnhap'];
    }
else{
    header("location:loginadmin.html");
}
    $mact = $_GET['id'];
    $con = new mysqli('localhost', 'root', '', 'database_trees');
    //require 'connect.php';
    $con->set_charset('utf8');
    $data = $con->query("SELECT Mact, Tencay, Dacdiem, Loaicay, Cachchamsoc, Hinh, Motacay FROM db_trees WHERE Mact = '$mact'");
    $data = $data->fetch_assoc();
    /* Update hình ảnh cần kiểm tra nếu cần */
    // echo '<form action=input_update_hinh.php method="GET">';
    // echo '<input type="hidden" name="Mact" value='.$data['Mact'].'>';
    // echo '<img src='.$data['Hinh'].' alt="hinhsanpham" width = "25%">'.'<br>';
    // echo '<input type="file" name="Hinh">';
    /*Update - Đặc điểm*/
    echo '<br>';
    echo '<br>';
    echo '<h1 >Đặc điểm</h1>';
    echo '<br>';
    echo '<form action=input_update_dacdiem.php method="GET" >';
    echo '<input type="hidden" name="Mact" value='.$data['Mact'].'>';
    echo '<td>'.$data['Dacdiem'].'</td>';
    echo '<h2>'.'Điền thông tin cần sửa'.'</h2>';
    echo '<textarea rows="5" cols="20" placeholder="Đây là vùng nhập text" name="Dacdiem" style="width: 700px;height: 200px;"></textarea></td>';
    echo '<br>';
    echo '<input type="submit" value=" Xác nhận " onclick=notices_dacdiem('.$data['Mact'].') >';
    echo '</form>';
    /*Update - Cách chăm sóc*/
    echo '<br>';
    echo '<br>';
    echo '<h1>Cách chăm sóc</h1>';
    echo '<br>';
    echo '<form action=input_update_cachchamsoc.php method="GET">';
    echo '<input type="hidden" name="Mact" value='.$data['Mact'].'>';
    echo '<td>'.$data['Cachchamsoc'].'</td>';
    echo '<h2>'.'Điền thông tin cần sửa'.'</h2>';
    echo '<textarea rows="5" cols="20" placeholder="Đây là vùng nhập text" name="Cachchamsoc" style="width: 700px;height: 200px;"></textarea></td>';
    echo '<br>';
    echo '<input type="submit" value=" Xác nhận " onclick=notices_cachchamsoc('.$data['Mact'].') >';
    echo '</form>';
    /*Update - Mô tả*/
    echo '<br>';
    echo '<br>';
    echo '<h1>Mô tả</h1>';
    echo '<br>';
    echo '<form action=input_update_motacay.php method="GET">';
    echo '<input type="hidden" name="Mact" value='.$data['Mact'].'>';
    echo '<td>'.$data['Motacay'].'</td>';
    echo '<h2>'.'Điền thông tin cần sửa'.'</h2>';
    echo '<textarea rows="5" cols="20" placeholder="Đây là vùng nhập text" name="Motacay" style="width: 700px;height: 200px;"></textarea></td>';
    echo '<br>';
    echo '<input type="submit" value=" Xác nhận " onclick=notices_motacay('.$data['Mact'].') >';
    echo '</form>';
    $con->close();
?>