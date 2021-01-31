<!DOCTYPE html>
<html>
  <head>
  <style>
  /* #id{display : none ;
    
  } */
  #lid{text_align:left;}
  </style>
  </head>
  <body>
  
<?php 
function convert_vi_to_en($str) {
      $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
      $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
      $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
      $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
      $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
      $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
      $str = preg_replace("/(đ)/", "d", $str);
      $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
      $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
      $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
      $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
      $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
      $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
      $str = preg_replace("/(Đ)/", "D", $str);
      //$str = str_replace(" ", "-", str_replace("&*#39;","",$str));
      return $str;
  }
$a[]="";
$b[]="";
include "connect.php";
//$ff= convert_vi_to_en("Kiệt");
//echo $ff;

foreach ($sql = $con->query("SELECT * FROM db_trees") as $value){

  array_push($a,$value['Code']);
 
    }
	foreach ($sql = $con->query("SELECT * FROM db_trees") as $value1){
		
  array_push($b,strtolower(convert_vi_to_en($value1['TreeName'])));


    }
  $c=array_combine($a,$b);
 
	// foreach ($c as $key=>$value1){
  //   echo $value1;
   
  

  //  }

// Tìm từ khóa::
$q = $_GET['id'];
$key=convert_vi_to_en($q);
$hint = "";
// lookup all hints from array if $q is different from ""
if ($key !== "") {
  //$q = strtolower($q);
  $len=strlen($key);

  foreach($c as $key1=>$name) {
    
    if (stristr($name,$key )) {
      // echo $key1;
      if ($hint === "") {
		$sql = $con->query("SELECT * FROM db_trees WHERE Code ='$key1'");
		$sql = $sql->fetch_assoc();
        $hint = "<a href=detail_trees.php?id=".$sql['Code']."> ".$sql['TreeName']." </a></br></br>";
      }
       else {
        $sql = $con->query("SELECT * FROM db_trees WHERE Code ='$key1'");
		$sql = $sql->fetch_assoc();
       
        $hint .="</br><a href=detail_trees.php?id=".$sql['Code']." id='lid' > ".$sql['TreeName']." </a></br></br>";
      }
     
     
    }
    
  }


}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "Không tìm thấy" : $hint;
$con->close();
?>
<body>
</hmtl>