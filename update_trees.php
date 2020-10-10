<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head>
        <title>Sửa sản phẩm</title>
        <meta charset="utf8">
        <!-- <style>
            body{
                background-image:url(./img/bgdanhsachsanpham.jpg); 
                background-repeat: no-repeat;
            }
            table{
                width: 25%;
                border-radius: 5px;
                margin: auto;
                margin-top: 5%;
                padding: 10px;
                background-color: #EEEEEE;
                opacity: 0.9;
                border: 1px solid black;
            }
            input[type=text]{
                width: 100%;
                padding: 5px 5px;
                margin: 5px 0;
                box-sizing: border-box;
                border: 2px solid purple;
                border-radius: 4px;
                width: 300px;
                position: relative;
                left: -5px;
            }
            input[type=submit]{
            width: 20%;
            background-color: #58257b;
            color: white;
            padding: 14px 20px;
            margin-left: 40%;
            margin-top: 3%;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }
            td{
                border: 0.5px solid black;
                padding: 0.5%;
                padding-right: auto;
                text-align: center;
            }
             img{
                width: 150px;
                position: relative;
                left: -6.5px;
                height: 150px
            }   
        </style> -->
    </head>
    
</html>
<?php
    if(isset($_SESSION['tendangnhap'])){
        $tendangnhap = $_SESSION['tendangnhap'];
    }
else{
    header("location:loginadmin.html");
}
    $mact = $_GET['id'];

    $con = new mysqli('localhost', 'root', '', 'database_trees');
    //require 'connect.php';
    $con->set_charset('utf8');
    $data = $con->query("SELECT Mact, Tencay, Dacdiem, Loaicay, Cachchamsoc, Hinh, Motacay FROM db_trees WHERE Mact = '$mact'");
    $data = $data->fetch_assoc();
    //echo $mact;
    
    //form hình
    // echo '<form action=input_update_hinh.php method="GET">';
    // echo '<input type="hidden" name="Mact" value='.$data['Mact'].'>';
    // echo '<img src='.$data['Hinh'].' alt="hinhsanpham" width = "25%">'.'<br>';
    // echo '<input type="file" name="Hinh">';
    /*Update - Đặc điểm*/
    
    echo '<br>';
    echo '<br>';
    echo '<h1 >Đặc điểm</h1>';
    echo '<br>';
    echo '<form action=input_update_dacdiem.php method="GET">';
    echo '<input type="hidden" name="Mact" value='.$data['Mact'].'>';
    echo '<td>'.$data['Dacdiem'].'</td>';
    echo '<h2>'.'Điền thông tin cần sửa'.'</h2>';
    echo '<textarea rows="5" cols="20" placeholder="Đây là vùng nhập text" name="Dacdiem" style="width: 700px;height: 200px;"></textarea></td>';
    

    echo '<br>';
    echo '<input type="submit" value="Xác nhận sửa thông tin">';
    echo '</form>';
    /*Update - Cách chăm sóc*/
    
    echo '<br>';
    echo '<br>';
    echo '<h1>Cách chăm sóc</h1>';
    echo '<br>';
    echo '<form action=input_update_cachchamsoc.php method="GET">';
    echo '<input type="hidden" name="Mact" value='.$data['Mact'].'>';
    echo '<td>'.$data['Cachchamsoc'].'</td>';
    echo '<h2>'.'Điền thông tin cần sửa'.'</h2>';
    echo '<textarea rows="5" cols="20" placeholder="Đây là vùng nhập text" name="Cachchamsoc" style="width: 700px;height: 200px;"></textarea></td>';
    echo '<br>';
    echo '<input type="submit" value="Xác nhận sửa thông tin">';
    echo '</form>';

    /*Update - Mô tả*/
    
    echo '<br>';
    echo '<br>';
    echo '<h1>Mô tả</h1>';
    echo '<br>';
    echo '<form action=input_update_motacay.php method="GET">';
    echo '<input type="hidden" name="Mact" value='.$data['Mact'].'>';
    echo '<td>'.$data['Motacay'].'</td>';
    echo '<h2>'.'Điền thông tin cần sửa'.'</h2>';
    echo '<textarea rows="5" cols="20" placeholder="Đây là vùng nhập text" name="Motacay" style="width: 700px;height: 200px;"></textarea></td>';
    echo '<br>';
    echo '<input type="submit" value="Xác nhận sửa thông tin">';
    echo '</form>';

    $con->close();
?>