<!--Đây là trang chủ-->
<!DOCTYPE html>
<html>
<head>
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
</script>
 
<style>

</style>
<body>
    <div id="wrapper">
        <div id="header"></div>
        <div id="menu">
            <div class="topnav">
                <a class="active" href="testindex.php">Trang chủ</a>
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
    <div id="banh" >
        <div class="col-12">
            <div class="row" >
                <?php
                $con = new mysqli('localhost', 'root', '', 'database_trees');
                $con -> set_charset('utf8');
                $result =mysqli_query($con,"SELECT * FROM db_trees ");
                if ($result) {
                    while($row = mysqli_fetch_array($result)) { ?>
                 
                        <div class="col-3 mt-3" >
                                <img style="width: 100%; height: 250px" src=<?php echo $row['Hinh']?>>
                                <br><a href= "<?php echo 'detail_trees.php?id='.$row['Mact'].' '?>" > <?php echo $row['Tencay']?> </a>
                        </div>
                <?php
                        }
                } else {
                        // Code xử lý lỗi
                        echo "Xảy ra lỗi khi truy vấn dữ liệu";
                }
                ?>
    </div>
    <!-- <div id="footer">
            <h3>WEB THÔNG TIN CÂY TRỒNG</h3>
    </div> -->
</body>
</html>