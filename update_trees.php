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
    
    echo '<form action=input_update_hinh.php method="GET">';
    echo '<input type="hidden" name="Mact" value='.$data['Mact'].'>';
    // echo '<img src='.$data['Hinh'].' alt="hinhsanpham" width = "25%">'.'<br>';
    echo '<input type="file" name="Hinh" style="width: 700px    ;">';
    
    echo '<br>';
    echo '<input type="submit" value="Xác nhận sửa thông tin">';
    echo '</form>';
    $con->close();
?>