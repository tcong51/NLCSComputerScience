<!DOCTYPE html>
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
?>
 <html>
 <script>
 	function notices(value){
	  var result = confirm("Do you want to continue?")
		if(result)  {
			var xmlhttp = new XMLHttpRequest();
	 		xmlhttp.onreadystatechange = function() {
	   		if (this.readyState == 4 && this.status == 200) {
		 	document.getElementById("notices").innerHTML = this.responseText;
	   			}
	 		};
	 	xmlhttp.open("GET",`delete_trees.php?id=${value}`,true);
	 	xmlhttp.send();
		alert("Deleted");
		} else {
				alert("Đã hủy!");
			   }
	 location.reload();
   	}
  </script>

<head>
<meta charset="utf8">
	<style>
	.null{display : none ;}
	</style>
	<link href="css/ds_trees.css" rel="stylesheet" type="text/css" />
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<div class="btn">
		    <button class="input1" onclick="window.location.href='ds_trees.php'" style="width:120px;height:50px">Danh sách cây</button>
	    </div>
		<div id="search-bar">
                    <form action="search_page_admin.php" method ="GET" onsubmit="return signup()">
                    <input type="text" placeholder="Tìm kiếm.." id="search" name="search" >
                    <button type="submit"><i class="fa fa-search"></i></i></button>
                     
                     </form>
                  
                   
                </div>
<div class="header">
		<div class="header-main">
                      <h1>CHI TIẾT CÂY </h1>
</div>
<!--header end here-->

<?php
$word=$_GET['id'];
// echo $word;
include "connect.php";  
echo "<form action= method=GET>";
echo '<table width="1000" cellspacing="0" cellpadding="1" border="2" align="center">' ;
echo "<tr id='tr'><th>Tên Cây </th><th colspan=3>Thao Tác</th></tr>";
foreach ($sql = $con->query("SELECT Code,TreeName FROM db_trees WHERE Code='$word' ") as $value){
    echo "<tr id='tr'>
    <td > ".$value['TreeName']."</td>
    <td><h3><a href =detail_trees_admin.php?id=".$value['Code'].">Xem chi tiết</a></h3></td>
	<td><h3><a href='#' onclick='notices(".$value['Code'].")' >Xóa</a></h3></td>	
	<td><h3><a href=update_trees.php?Code=".$value['Code']." >Sửa</a></td>
	</tr>"; 
    }
  echo "</table>";
  echo "</form>";
$con->close();
 ?>
 <div id="notices"></div>
 <div id="Update"></div>
 <div id="Delete"></div>
 <div class="copyright">
	<p>© 2020 Admin.</p>
</div>
<div id="footer">
    </div>
</body>
</html>