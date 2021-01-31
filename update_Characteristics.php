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



    function signup_Characteristics(){
    var key= document.getElementById("search_Characteristics").value;
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


    
    function notices_Characteristics(value){
        
        
	  var result = confirm("Are you sure?")
      ok=true;
		if(result)  {
	
		alert("You have updated! ");
        ok=true;
        
		} else {
            alert("You not updated! "); 
		     ok=false;    
                let action = document.getElementById("form_dd");
                    action.setAttribute("action", `update_Characteristics.php`);
                   
                  window.location.reload(`update_Characteristics.php?id=${value}`)
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
    echo '<div class="body">';
    echo '<hr>';
    echo '<hr>';
    echo '<br>';
    echo '<br>';
    echo '<h1 >Đặc điểm</h1>';
    echo '<br>';
    echo '<form  action=input_update_Characteristics.php method="GET"  onsubmit="return signup_Characteristics()" id=form_dd>';
    echo '<table width="1280" cellspacing="0" cellpadding="1" border="2" align="center" style="background: azure;">' ;
    echo '<input type="hidden" name="Code" value='.$data['Code'].'>';
    echo "<tr>
        <td><h2 style='width: 200px;' >Nội dung hiện tại</h2></td>
        <td id='location' style='width: 1300px;'>".$data['Characteristics']."</td>;
        
    </tr>";
    echo "<tr>
        <td><h2>Điền nội dung cần sửa</h2></td>
        <td><textarea rows='5' cols='0' id='search_Characteristics' placeholder='Đây là vùng nhập text' name='Characteristics' style='width: 1070px;height: 200px;'></textarea></td>

    </tr>";
    echo "<tr>
        <td colspan='2' ><center><input type='submit' value=' Xác nhận ' onclick=notices_Characteristics(".$data['Code'].") style='width:200px;height: 30px;' ></center></td>
    </tr>";
   
    echo '</table>';
    echo '</form>';
    echo '</br>';
    
   
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
