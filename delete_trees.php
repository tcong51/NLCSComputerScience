<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf8">
		<style>
		</style>
	</head>
	<script>
	//đang dở
	// function notices(value){
	//   var result = confirm("Do you want to continue?")
	// 	if(result)  {
	// 		var xmlhttp = new XMLHttpRequest();
	//  		xmlhttp.onreadystatechange = function() {
	//    		if (this.readyState == 4 && this.status == 200) {
	// 	 	document.getElementById("notice").innerHTML = this.responseText;
	//    			}
	//  		};
	//  	xmlhttp.open("GET",`detail_trees.php?id=${value}`,true);
	//  	xmlhttp.send();
		
	// 	} else {
	// 			alert("Bạn chưa xóa!");
	// 			location.reload();
	// 		   }
			   
   	// }
	</script>
	<body>
		<marquee direction="right"><h1> Đã xóa sản phẩm !!!</h1></marquee>
<?php 
	$mact=$_GET['id'];
	// echo $mact;
	include "connect.php";
	$data = $con->query("SELECT Loaicay FROM db_trees WHERE Mact='$mact' ");
	$data = $data->fetch_assoc();
	$loaicay_null=$data['Loaicay'];
	// echo $loaicay_null;
    $delete =$con->query("DELETE FROM db_trees WHERE Mact=$mact");

	 echo "<form action=chitiet.php method=GET>";
	 echo '<table frame="border" border=4>';
	 echo "<tr id='tr'><th>Tên cây </th><th>Lựa chọn</th>";
	 foreach ($sql = $con->query("SELECT Mact,Tencay FROM db_trees WHERE Loaicay='$loaicay_null' ") as $value){
		 echo "<tr id='tr'>
		 <td > ".$value['Tencay']."</td>
		 <td><h3><a href='#' onclick='notices(".$value['Mact'].")' >Xem chi tiết</a>||<a href =delete_trees.php?id=".$value['Mact'].">Xóa</a>||<a href=update_trees.php?id=".$value['Mact']." >Sửa</a></h3></td>
		 </tr>"; 
		 }
	   echo "</table>";
	   echo "</form>";
	 $con->close();

?>
	<div id="notice"></div>
	</body>
</html>