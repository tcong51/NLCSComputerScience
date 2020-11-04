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



    function signup_dacdiem(){
    var key= document.getElementById("search_dacdiem").value;
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


    
       function notices_cachchamsoc(value){
	  var result = confirm("Are you sure?")
      ok=true;
		if(result)  {
		// 	var xmlhttp = new XMLHttpRequest();
	 	// 	xmlhttp.onreadystatechange = function() {
	   	// 	if (this.readyState == 4 && this.status == 200) {
		//  	document.getElementById("notices").innerHTML = this.responseText;
	   	// 		}
	 	// 	};
	 	// xmlhttp.open("GET",`input_update_cachchamsoc.php?id=${value}`,true);
	 	// xmlhttp.send();
         ok=true;
		alert("You have updated! ");
		} else {
            alert("You not updated! "); 
		     ok=false;    
                let action = document.getElementById("form_ccs");
                    action.setAttribute("action", `update_trees.php`);
                   
                  window.location.reload(`update_trees.php?id=${value}`)
			   }
              
              
     return ok;
              
               
   	}
      
    
       function notices_dacdiem(value){
        
        
	  var result = confirm("Are you sure?")
      ok=true;
		if(result)  {
		// 	var xmlhttp = new XMLHttpRequest();
	 	// 	xmlhttp.onreadystatechange = function() {
	   	// 	if (this.readyState == 4 && this.status == 200) {
		//  	document.getElementById("notices").innerHTML = this.responseText;
	   	// 		}
	 	// 	};
	 	// xmlhttp.open("GET",`input_update_dacdiem.php?id=`,true);
	 	// xmlhttp.send();
		alert("You have updated! ");
        ok=true;
        
		} else {
            alert("You not updated! "); 
		     ok=false;    
                let action = document.getElementById("form_dd");
                    action.setAttribute("action", `update_dacdiem.php`);
                   
                  window.location.reload(`update_dacdiem.php?id=${value}`)
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
    $mact = $_GET['Mact'];
    include "connect.php";

    $data = $con->query("SELECT Mact, Tencay, Dacdiem, Loaicay, Cachchamsoc, Hinh, Motacay FROM db_trees WHERE Mact = '$mact'");
    $data = $data->fetch_assoc();
    echo '<div class="body">';
    echo '<hr>';
    echo '<hr>';
    echo '<br>';
    echo '<br>';
    echo '<h1 >Đặc điểm</h1>';
    echo '<br>';
    echo '<form  action=input_update_dacdiem.php method="GET"  onsubmit="return signup_dacdiem()" id=form_dd>';
    echo '<table width="1280" cellspacing="0" cellpadding="1" border="2" align="center" style="background: azure;">' ;
    echo '<input type="hidden" name="Mact" value='.$data['Mact'].'>';
    echo "<tr>
        <td><h2 style='width: 200px;' >Nội dung hiện tại</h2></td>
        <td id='location' style='width: 1300px;'>".$data['Dacdiem']."</td>;
        
    </tr>";
    echo "<tr>
        <td><h2>Điền nội dung cần sửa</h2></td>
        <td><textarea rows='5' cols='0' id='search_dacdiem' placeholder='Đây là vùng nhập text' name='Dacdiem' style='width: 1070px;height: 200px;'></textarea></td>

    </tr>";
    echo "<tr>
        <td colspan='2' ><center><input type='submit' value=' Xác nhận ' onclick=notices_dacdiem(".$data['Mact'].") style='width:200px;height: 30px;' ></center></td>
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
