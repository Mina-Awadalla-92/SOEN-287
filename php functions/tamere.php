<?php
  

  $rootTag = $xml -> getElementsByTagName("user")->item(0);
  $cartTag = $xml-> getElementsByTagName('cart');


  $itemTag = $xml -> createElement('item');


  $productName = $xml -> createElement('productName',  $_POST['']);
  $price = $xml -> createElement('price', $_POST['']);
  $img = $xml -> createElement('img', $_POST['']);
  

  $itemTag -> appendChild($productName);
  $itemTag -> appendChild($img);
  $itemTag -> appendChild($price);
  

  $rootTag -> appendChild($userTag);
  $_SESSION['first'] = $_POST['firstName'];
  $xml->save("../Database/user.xml"); 
 

?>