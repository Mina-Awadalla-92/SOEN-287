<?php
	session_start();
	$id = $_GET['id'];

	$orderlist = simplexml_load_file('/Users/minaawadalla/Desktop/Concordia/SOEN 287 - Pope Shenouda /Assignment/Team-SOEN 287/SOEN-287/Database/orderlist.xml');

	//we're are going to create iterator to assign to each user
	$index = 0;
	$i = 0;

	foreach($orderlist->order as $order){
		if($order->id == $id){
			$index = $i;
			break;
		}
		$i++;
	}

	unset($orderlist->order[$index]);
	file_put_contents('/Users/minaawadalla/Desktop/Concordia/SOEN 287 - Pope Shenouda /Assignment/Team-SOEN 287/SOEN-287/Database/orderlist.xml', $orderlist->asXML());

	$_SESSION['message'] = 'Order deleted successfully';
	header('location: Orders.php');

?>