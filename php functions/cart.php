<?php

//$test = $productPage -> getElementsByTagName("button")[0];
//echo $test;

function addToCart()
{
    $productPage = new DOMDocument("1.0","UTF-8");
    $productPage -> load("../Database/products.xml");
    $rootTag = $productPage -> getElementsByTagName('productList')[0];
    $nameTag = $rootTag -> getElementsByTagName('name');

    $xml = new DOMDocument("1.0","UTF-8");
    $xml -> load("../Database/user.xml");
    $emailTag = $xml -> getElementsByTagName('email');

    if(isset($_GET['productName'])){
       for($i=0;$i<$nameTag->length;$i++){
           echo $nameTag[$i] -> nodeValue;
        if($_GET['productName'] == $nameTag[$i]->nodeValue){
            
            $img = $productPage -> getElementsByTagName('img')[$i];
            $price = $productPage -> getElementsByTagName('price')[$i];
           
        }
        for($i=0;$i<$emailTag->length;$i++){
            if($emailTag[$i] == $_SESSION['email']){
                echo $emailTag[$i]->nodeValue;
                $userTag = $xml -> getElementsByTagName('user')[$i];
                $cartTag = $xml-> getElementsByTagName('cart')[$i];

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
    }


}

function displayCart()
{
}

function add(){
    echo $_GET['productName'];
}


    

    
   
