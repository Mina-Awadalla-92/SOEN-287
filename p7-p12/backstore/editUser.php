<?php
	if(isset($_POST['edit'])){

		$userList = simplexml_load_file('../../Database/user.xml');
		foreach($userList->user as $user){
			if($user->id == $_POST['id']){
				$user->firstName = $_POST['FN'];
				$user->lastName = $_POST['LN'];
				$user->contact = $_POST['CN'];
				$user->address = $_POST['AD'];
				$user->city = $_POST['CT'];
				$user->province = $_POST['PR'];
				$user->postalCode = $_POST['PC'];
				$user->email = $_POST['EM'];
				$user->password = $_POST['PW'];
				break;
			}
		}

		file_put_contents('../../Database/user.xml', $userList->asXML());
		$_SESSION['message'] = 'User updated successfully';
		header('location: Users.php');


//		echo "<script>
//            window.location.href='products.php';
//            </script>";
	}
	else{
		$_SESSION['message'] = 'Select Product to edit first';
		header('location: Users.php');
	}

?>



