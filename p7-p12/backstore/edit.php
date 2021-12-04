<?php
	session_start();
	if(isset($_POST['edit'])){
		$orderlist = simplexml_load_file('../../Database/orderlist.xml');
		foreach($orderlist->order as $order){
			if($order->id == $_POST['id'] && $order->customer = $_POST['id']){

				$order->First_Name = $_POST['FN'];
				$order->Last_Name = $_POST['LN'];
				$order->Email = $_POST['EM'];
				$order->Contact = $_POST['PH'];
				$order->Address = $_POST['AD'];
				$order->products = $_POST['IT'];
				$order->Quantity = $_POST['Q'];
				$order->totalprice = $_POST['BL'];
				break;
			}
		}

		file_put_contents('../../Database/orderlist.xml', $orderlist->asXML());
		$_SESSION['message'] = 'Product updated successfully';
		header('location: Orders.php');


//		echo "<script>
//            window.location.href='Orders.php';
//            </script>";
	}
	else{
		$_SESSION['message'] = 'Select Product to edit first';
		header('location: Orders.php');
	}

?>
