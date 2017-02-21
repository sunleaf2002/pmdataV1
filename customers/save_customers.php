<?php

$customer_id = $_REQUEST['customer_id'];
$customer_name = $_REQUEST['customer_name'];
$customer_type = $_REQUEST['customer_type'];
$customer_level = $_REQUEST['customer_level'];
/*
$customer_id = 'a';
$customer_name = 'a';
$customer_type = '1';
$customer_level = '1';*/
include '../conn.php';	

$sql = "insert into customers(customer_id,customer_name,customer_type,customer_level )
 values('$customer_id','$customer_name','$customer_type','$customer_level')";
echo $sql;
$result = $conn->query ($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>