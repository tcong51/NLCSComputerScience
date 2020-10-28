<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head>
        <title>Sửa sản phẩm</title>
        <meta charset="utf8">
        <link href="css/update_trees.css" rel="stylesheet" type="text/css" />
    </head>
    <script>
    function notices_dacdiem(value){
	  var result = confirm("Are you sure?")
      ok=true;
		if(result)  {
			var xmlhttp = new XMLHttpRequest();
	 		xmlhttp.onreadystatechange = function() {
	   		if (this.readyState == 4 && this.status == 200) {
		 	document.getElementById("notices").innerHTML = this.responseText;
	   			}
	 		};
	 	xmlhttp.open("GET",`input_update_dacdiem.php?id=${value}`,true);
	 	xmlhttp.send();
		alert("You have updated! ");
        ok=true;
        
		} else {
				
                
                
		        alert("You not updated! "); 
                window.location.reload();   
			   }
                   
	 
   	}
       function notices_cachchamsoc(value){
	  var result = confirm("Are you sure?")
		if(result)  {
			var xmlhttp = new XMLHttpRequest();
	 		xmlhttp.onreadystatechange = function() {
	   		if (this.readyState == 4 && this.status == 200) {
		 	document.getElementById("notices").innerHTML = this.responseText;
	   			}
	 		};
	 	xmlhttp.open("GET",`input_update_cachchamsoc.php?id=${value}`,true);
	 	xmlhttp.send();
		alert("You have updated! ");
		} else {
				alert("You have not updated!");
                location.reload();
			   }
              
               
   	}
       function notices_motacay(value){
	  var result = confirm("Are you sure?")
      
		if(result)  {
			var xmlhttp = new XMLHttpRequest();
	 		xmlhttp.onreadystatechange = function() {
	   		if (this.readyState == 4 && this.status == 200) {
		 	document.getElementById("notices").innerHTML = this.responseText;
	   			}
	 		};
	 	xmlhttp.open("GET",`input_update_motacay.php?id=${value}`,true);
	 	xmlhttp.send();
            

		alert("You have updated! ");
		} else {
                     alert("You have not updated!");
                    
			   }
                   
   	}
       
    </script>
    <body>


    <div class="header">
		<div class="header-main">
               <h1>ADMIN PAGE </h1>
        </div>
    </div>
        <div id="notices"></div>

    
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


    /* Update hình ảnh cần kiểm tra nếu cần */
    // echo '<form action=input_update_hinh.php method="GET">';
    // echo '<input type="hidden" name="Mact" value='.$data['Mact'].'>';
    // echo '<img src='.$data['Hinh'].' alt="hinhsanpham" width = "25%">'.'<br>';
    // echo '<input type="file" name="Hinh">';
    /*Update - Đặc điểm*/


    echo '<div class="body">';
    echo '<hr>';
    echo '<hr>';
    echo '<br>';
    echo '<br>';
    echo '<h1 >Đặc điểm</h1>';
    echo '<br>';
    echo '<form action=input_update_dacdiem.php method="GET" >';
    echo '<table width="1500" cellspacing="0" cellpadding="1" border="2" align="center">' ;
    echo '<input type="hidden" name="Mact" value='.$data['Mact'].'>';
    echo "<tr>
        <td><h2 style='width: 200px;' >Nội dung hiện tại</h2></td>
        <td id='location' style='width: 1300px;'>".$data['Dacdiem']."</td>;
        
    </tr>";
    echo "<tr>
        <td><h2>Điền nội dung cần sửa</h2></td>
        <td><textarea rows='5' cols='0' placeholder='Đây là vùng nhập text' name='Dacdiem' style='width: 1000px;height: 200px;'></textarea></td>

    </tr>";
    echo "<tr>
        <td colspan='2' ><input type='submit' value=' Xác nhận ' onclick=notices_dacdiem(".$data['Mact'].") style='width:200px;height: 30px;' ></td>
    </tr>";
   
    echo '</table>';
    echo '</form>';
    echo '</br>';
    echo '</br>';
    echo '</br>';
    echo '</br>';


    /*Update - Cách chăm sóc*/
    echo '<hr>';
    echo '<hr>';
    echo '<br>';
    echo '<br>';
    echo '<h1>Cách chăm sóc</h1>';
    echo '<br>';
    echo '<div class="form">';
    echo '<form action=input_update_cachchamsoc.php method="GET"  >';
    echo '<table width="1500" cellspacing="0" cellpadding="1" border="2" align="center">' ;
    echo '<input type="hidden" name="Mact" value='.$data['Mact'].'>';
    echo "<tr class='tr'>
        <td><h2 style='width: 200px;' >Nội dung hiện tại</h2></td>
        <td id='location' style='width: 1300px;'>".$data['Cachchamsoc']."</td>;
        
    </tr>";
    echo "<tr class='tr'>
        <td><h2>Điền nội dung cần sửa</h2></td>
        <td><textarea rows='5' cols='0' placeholder='Đây là vùng nhập text' name='Cachchamsoc' style='width: 1000px;height: 200px;'></textarea></td>

    </tr>";
    echo "<tr>
        <td colspan='2' ><input type='submit' value=' Xác nhận ' onclick=notices_cachchamsoc(".$data['Mact'].") style='width:200px;height: 30px;' ></td>
    </tr>";
   
    echo '</table>';
    echo '</form>';
    echo '</div>';
    echo '</br>';
    echo '</br>';
    echo '</br>';
    echo '</br>';
    
    /*Update - Mô tả*/
    echo '<hr>';
    echo '<hr>';
    echo '<br>';
    echo '<br>';
    echo '<h1>Mô tả</h1>';
    echo '<br>';
    echo '<form action=input_update_motacay.php method="GET" >';
    echo '<table width="1500" cellspacing="0" cellpadding="1" border="2" align="center">' ;
    echo '<input type="hidden" name="Mact" value='.$data['Mact'].'>';
    echo "<tr>
        <td><h2 style='width: 200px;' >Nội dung hiện tại</h2></td>
        <td id='location' style='width: 1300px;'>".$data['Motacay']."</td>;
        
    </tr>";
    echo "<tr>
        <td><h2>Điền nội dung cần sửa</h2></td>
        <td><textarea rows='5' cols='0' placeholder='Đây là vùng nhập text' name='Motacay' style='width: 1000px;height: 200px;'></textarea></td>

    </tr>";
    echo "<tr>
        <td colspan='2' ><input type='submit' value=' Xác nhận ' onclick=notices_motacay(".$data['Mact'].") style='width:200px;height: 30px;' ></td>
    </tr>";
   
    echo '</table>';
    echo '</form>';
    echo '</br>';
    echo '</br>';
    echo '</br>';
    echo '</br>';
    echo '<hr>';
    echo '<hr>';
    echo'</div>';
    $con->close();
?>

<div class="copyright">
	<p>© 2020 Admin.</p>
</div>
    </body>

</html>
