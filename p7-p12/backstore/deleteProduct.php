<?php
	session_start();
	$id = $_GET['id'];

	$productList = simplexml_load_file('../../Database/products.xml');

	//we're are going to create iterator to assign to each product
	$index = 0;
	$i = 0;

	foreach($productList->product as $product){
		if($product->id == $id){
			$index = $i;
			break;
		}
		$i++;
	}

	unset($productList->product[$index]);
	file_put_contents('../../Database/products.xml', $productList->asXML());

	$_SESSION['message'] = 'Product deleted successfully';
	header('location: backStore.php');

?>