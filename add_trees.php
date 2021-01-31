<!DOCTYPE html>
<?php
    session_start();
?>
<html>
<head>
    <title>Thêm cây</title>
    <meta charset="utf8">
	<link href="css/add_trees.css" rel="stylesheet" type="text/css" />
	<style>
		#ds{color:white;}
		</style>
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
		<button class="input1" onclick="window.location.href='pageadmin.php'" style="width:300px;height:50px">PAGE ADMIN</button>
		<br>
        <button class="input1" onclick="window.location.href='ds_trees.php'" style="width:300px;height:50px">Danh sách cây</button>
	</div>
	
    <form action="input_addtrees.php" method="POST" enctype="multipart/form-data">
        <h1 align="center" id='ds'  >Thêm cây </h1>
		<table width="1000" cellspacing="0" cellpadding="1" border="0" align="center">
			
			<tr>
				<th > </th><td style="width: 500px;"> Tên cây</td>
				<td></td>
				<td><input type = "text" name="TreeName" style="width: 700px;" class="input"><br>
			</td></tr>
			<tr>
				<th style="width: 500px;height:50px" align="left"> </th><td>Đặc điểm </td>
				<td></td>
				<!-- <td><input type="text" name="Characteristics" style="width: 300px;"><br> -->
				<td><textarea rows="5" cols="20" placeholder="Đây là vùng nhập text" class="input" name="Characteristics" style="width: 700px;height: 200px;"></textarea><br>
            </td></tr>
			<tr>
			<th style="width: 500px;height:50px" align="left"><td> Loại cây </td></th>
			<td></td>
			<td>
				<select name="Species" class="input"> 
					<option name="cayanqua"> Ăn quả </option>
					<option name="caykieng"> Kiểng </option>
					<option name="caydayleo"> Dây leo </option>
					<option name="caythaoduoc"> Thảo dược 	</option>
					<option name="caythango"> Thân gỗ 	</option>
					<option name="Khac"> Khác 	</option>
				</select>
			</td>	
 			</tr>
            <tr>
				 <th style="width: 500px;height:50px" align="left"> </th><td> Cách chăm sóc </td>
				 <td></td>
				
				<td><textarea rows="5" cols="20" placeholder="Đây là vùng nhập text" class="input" name="HowToCare" style="width: 700px;height: 200px;"></textarea><br>
            </td></tr>
			<tr>
				<th style="width: 500px;height:50px" align="left"></th>
				<td> Hình ảnh </td>
				<td></td>
				<td><input type="file" name="Hinh" style="width: 700px;"><br>
            </td></tr>
            <tr>
				<th style="width: 500px;height:50px" align="left"><td > Mô tả cây</td> </th>
				<td></td>
				<td><textarea rows="5" cols="20" placeholder="Đây là vùng nhập text" class="input" name="Describe" style="width: 700px;height: 200px;"></textarea><br>
			</td>
			</tr>
			<tr>
				<td>

			</td>
			<td>

			</td>
				<th style="width: 500px;height:50px"  align="left"><td ><input  type="reset" class="input1" value="Reset" style="width: 350px;height: 50px;">
				<input  type="submit" class="input1" value="Thêm" style="width: 350px;height: 50px;"></td></th>
				
				
			</tr>
			<tr >
				<td >
				
						  

				</td>
			</tr>
		
		</table>
	</form>

</body>
</html>