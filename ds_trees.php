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
                      <?php
                    include "connect.php";
                    echo "<form action= method=GET>";
                    echo "<form action= method=GET>";
                    foreach($sql = $con->query("SELECT DISTINCT * FROM species") as $value){
                     
                     echo "<th class=\"but\"><button ><a href =ds_trees_admin.php?id=".$value['Code'].">".$value['Species']."</a></button></th>";
                     
                    }
                    echo "</form>";
                    ?>
                      
                      
               
    </table>         

    
    
</div>
<!--header end here-->
<div class="copyright">
	<p>© 2020 Admin.</p>
</div>
<!--footer end here-->
</body>
</html>
