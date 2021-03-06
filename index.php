<!--Đây là trang chủ-->
<!DOCTYPE html>
<html>
<!-- QUANG CAO -->
<link href="css/ads.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/BannerFloat.js"></script>

<!-- -->

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TRA CỨU THÔNG TIN CÂY TRỒNG</title>
    <meta charset="utf8">
    <link rel="stylesheet" href="testindex.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<script>
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
<meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=yes">

<link rel="stylesheet" href="responsive.css">
<style>
.dropbtn {
  background-color: 		#87cefa;
  color: white;
  padding: 14px;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: 	#b0c4de;
/* min-width : tùy thuộc vào bao nhiêu loại cây, chưa fix hoàn chỉnh. */
  min-width: 462px ;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  /* padding: 12px 16px; */
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: rgb(29, 155, 128)}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: rgb(29, 155, 128);

}
</style>
<body>

    <div id="wrapper" >
        <div id="header"></div>
        <div id="menu">
            <div class="topnav">
            <a class="active" href="index.php">Trang chủ</a>
            <ul id = "drnav">
            <div class="dropdown">
              
            <button class="dropbtn">Danh Mục</button>
            <div class="dropdown-content">

                <?php
                    include "connect.php";
                    echo "<form action= method=GET>";
                   foreach($sql = $con->query("SELECT DISTINCT * FROM species") as $value){
                    
                    echo "<a href =ds_trees_homepage.php?id=".$value['Code'].">".$value['Species']."</a>";
                    
                   }
                   echo "</form>";
                ?>
                </div>
            </div>

            <div class="dropdown">
            <button class="dropbtn">Đất Trồng</button>
            <div class="dropdown-content">

                    <?php
                        include "connect.php";
                        echo "<form action= method=GET>";
                    foreach($sql = $con->query("SELECT DISTINCT * FROM landtype") as $value){
                        
                        echo "<a href =ds_trees_land.php?id=".$value['Code'].">".$value['LandName']."</a>";
                        
                    }
                    echo "</form>";
                    ?>
</div>
            </div>
            
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
    <div class="content">
            <div id = "left">
                <br><a>CHÀO MỪNG BẠN ĐẾN VỚI TREES DICTIONARY </a><br>
                <h3>Trang web hỗ trợ tìm kiếm, tra cứu cây trồng.</h3>
                <h3>Trees Dictionary là nơi mà kiến thức của chuyên gia đồng hành cùng những bài nghiên cứu về cây trồng đáng tin cậy.</h3>
                <p>Từ năm 2020, Trees Dictionary được sinh ra để giải quyết vấn đề về tìm kiếm phương pháp trông cây hiệu quả. Chúng tôi hợp tác với 
                    những chuyên gia uy tín, một đội ngũ những nhà nghiên cứu đã qua đào tạo và một cộng đồng tận tâm nhằm tạo ra những 
                    nội dung hướng dẫn đáng tin cậy, dễ hiểu và thân thiện trên mạng.</p>
            </div>
            
            <div id="right">
                <img src="./hinhanh/treebook.jpg" alt="treebook" width="50%" height = "50%">
            </div>
            <div class ="clear"></div>
    </div>
    <div id="hienthi" >
        <div class="col-12">
            <div class="row" >
                <?php
                include "connect.php";

                $TreeName=[];
                $NumberAccess=[];
                $Luottruycap_dxx=[];
                // $result =mysqli_query($con,"SELECT * FROM db_trees ");
                
                foreach ($sql = $con->query("SELECT * FROM db_trees") as $value){
                    array_push($NumberAccess,$value['NumberAccess']);
                
                    }
                rsort($NumberAccess); 
                $i=0;
                while($i<8){
                        
                        array_push($Luottruycap_dxx,$NumberAccess[$i]);
                    
                    $i++;
                }
              
                foreach($Luottruycap_dxx as $value){
                    // echo $value;
                    $sql = $con->query("SELECT Code FROM db_trees WHERE NumberAccess='$value'");
                    $sql = $sql->fetch_assoc();
                    $tree1= $sql['Code'];
                    // echo $tree1;
                    $sqlx = $con->query("SELECT * FROM db_trees WHERE Code='$tree1'");
                    $sqlx = $sqlx->fetch_assoc();
                    
                       echo " <div class='col-3 mt-3' >
                                <img style='width: 100%; height: 250px' src='".$sqlx['Avatar']."'>
                                <br><center><a href =detail_trees.php?id=".$sqlx['Code'].">  ".$sqlx['TreeName']." </a></center>
                        </div>";

                }
                
                

                    
                
            
            
                ?>
    </div>
    <div id="footer">
    </div>
<!--Chat bot -->
<script>!(function () {
  let e = document.createElement("script"),
    t = document.head || document.getElementsByTagName("head")[0];
  (e.src =
    "https://cdn.jsdelivr.net/npm/rasa-webchat/lib/index.js"),
    (e.async = !0),
    (e.onload = () => {
      window.WebChat.default(
        {
          customData: { language: "en" },
          // socketUrl: "https://bf-botfront.development.agents.botfront.cloud",
          // add other props here
          socketUrl: "http://localhost:5005",
        },
        null
      );
    }),
    t.insertBefore(e, t.firstChild);
})();
</script>
<!--         -->
</body>
</html>