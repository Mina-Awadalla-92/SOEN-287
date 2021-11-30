<?php
$xml;
$a = 1;
function createAccount() {
    if(isset($_POST['signUp'])){
        
  $xml = new DOMDocument("1.0","UTF-8");
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
    global $xml;
   $emails = $xml -> getElementsByTagName('email');
   global $a;
   echo "<h1>".$a."test"."</h1>";
}
 


?>
