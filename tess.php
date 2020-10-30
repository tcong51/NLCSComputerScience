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
// function showss(value){
    
//     if (value.length==0) {
//                   document.getElementById("show").innerHTML="";
//                   document.getElementById("show").style.border="0px";
                  
//                   return;
//                 }
//                 document.getElementById("show").style.color="white";
//                 let xmlhttp;
                
//                 if(window.XMLHttpRequest){
//                     xmlhttp = new XMLHttpRequest();
//                 }
//                 else{
//                     xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//                 }
                
//                 xmlhttp.onreadystatechange=()=>{
//                     if(xmlhttp.readyState==4 && xmlhttp.status==200){
//                        document.getElementById("show").innerHTML = xmlhttp.responseText;
//                     }
//                 }
//                 xmlhttp.open("GET", `show.php?id=`+value ,true);
//                 xmlhttp.send();
// }
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

</style>
<body>

    <div id="wrapper" >
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
                $con = new mysqli('localhost', 'root', '', 'database_trees');
                $con -> set_charset('utf8');
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

                echo (convert_vi_to_en("Kiệt"));
               ?>
    </div>
    <div id="footer">
    </div>
</body>
</html>