<!DOCTYPE html>
 <html>
 <script>
</script>
<head>
<meta charset="utf8">
	<style>
	</style>
</head>
<body>
<?php
include "connect.php";
$sql = $con->query("SELECT tencay FROM db_trees WHERE Loaicay='Thảo dược' ");
echo "<form action=chitiet.php method=GET>";
echo '<table frame="border" border=4>';
echo "<tr id='tr'><th>Tên cây </th><th>Lựa chọn</th>";
foreach ($sql = $con->query("SELECT Mact,Tencay FROM db_trees WHERE Loaicay='Thảo dược' ") as $value){
    echo "<tr id='tr'>
    <td > ".$value['Tencay']."</td> 
    <td><h3><a href =detail_trees.php?id=".$value['Mact'].">Xem chi tiết</a>||<a href =delete_trees.php?id=".$value['Mact'].">Xóa</a>||<a href=update_trees.php?id=".$value['Mact']." >Sửa</a></h3></td>    </tr>"; 
    }
echo "</table>";
echo "</form>";
$con->close();
 ?>
 <div id="Detail"></div>
 <div id="Update"></div>
 <div id="Delete"></div>
</body>
</html>