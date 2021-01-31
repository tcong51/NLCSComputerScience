<?php 

include "connect.php";

//Tìm từ khóa::
$key = $_GET['id'];
//echo $key;
$q = $_GET['id'];
$sql = $con->query("SELECT * FROM db_trees WHERE TreeName REGEXP '$key' ORDER BY Code DESC ");
foreach($sql as $value){
    echo"<a href =detail_trees.php?id=".$value['Code'].">".$value['TreeName']."</a></br>";
   echo "<p></p>";
   echo "</br>";
   echo "</br>";

}
echo "</br>";

$con->close();
?>