<?php
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	include '../conn.php';	
	$rs  = $conn->query("select count(*) from customers");
	$row = $rs->fetch_assoc();
	 while(list($key,$val)=each($row)){
    $count = (int)$val;     
   }
  $result["total"] = $count;
	$rs = $conn->query ("select * from customers limit $offset,$rows");
	$items = array();
	while($row = $rs->fetch_assoc()){
		array_push($items, $row);
	}
	$result["rows"] = $items;

	echo json_encode($result);

?>