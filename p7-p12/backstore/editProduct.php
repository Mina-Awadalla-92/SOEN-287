<?php
	session_start();
	if(isset($_POST['edit'])){
		$productList = simplexml_load_file('../../Database/products.xml');
		foreach($productList->product as $product){
			if($product->id == $_POST['id']){

				$product->name = $_POST['name'];
                $product->img = $_POST['image'];
                $product->available = $_POST['stock'];
                $product->price = $_POST['price'];
				break;
			}
		}

		file_put_contents('../../Database/products.xml', $productList->asXML());
		$_SESSION['message'] = 'Product updated successfully';
		header('location: backStore.php');


//		echo "<script>
//            window.location.href='products.php';
//            </script>";
	}
	else{
		$_SESSION['message'] = 'Select Product to edit first';
		header('location: products.php');
	}

?>
