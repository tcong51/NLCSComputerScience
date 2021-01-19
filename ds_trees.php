<!DOCTYPE HTML>
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
<head>
<title>ADMIN</title>
<style>
  
</style>
<link href="css/ds_trees.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
<!--header start here-->
<div class="header">
		<div class="header-main">
        <div class="btn">
		    <button class="input1" onclick="window.location.href='pageadmin.php'" style="width:120px;height:50px">PAGE ADMIN</button>
	    </div>
        <table  >
                      <h1>DANH SÁCH  LOẠI CÂY </h1>
                      <th class="but"><button style="height:50px;width:200px" onclick="window.location.href='ds_trees_l1.php'"  style="height="500"; width="600"" >Cây Ăn Quả</button></th>
                      <th class="but"><button style="height:50px;width:200px" onclick="window.location.href='ds_trees_l2.php'">Cây Kiểng</button></th>
                      <th class="but"><button style="height:50px;width:200px" onclick="window.location.href='ds_trees_l3.php'">Cây Dây Leo</button></th>
                      <th class="but"><button style="height:50px;width:200px" onclick="window.location.href='ds_trees_l4.php'">Cây Thảo Dược</button></th>
                      <th class="but"><button style="height:50px;width:200px" onclick="window.location.href='ds_trees_l5.php'">Cây Thân Gỗ</button></th>
                      
               
    </table>         

    
    
</div>
<!--header end here-->
<div class="copyright">
	<p>© 2020 Admin.</p>
</div>
<!--footer end here-->
</body>
</html>
