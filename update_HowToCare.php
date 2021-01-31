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
        <title>Sửa sản phẩm</title>
        <meta charset="utf8">
        <link href="css/update_trees.css" rel="stylesheet" type="text/css" />
    </head>

    <script>

function signup_HowToCare(){
    var key= document.getElementById("search_HowToCare").value;
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
    
       function notices_HowToCare(value){
	  var result = confirm("Are you sure?")
		if(result)  {
	 	xmlhttp.send();
		alert("You have updated! ");
		} else {
            alert("You not updated! "); 
		     ok=false;    
                let action = document.getElementById("form_ccs");
                    action.setAttribute("action", `update_HowToCare.php`);
                   
                  window.location.reload(`update_HowToCare.php?id=${value}`)
			   }
              
              
     return ok;
                  
   	}

    </script>
    <body>
    <div class="btn">
    <input type="button" value="Back" onclick="history.go(-1);" style="width: 120px;height: 50px;">
        <br>
    <button class="input1" onclick="window.location.href='ds_trees.php'" style="width:120px;height:50px;position: absolute;">Danh sách cây</button>
        </div>

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
    $Code = $_GET['Code'];
    include "connect.php";

    $data = $con->query("SELECT * FROM db_trees WHERE Code = '$Code'");
    $data = $data->fetch_assoc();


    echo '<hr>';
    echo '<hr>';
    echo '<h1>Cách chăm sóc</h1>';
    echo '<div class="form">';
    echo '<form action=input_update_HowToCare.php method="GET" onsubmit="return signup_HowToCare()" id=form_ccs >';
    echo '<table width="1280" cellspacing="0" cellpadding="1" border="2" align="center" style="background: azure;">' ;
    echo '<input type="hidden" name="Code" value='.$data['Code'].'>';
    echo "<tr class='tr'>
        <td><h2 style='width: 200px;' >Nội dung hiện tại</h2></td>
        <td id='location' style='width: 1300px;'>".$data['HowToCare']."</td>;
        
    </tr>";
    echo "<tr class='tr'>
        <td><h2>Điền nội dung cần sửa</h2></td>
        <td><textarea rows='5' cols='0' id='search_HowToCare' placeholder='Đây là vùng nhập text' name='HowToCare' style='width: 1070px;height: 200px;'></textarea></td>

    </tr>";
    echo "<tr>
        <td colspan='2' ><center><input type='submit' value=' Xác nhận ' onclick=notices_HowToCare(".$data['Code'].") style='width:200px;height: 30px;' ></center></td>
    </tr>";
   
    echo '</table>';
    echo '</form>';
    echo '</div>';
    echo '</br>';
    echo '</br>';
    
    
    $con->close();
?>

<div class="copyright">
	<p>© 2020 Admin.</p>
</div>
    </body>

</html>
