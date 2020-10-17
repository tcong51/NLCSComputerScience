<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
</head>
<!-- <link href="css/ds_trees.css" rel="stylesheet" type="text/css" /> -->
<link rel="stylesheet" href="testindex.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
       <script>
	var IMAGE_PATHS = [];
	IMAGE_PATHS[0] = "./hinhanh/banner.jpg";
	IMAGE_PATHS[1] = "./hinhanh/banner2.jpg";
	IMAGE_PATHS[2] = "./hinhanh/banner3.png";
	
	
	
	let index = 0;
	let intervalTimer;
	
	function slideShow(){
		index++;
		if(index > IMAGE_PATHS.length - 1) index = 0;
		
		let Img = document.getElementById("Img");
		Img.setAttribute("src", IMAGE_PATHS[index]);
		
	}
	
	function activateTimer(){
		intervalTimer = setInterval(slideShow, 3000);
	}
	
	activateTimer();
	

</script>
<body>
<div id="wrapper">
        <div id="header"><img id="Img" name="Img" src="./hinhanh/banner.jpg" height="300" width="300"  onmouseout="activateTimer()" /></div>
        <div id="menu">
            <div class="topnav">
                <a class="active" href="#">Trang chủ</a>
                <a href="ds_trees_l1_homepage.php">Cây ăn quả</a>
                <a href="ds_trees_l2_homepage.php">Cây kiểng</a>
                <a href="ds_trees_l3_homepage.php">Cây dây leo</a>
                <a href="ds_trees_l4_homepage.php">Cây thân gỗ</a>
                <a href="ds_trees_l5_homepage.php">Cây thảo dược</a>
                <div class="search-container">
                    <form action="/action_page.php">
                    <input type="text" placeholder="Tìm kiếm.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></i></button>
                    </form>
                </div>
            </div>

    </div>
    <div id="content">
        <h2>DANH SÁCH CÂY ĂN QUẢ</h2>
    </div>
    <?php
include "connect.php";  

echo "<table >" ;
foreach ($sql = $con->query("SELECT * FROM db_trees WHERE Loaicay='Ăn quả' ") as $value){
    echo "<tr id='tr'>
    <td ><a href =detail_trees.php?id=".$value['Mact']."><img src='".$value['Hinh']."'height='200' width='200'>Xem chi tiết</a></td>
    <td style='width:700px'><h3>".$value['Tencay']."</h3></br> ".$value['Dacdiem']."...</td>
    </tr>";
    echo '</br>';
    echo '</br>';
    }
  echo "</table>";
 
  
$con->close();
 ?>


</body>
</html>