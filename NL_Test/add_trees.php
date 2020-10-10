<!DOCTYPE html>
<?php
    session_start();
?>
<html>
<head>
    <title>Thêm cây</title>
    <meta charset="utf8">
    <link rel="stylesheet" href="add_trees.css">
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
    <form action="input_addtrees.php" method="POST" enctype="multipart/form-data">
        <h1 align="center"  >Thêm cây </h1>
		<table width="400" cellspacing="0" cellpadding="1" border="0" align="center">
			<tbody style="position: fixed;">
			<tr>
				<th style="width: 200px;" align="left"> Tên cây </th>
				<td><input type = "text" name="Tencay" style="width: 300px;"><br>
			</td></tr>
			<tr>
				<th align="left"> Đặc điểm </th>
				<td><input type="text" name="Dacdiem" style="width: 300px;"><br>
            </td></tr>
			<tr>
				<th align="left"> Loại cây </th>
				<td><input type="text" name="Loaicay" style="width: 300px;"><br>
            </td></tr>
            <tr>
				<th align="left"> Cách chăm sóc </th>
				<td><input type="text" name="Cachchamsoc" style="width: 300px;"><br>
            </td></tr>
			<tr>
				<th align="left"> Hình ảnh </th>
				<td><input type="file" name="Hinh" style="width: 300px;"><br>
            </td></tr>
            <tr>
				<th style="width: 200px;" align="left"> Mô tả cây </th>
				<td><textarea rows="5" cols="20" placeholder="Đây là vùng nhập text" name="Motacay" style="width: 300px;height: 300px;"></textarea><br>
			</td></tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="Thêm" style="width: 150px;">
					<input type="reset" value="Reset" style="width: 150px;">
				</td>
			</tr>
		</tbody></table>
    </form>
    <div class="btn">
        <button onclick="window.location.href='ds_trees.php'">Danh sách cây</button>
    </div>
</body>
</html>