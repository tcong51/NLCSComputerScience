<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
</head>
<title>TRA CỨU THÔNG TIN CÂY TRỒNG</title>
<style>
    #link{text-align:center;}
    </style>
<!-- <link href="css/ds_trees.css" rel="stylesheet" type="text/css" /> -->
<link rel="stylesheet" href="homepage.css">
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

  function signup(){
    var key= document.getElementById("search").value;
    var ok=true;
    if (key ==""  ){
        alert("Vui lòng điền từ khóa !");
    ok=false;
	    }else if(key == null){
            alert("Vui lòng điền từ khóa !");
             ok=false; 
                           }
	return ok;
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
            <ul id = "drnav">
            <a class="active" href="index.php">Trang chủ</a>
            <a href="#">Danh mục</a>
            <a href="">Môi trường sống</a>
            </ul>
            
                <div class="search-container">
                <form action="search_page.php" method ="GET" onsubmit="return signup()">
                    <input type="text" placeholder="Tìm kiếm.." id="search" name="search" onkeyup="showResult(this.value)">
                    <button type="submit"><i class="fa fa-search"></i></i></button>
                     
                     </form>
                     <div id="show" onclick="showss(this.value)"></div> 
                </div>
            </div>

    </div>
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
    <div id="ten-content">
        <h2><center>DANH SÁCH CÂY <?php
						$types =$_GET['id'];
						include "connect.php";  
						$sql = $con->query("SELECT DISTINCT * FROM db_trees WHERE Types='$types'");
						$sql = $sql->fetch_assoc();
						$str = mb_strtoupper($sql['Loaicay'],'UTF-8');
						echo $str;
						$con->close();?></center></h2>
    </div>
    <div id="content">
    <?php
    $types = $_GET['id'];
    
include "connect.php";  

echo "<table >" ;

foreach ($sql = $con->query("SELECT DISTINCT * FROM db_trees WHERE Types='$types' ") as $value){
    echo "<tr id='tr'>
    
    <td id='link' ><img src='".$value['Hinh']."'></td>
    <td style='width:700px'><h3>".$value['Tencay']."</h3></br> ".$value['Dacdiem']."...<a href =detail_trees.php?id=".$value['Mact']."> [Xem chi tiết]</a></td>
    </tr>";
    echo '</br>';
    }
  echo "</table>";
 
  
$con->close();
 ?>
</div>
<div id="footer">
    </div>
</body>
</html>