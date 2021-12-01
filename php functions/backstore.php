<?php
ob_start();
$accCreated;
  $xml = new DOMDocument("1.0","UTF-8");
function createAccount() {
    if(isset($_POST['signUp'])){
        
  global $xml;
  $xml -> load("../Database/user.xml");

  $rootTag = $xml -> getElementsByTagName("Users")->item(0);
  $userTag = $xml -> createElement('user');

  $nameTag = $xml -> createElement('firstName',  $_POST['firstName']);
  $lNameTag = $xml -> createElement('lastName', $_POST['lastName']);
  $addresTag = $xml -> createElement('address', $_POST['address']);
  $cityTag = $xml -> createElement('city', $_POST['city']);
  $provTag = $xml -> createElement('province', $_POST['province']);
  $postalTag = $xml -> createElement('postalCode', $_POST['postalCode']);
  $emailTag = $xml -> createElement('email', $_POST['email']);
  $passwrodTag = $xml -> createElement('password', $_POST['password']);
  
  $userTag -> appendChild($nameTag);
  $userTag -> appendChild($lNameTag);
  $userTag -> appendChild($addresTag);
  $userTag -> appendChild($cityTag);
  $userTag -> appendChild($provTag);
  $userTag -> appendChild($postalTag);
  $userTag -> appendChild($emailTag);
  $userTag -> appendChild($passwrodTag);
  
  $rootTag -> appendChild($userTag);

  $xml->save("../Database/user.xml"); 
 }
}
 
function checkAcc() {
  global $accCreated;
  global $xml;
  $xml -> load("../Database/user.xml");
  $emails = $xml -> getElementsByTagName('email');
  if(isset($_POST['signUp'])){
  foreach ($emails as $key => $value){
    if ( $_POST['email'] == $value -> nodeValue){
     //$accCreated = false;
     //$_SESSION['accExist'] = "false";
     //if($_SESSION['accExist'] = "false"){
       //header('location: ../Aisle/login.php');
      // exit();
      return false;
     }
    
      $_SESSION['first'] = $_POST['firstName'];
      $_SESSION['accExist'] = "true";
      $accCreated = true;
       createAccount();
     
     
    
}


  }


}
 


?>
