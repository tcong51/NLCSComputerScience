<!DOCTYPE html>
<html>
<head>

<meta charset="utf8">
</head>
<style>
    #link{text-align:center;}
    </style>
<link href="css/detail_trees.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="detail_trees.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
       <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
       <script>
	// var IMAGE_PATHS = [];
	// IMAGE_PATHS[0] = "./hinhanh/banner.jpg";
	// IMAGE_PATHS[1] = "./hinhanh/banner2.jpg";
	// IMAGE_PATHS[2] = "./hinhanh/banner3.png";
	
	
	
	// let index = 0;
	// let intervalTimer;
	
	// function slideShow(){
	// 	index++;
	// 	if(index > IMAGE_PATHS.length - 1) index = 0;
		
	// 	let Img = document.getElementById("Img");
	// 	Img.setAttribute("src", IMAGE_PATHS[index]);
		
	// }
	
	// function activateTimer(){
	// 	intervalTimer = setInterval(slideShow, 3000);
	// }
	
	// activateTimer();
	
    const showResult=(value)=>{
   // document.getElementById("keyup").innerHTML = value;
                if (value.length==0) {
                  document.getElementById("show").innerHTML="";
                  document.getElementById("show").style.border="0px";
                  
                  return;
                }
                document.getElementById("show").style.color="white";
                let xmlhttp;
                
                if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }
                else{
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                
                xmlhttp.onreadystatechange=()=>{
                    if(xmlhttp.readyState==4 && xmlhttp.status==200){
                       document.getElementById("show").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", `show.php?id=`+value ,true);
                xmlhttp.send();
  }

}
</script>
<!-- QUANG CAO -->
<link href="css/ads.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/BannerFloat.js"></script>

<!-- -->
<body>
<div id="wrapper">
        <div id="header"></div>
        <div id="menu">
            <div class="topnav">
                <a class="active" href="index.php">Trang chủ</a>
                <a href="ds_trees_l1_homepage.php">Cây ăn quả</a>
                <a href="ds_trees_l2_homepage.php">Cây kiểng</a>
                <a href="ds_trees_l3_homepage.php">Cây dây leo</a>
                <a href="ds_trees_l4_homepage.php">Cây thân gỗ</a>
                <a href="ds_trees_l5_homepage.php">Cây thảo dược</a>
                <div class="search-container">
                <form action="search_page.php" method ="GET" onsubmit="return signup()">
                    <input type="text" placeholder="Tìm kiếm.." name="search" onkeyup="showResult(this.value)">
                    <button type="submit"><i class="fa fa-search"></i></i></button>
                     <div id="show" onclick="showss(this.value)"></div> 
                     </form>
                </div>
            </div>

    </div>
    </br>
    </br>
      <!-- QUANG CAO -->
<div class="adfloat" id="divBannerFloatLeft">
 <p><a href="http://hocwebgiare.com/" target="_blank"><img src="http://hocwebgiare.com/images/left_banner.png" alt=""></a>
 </p>
</div>
<div class="adfloat" id="divBannerFloatRight">
 <p><a href="http://hocwebgiare.com/" target="_blank"><img src="http://hocwebgiare.com/images/right_banner.jpg" alt=""></a>
 </p>
</div>
<!-- -->
<div id="hienthi-caytrong">
<?php 
$mact=$_GET['id'];
//  echo $mact;
include "connect.php";

$data = $con->query("SELECT Tencay,Dacdiem,Loaicay,Cachchamsoc,Hinh,Motacay FROM db_trees WHERE Mact='$mact'");
$data = $data->fetch_assoc();
	echo '<center>'.'<table frame="border" border=4 >'.'</center>';
    $data = $con->query("SELECT * FROM db_trees WHERE Mact='$mact'");
    $data = $data->fetch_assoc();
 echo "<form action= method=GET>";
	echo '<table frame="border" border=4  >';

	echo "<tr id='h1'> <td><h1>".$data['Tencay']."</h1></td></tr>";
    echo "<tr id='tr'>
       <td> <h2>Đặc điểm</h2></td>
        </tr>";
    echo "<tr id='tr'>
        <td id='td'>".$data['Dacdiem']."</td>
        </tr>";
    echo "<tr id='tr'>
        <td id='td'><center><img src='".$data['Hinh']."'></center></td>
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


    // $data = $con->query("SELECT * FROM db_trees WHERE Mact='$mact'");
    // $data = $data->fetch_assoc();
    // echo "<form action= method=GET>";
	//     echo '<table frame="border" border=4  >';
	//     echo "</table>";
    //     echo "</form>";
    $luot=$data['Luottruycap'];
    $luot=$luot+1;
    $sql = $con->query("UPDATE db_trees SET Luottruycap='$luot' WHERE Mact ='$mact'");
$con->close();

?>
</div>
</body>
</html>