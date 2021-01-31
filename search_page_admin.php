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
<head>
	<title>SEARCH PAGE</title>
    <meta charset="utf8">
	<link rel="stylesheet" href="searchpage.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
       <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
</head>
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
<body>
	<div id ="button-back">
		<input type="button" value="Back" onclick="history.go(-1);" style="width: 120px;height: 50px;">
	</div>
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
                    <form action="search_page_admin.php" method ="GET" onsubmit="return signup()">
                    	<input type="text" placeholder="Tìm kiếm.." id="search" name="search" >
                    <button type="submit"><i class="fa fa-search"></i></i></button>
                     <div id="show" onclick="showss(this.value)"></div> 
                     </form>
                    
                   
                  
                   
                </div>
            </div>

	</div>
	<div id="content">
	<?php 
	include "connect.php";
	$a[]="";
	$b[]="";
	function convert_vi_to_en($str) {
		$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
		$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
		$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
		$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
		$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
		$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
		$str = preg_replace("/(đ)/", "d", $str);
		$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
		$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
		$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
		$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
		$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
		$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
		$str = preg_replace("/(Đ)/", "D", $str);
		//$str = str_replace(" ", "-", str_replace("&*#39;","",$str));
		return $str;
	}
	foreach ($sql = $con->query("SELECT * FROM db_trees") as $value){

		array_push($a,$value['Code']);
	   
		  }
		  foreach ($sql = $con->query("SELECT * FROM db_trees") as $value1){
			  
		array_push($b,strtolower(convert_vi_to_en($value1['TreeName'])));
	  
	  
		  }
		$c=array_combine($a,$b);
$search=$_GET['search'];
//$search_change = strtolower($search);
$key=convert_vi_to_en($search);
// $search_change= mb_strtolower($search, 'UTF-8');
// echo $key;
echo "</br>";
	
	//echo $search;
	//$search_change= utf8convert(utf8tourl($search));
	//  echo $search_change;
		   // Kết nối sql
		   $hint = "";
// lookup all hints from array if $q is different from ""
$i =1;
if ($key !== "") {
  //$q = strtolower($q);
  $len=strlen($key);
  $dem=0;

  foreach($c as $key1=>$name) {
	 
    if (stristr($name,$key )) {
	  // echo $key1;
	  
      if ($hint === "") {
		$sql = $con->query("SELECT * FROM db_trees WHERE Code ='$key1'");
		$sql = $sql->fetch_assoc();
		
		//  "<a href=detail_trees.php?id=".$sql['Code']."> ".$sql['TreeName']." </a></br>";
	$hint =	
				"<h3>".$sql['TreeName']."</h3> ".$sql['Characteristics']."...<a href =tree.php?id=".$sql['Code']."> [Cập nhật]</a></td>
				</br>
				</br>";
				
      }
       else {
        $sql = $con->query("SELECT * FROM db_trees WHERE Code ='$key1'");
		$sql = $sql->fetch_assoc();
       
		$hint .="<h3>".$sql['TreeName']."</h3> ".$sql['Characteristics']."...<a href=tree.php?id=".$sql['Code']."> [Cập nhật]</a></td>
		</br>
		</br>";
		// "<a href=detail_trees.php?id=".$sql['Code']."> ".$sql['TreeName']." </a></br>";
      }
	
      $dem++; 
	}

   
  }


}
echo " Khoảng $dem kết quả tìm kiếm cho với từ khóa '$search' :";
	echo "</br>";
	echo "</br>";
	echo "</br>";
// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "Không tìm thấy" : $hint;

$con->close();

?>
</div>  
</body>
<div id="footer">
    </div>
</html>