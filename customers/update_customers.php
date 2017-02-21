
<?php
$id = intval($_REQUEST['id']);
$customer_id = $_REQUEST['customer_id'];
$customer_name = $_REQUEST['customer_name'];
$customer_type = $_REQUEST['customer_type'];
$customer_level = $_REQUEST['customer_level'];

include '../conn.php';	

$sql = "update customers set  customer_id='$customer_id',customer_name='$customer_name',
customer_type='$customer_type',customer_level='$customer_level'
 where id=$id";

$result = $conn->query ($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>



