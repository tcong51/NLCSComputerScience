<!DOCTYPE html>
<html>
<head>
	<title>SEARCH PAGE</title>
    <meta charset="utf8">
	<link rel="stylesheet" href="searchpage.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div id="wrapper">
        <div id="header"></div>
        <div id="menu">
            <div class="topnav">
                <a class="active" href="testindex.php">Trang chủ</a>
                <a href="ds_trees_l1_homepage.php">Cây ăn quả</a>
                <a href="ds_trees_l2_homepage.php">Cây kiểng</a>
                <a href="ds_trees_l3_homepage.php">Cây dây leo</a>
                <a href="ds_trees_l4_homepage.php">Cây thân gỗ</a>
                <a href="ds_trees_l5_homepage.php">Cây thảo dược</a>
                <div class="search-container">
                    <form action="search_page.php" method ="GET" onsubmit="return signup()">
                    <input type="text" placeholder="Tìm kiếm.." name="search" onkeyup="showResult(this.value)">
                    <button type="submit"><i class="fa fa-search"></i></i></button>
                     <div id="show" onclick="showss(this.value)"></div> 
                     </form>
                    
                   
                  
                   
                </div>
            </div>

	</div>
	<div id="content">
	<?php 
$search=$_GET['search'];
//$search_change = strtolower($search);

$search_change= mb_strtolower($search, 'UTF-8');
echo "Từ khóa : $search";
	echo "</br>";
	echo "Kết quả tìm kiếm :";
	echo "</br>";
	//echo $search;
	//$search_change= utf8convert(utf8tourl($search));
	//  echo $search_change;
	
// LỖI	//tên::
	$a=[];
	$b=[];	
		   // Kết nối sql
		   include "connect.php";
		   foreach ($sql = $con->query("SELECT Tencay FROM db_trees") as $value){

			array_push($a,$value['Tencay']);
		   //ajax <a> xem chi tiet truyền tham số id thẳng
			  }
			  foreach($a as $name) { 
				if (stristr($name,$search_change )) {
					array_push($b,$name);
					 }}
					 
				foreach($b as $name1){
                    
                    $sql = $con->query("SELECT * FROM db_trees WHERE Tencay='$name1'");
					$sql = $sql->fetch_assoc();
					
                    echo '<table frame="border" border=1 align = "center">'.
                    '<tr id="tr">'.
						
						'<td><img src='.$sql['Hinh'].'></td>'.
						'<td id="name" align = "center">'.$name1.'</td>'.
                        '<td>'."<a href=detail_trees.php?id=".$sql['Mact']."> Link-truy-cập </a>".'</td>'.
                    '</tr >'.
                    
                '</table>';}
					 
			// Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
			//$data = $connect->query("SELECT * FROM caytrong WHERE tencay='$search' "); 
		   // Thực thi câu truy vấn
		   //$data=$connect->query($sql);
		  // $value = $data->fetch_assoc();
		  // if (array_key_exists($search_change, $a)) {
			
	$con->close();

?>
</div>  
</body>

</html>