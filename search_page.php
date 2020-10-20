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
                    
                    $sql = $con->query("SELECT Mact FROM db_trees WHERE Tencay='$name1'");
                    $sql = $sql->fetch_assoc();
                    echo '<table frame="border" border=4 >'.
                    '<tr id="tr">'.
                        '<td>'.$name1.'</td>'.
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