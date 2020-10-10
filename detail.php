<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
<style>
p {font-size:20px;
			text-decoration: none;
    color: white;
    text-align: center;
    margin-bot: 100px;
    border-top:5px solid white;}
	#color {color:black;}
/*body{  text-color:white;
	background-image:url(background11.jpg);}
h1{
	color:blue;}
	
	#color{color:white; 
			margin:center;}
			#color{text-decoration:none;}
		#color:hover{color : red;}
	#tr {color:white;
	}
	table{ border-color:brown;}
	*/
    table, th, td{
        margin :auto 0;
        border:none;
        }
        table{
        border-collapse:none;
        }
    #td {
        width:1000px;
        }
</style>

</head>
<body>
<h1>Chi tiết cây</h1>
<?php 
$mact=$_GET['id'];
// echo $mact;
include "connect.php";
$data = $con->query("SELECT Tencay,Dacdiem,Loaicay,Cachchamsoc,Hinh,Motacay FROM db_trees WHERE Mact='$mact'");
$data = $data->fetch_assoc();
 echo "<form action= method=GET>";
	echo '<table frame="border" border=4  >';
	
    echo "<tr id='tr'>
       <td> <h2>Đặc điểm</h2></td>
        </tr>";
    echo "<tr id='tr'>
        <td id='td'>".$data['Dacdiem']."</td>
        </tr>";
    echo "<tr id='tr'>
        <td id='td'><img src='".$data['Hinh']."'height='300' width='300'></td>
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



$con->close();

?>


</body>
</html>