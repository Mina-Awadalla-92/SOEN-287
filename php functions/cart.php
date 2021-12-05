<?php

//$test = $productPage -> getElementsByTagName("button")[0];
//echo $test;

function addToCart()
{
    $productPage = new DOMDocument("1.0","UTF-8");
    $productPage -> load("../Database/products.xml");
    $rootTag = $productPage -> getElementsByTagName('productList')->item(0);
    $nameTag = $productPage -> getElementsByTagName('name');
    
    $xml = new DOMDocument("1.0","UTF-8");
    $xml -> load("../Database/user.xml");
    $usersTag = $xml -> getElementsByTagName('Users')[0];
    $emailTag = $xml -> getElementsByTagName('email');
    if(isset($_GET['productName'])){
        
      for($i=0;$i<$nameTag->length;$i++){
          
       if($_GET['productName'] == $nameTag[$i]->nodeValue){
            echo $nameTag[$i]-> nodeValue;
           $img = $productPage -> getElementsByTagName('img')[$i];
            $price = $productPage -> getElementsByTagName('price')[$i];
           
       }
    }
      
        for($j=0;$j<$emailTag->length;$j++){
            if(strcasecmp($emailTag[$j]->nodeValue,$_SESSION['email'])==0){
                global $price;
                global $img;

               $userTag = $xml -> getElementsByTagName('user')[$j];
               $cartTag = $xml-> getElementsByTagName('cart')[$j];
                $itemTag = $xml -> createElement('item');


             $productName = $xml -> createElement('productName',  $_GET['productName']);
            $price = $xml -> createElement('price',$price);
               $img = $xml -> createElement('img',$img);
                

                $itemTag -> appendChild($productName);
               $itemTag -> appendChild($img);
               $itemTag -> appendChild($price);
               $cartTag -> appendChild($itemTag);
               $userTag -> appendChild($cartTag);
               
               
          }
        
       }
   }
     $xml->save("../Database/user.xml"); 

}

function displayCart()
{
}

function add(){
    echo $_GET['productName'];
}




    

?>