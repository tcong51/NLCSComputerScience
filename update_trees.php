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
      ok=true;
		if(result)  {
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
       function notices_Describe(value){
	  var result = confirm("Are you sure?")
      ok=true;
		if(result)  {
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
    $Code = $_GET['Code'];

    include "connect.php";

    //require 'connect.php';
    
    $data = $con->query("SELECT Code FROM db_trees WHERE Code = '$Code'");
    $data = $data->fetch_assoc();
    
    echo "<div id='button'>
    <center>
    <th><button><a href='update_Characteristics.php?Code=".$data['Code']."' style='width:300px;height:100px;font-size: 30px;text-decoration: none;'>Sửa đặc điểm</a></th>
    <th><button><a href='update_HowToCare.php?Code=".$data['Code']."' style='width:300px;height:100px;font-size: 30px;text-decoration: none;'>Sửa cách chăm sóc</a></th>
    <th><button><a href='update_Describe.php?Code=".$data['Code']."' style='width:300px;height:100px;font-size: 30px;text-decoration: none;'>Sửa mô tả</a></th>
    </center>
    </div>";
    
?>
    
<div class="copyright">
	<p>© 2020 Admin.</p>
</div>
    </body>

</html>
