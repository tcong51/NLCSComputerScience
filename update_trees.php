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
function signup_mota(){
    var key= document.getElementById("search_mota").value;
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
function signup_cachchamsoc(){
    var key= document.getElementById("search_cachchamsoc").value;
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
       function notices_motacay(value){
	  var result = confirm("Are you sure?")
      ok=true;
		if(result)  {
		// 	var xmlhttp = new XMLHttpRequest();
	 	// 	xmlhttp.onreadystatechange = function() {
	   	// 	if (this.readyState == 4 && this.status == 200) {
		//  	document.getElementById("notices").innerHTML = this.responseText;
	   	// 		}
	 	// 	};
	 	// xmlhttp.open("GET",`input_update_motacay.php?id=${value}`,true);
	 	// xmlhttp.send();
            

		alert("You have updated! ");
        ok=true;
		} else {
            alert("You not updated! "); 
		     ok=false;    
                let action = document.getElementById("form_mt");
                    action.setAttribute("action", `update_trees.php`);
                   
                  window.location.reload(`update_trees.php?id=${value}`)
			   }
              
              
     return ok;
                   
   	}
    //    setcookie("$id", value, time()+20);
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
                    action.setAttribute("action", `update_trees.php`);
                   
                  window.location.reload(`update_trees.php?id=${value}`)
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

    //require 'connect.php';
    
    $data = $con->query("SELECT Mact, Tencay, Dacdiem, Loaicay, Cachchamsoc, Hinh, Motacay FROM db_trees WHERE Mact = '$mact'");
    $data = $data->fetch_assoc();
    
    echo "<div id='button'>
    <center>
    <th><button><a href='update_dacdiem.php?Mact=".$data['Mact']."' style='width:300px;height:100px;font-size: 30px;text-decoration: none;'>Sửa đặc điểm</a></th>
    <th><button><a href='update_cachchamsoc.php?Mact=".$data['Mact']."' style='width:300px;height:100px;font-size: 30px;text-decoration: none;'>Sửa cách chăm sóc</a></th>
    <th><button><a href='update_mota.php?Mact=".$data['Mact']."' style='width:300px;height:100px;font-size: 30px;text-decoration: none;'>Sửa mô tả</a></th>
    </center>
    </div>";
    
?>
    
<div class="copyright">
	<p>© 2020 Admin.</p>
</div>
    </body>

</html>
