<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
</head>
<link href="css/detail_trees.css" rel="stylesheet" type="text/css" />
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
                <a href="#">Cây ăn quả</a>
                <a href="#">Cây kiểng</a>
                <a href="#">Cây dây leo</a>
                <a href="#">Cây thân gỗ</a>
                <a href="#">Cây thảo dược</a>
                <div class="search-container">
                    <form action="/action_page.php">
                    <input type="text" placeholder="Tìm kiếm.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></i></button>
                    </form>
                </div>
            </div>

    </div>

<?php 
$mact=$_GET['id'];
// echo $mact;
include "connect.php";
$data = $con->query("SELECT Tencay,Dacdiem,Loaicay,Cachchamsoc,Hinh,Motacay FROM db_trees WHERE Mact='$mact'");
$data = $data->fetch_assoc();
 echo "<form action= method=GET>";
	echo '<table frame="border" border=4  >';
	echo "<tr id='h1'> <td><h1>Chi tiết cây</h1></td></tr>";
    echo "<tr id='tr'>
       <td> <h2>Đặc điểm</h2></td>
        </tr>";
    echo "<tr id='tr'>
        <td id='td'>".$data['Dacdiem']."</td>
        </tr>";
    echo "<tr id='tr'>
        <td id='td'><img src='".$data['Hinh']."'height='300' width='300'></td>
        </tr>";	
    echo "<tr id='tr'>
        <td> <h2>Cách chăm sóc</h2></td>
         </tr>";   
    echo "<tr id='tr'>
        <td id='td'>".$data['Cachchamsoc']."</td>
        </tr>";	
    echo "<tr id='tr'>
        <td> <h2>Tổng kết</h2></td>
         </tr>";
    echo "<tr id='tr'>
        <td id='td'>".$data['Motacay']."</td>
        </tr>";
       
		
	echo "</table>";
	echo "</form>";



$con->close();

?>


</body>
</html>