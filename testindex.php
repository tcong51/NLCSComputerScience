<!--Đây là trang chủ-->
<!DOCTYPE html>
<html>
<head>
    <title>TRA CỨU THÔNG TIN CÂY TRỒNG</title>
    <meta charset="utf8">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div id="login"> <a href="loginadmin.html">Đăng nhập chỉ dành cho admin</a></div>
    <div id="wrapper" class="container">
        <div id="header"></div>
        <div id="menu">
            <ul>
                <li>
                    <a href="ds_trees_l1.php">CÂY ĂN QUẢ</a>
                </li>
                <li>
                    <a href="ds_trees_l2.php">CÂY KIỂNG</a>
                </li>
                <li>
                    <a href="ds_trees_l3.php">CÂY DÂY LEO</a>
                </li>
                <li>
                    <a href="ds_trees_l4.php">CÂY THÂN GỖ</a>
                </li>
                <li>
                    <a href="ds_trees_l5.php">CÂY THẢO DƯỢC</a>
                </li>
            </ul>
        </div>
        <div class="content">
            <div id = "left">
                <a>Nội dung bên trái</a>
                <?php
                $con = new mysqli('localhost', 'root', '', 'database_trees');
                $con -> set_charset('utf8');
                $result =mysqli_query($con,"SELECT * FROM db_trees");
                if ($result) {
                    while($row = mysqli_fetch_array($result)) { ?>
             
                        <div class="noidungbentrai" >
                            <img style="width: 50%; height: 50%" src=<?php echo $row['Hinh']?>>
                            <br><?php echo $row['Tencay']?><br> Đặc điểm:<?php echo $row['Dacdiem']; ?>
                        </div>
                    <?php
                    }
                } else {
                    // Code xử lý lỗi
                    echo "Xảy ra lỗi khi truy vấn dữ liệu";
                }
                ?>
            </div>
            <div id="right">
                <a>Nội dung bên phải</a>
            </div>
            <div class ="clear"></div>
        </div>
        
        
        
    </div>
    <br>
    <br>
    <br>

    <div id="footer">
            <h3>WEB THÔNG TIN CÂY TRỒNG</h3>
    </div>
</body>
</html>