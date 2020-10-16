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

 

<body>
    <div id="wrapper">
        <div id="header"></div>
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
                                <br><a href= "#" > <?php echo $row['Tencay']?> </a>
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