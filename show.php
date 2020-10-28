<?php 
$a[]="";
include "connect.php";
foreach ($sql = $con->query("SELECT Tencay FROM db_trees") as $value){

  array_push($a,$value['Tencay']);
 //ajax <a> xem chi tiet truyền tham số id thẳng
    }
//Tìm từ khóa::
$key = $_GET['id'];
//echo $q;
$hint = "";
$sql = $con->query("SELECT * FROM db_trees WHERE Tencay REGEXP '$key' ORDER BY Mact DESC ");
foreach($sql as $value){
    echo"<a href =detail_trees.php?id=".$value['Mact'].">".$value['Tencay']."</a></br>";
   echo "<p></p>";
   echo "</br>";
   echo "</br>";

}
echo "</br>";



// // lookup all hints from array if $q is different from ""
// if ($q !== "") {
//   //$q = strtolower($q);
//   $len=strlen($q);
//   foreach($a as $name) {
//     if (stristr($name,$q )) {
      
//       if ($hint === "") {
//         $sql = $con->query("SELECT Mact FROM db_trees WHERE Tencay='$name'");
//         $sql = $sql->fetch_assoc();
//         $hint = "<a href=detail_trees.php?id=".$sql['Mact']."> ".$name." </a> ";
            
//       } 
//     else {
//         $sql = $con->query("SELECT Mact FROM db_trees WHERE Tencay='$name'");
//         $sql = $sql->fetch_assoc();
//      $hint .= "</br>

//       <a href=detail_trees.php?id=".$sql['Mact']."> ".$name." </a></br>";
       
//       }
     
//     }
//   }


// }
// Output "no suggestion" if no hint was found or output correct values
// echo $hint === "" ? "Không tìm thấy" : $hint;
$con->close();
?>