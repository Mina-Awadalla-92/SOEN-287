<?php



function addToCart()
{
    $productPage = new DOMDocument("1.0","UTF-8");
    $productPage -> load("../Database/products.xml");
    $nameTag = $productPage -> getElementsByTagName('name');
    
    $xml = new DOMDocument("1.0","UTF-8");
    $xml -> load("../Database/user.xml");
    $emailTag = $xml -> getElementsByTagName('email');
    if(isset($_GET['productName'])){
        if(contains($_GET['productName'])){
            return false;
        }
      for($i=0;$i<$nameTag->length;$i++){
          
       if($_GET['productName'] == $nameTag[$i]->nodeValue){
            echo $nameTag[$i]-> nodeValue;
           $img = $productPage -> getElementsByTagName('img')[$i] -> nodeValue;
            $price = $productPage -> getElementsByTagName('price')[$i] -> nodeValue;
           
       }
    }
      
        for($j=0;$j<$emailTag->length;$j++){
            if(strcasecmp($emailTag[$j]->nodeValue,$_SESSION['email'])==0){
                
                
               $userTag = $xml -> getElementsByTagName('user')->item($j);
               $cartTag = $xml-> getElementsByTagName('cart')[$j];
                $itemTag = $xml -> createElement('item');

             $productNameTag = $xml -> createElement('productName',  $_GET['productName']);
            $priceTag = $xml -> createElement('price',$price);
            $quantityTag = $xml -> createElement('quantity',1);
            $imgTag = $xml -> createElement('img',$img);
                

               $itemTag -> appendChild($productNameTag);
               $itemTag -> appendChild($imgTag);
               $itemTag -> appendChild($priceTag);
               $itemTag -> appendChild($quantityTag);
               $cartTag -> appendChild($itemTag);
               $userTag -> appendChild($cartTag);
               $xml->save("../Database/user.xml"); 
               
          }
        
       }
   }
    
}


function remove(){
    echo "test";
}



function contains($product) {
    $xml = new DOMDocument("1.0","UTF-8");
    $xml -> load("../Database/user.xml");
    $userTag = $xml -> getElementsByTagName("user");
    for($i=0;$i<$userTag->length;$i++){
        $emailTag = $userTag[$i] -> getElementsByTagName("email")[0]->nodeValue;
        if(strcasecmp($emailTag,$_SESSION['email'])==0){
            $cartTag = $userTag[$i] -> getElementsByTagName('cart')[0];
            $itemTag = $cartTag->getElementsByTagName('item');
            for($j=0;$j<$itemTag->length;$j++){
                $productNameTag = $itemTag[$j] -> getElementsByTagName('productName')[0];
                $quantityTag = $itemTag[$j]->getElementsByTagName('quantity')[0];
                $productN = $productNameTag -> nodeValue;
                $quantity = $quantityTag -> nodeValue;
                if($productN == $product){
                    $q = ((int) $quantity +1);
                    $quantityTag -> nodeValue = $q;
                    $xml->save("../Database/user.xml"); 
                    return true;
                }
            }
            return false;

}
}
}

function displayCart()
{
    $xml = new DOMDocument("1.0","UTF-8");
    $xml -> load("Database/user.xml");
    $rootTag = $xml -> getElementsByTagName("Users")->item(0);
    $userTag = $xml -> getElementsByTagName("user");
    
    
    
    for($i=0;$i<$userTag->length;$i++){
        $emailTag = $userTag[$i] -> getElementsByTagName("email")[0]->nodeValue;
        if(strcasecmp($emailTag,$_SESSION['email'])==0){
            $cartTag = $userTag[$i] -> getElementsByTagName('cart')[0];
            $itemTag = $cartTag->getElementsByTagName('item');
           
            
            
           
            for($j=0;$j<$itemTag->length;$j++){
           $productNameTag = $itemTag[$j] -> getElementsByTagName('productName')[0]->nodeValue;
           $priceTag = $itemTag[$j] -> getElementsByTagName('price')[0]->nodeValue;
            $imgTag = $itemTag[$j] -> getElementsByTagName('img')[0]->nodeValue;
            $quantityTag = $itemTag[$j] -> getElementsByTagName('quantity')[0]->nodeValue;
           echo "<td>";
           echo "<img src=\"". $imgTag. "\">";
            echo "<p>".$productNameTag."</p>";
           echo "</td>";
            echo "<td>";
           echo "<h6>".$priceTag."</h6>";
           echo "</td>";
           echo "<td>";
            echo "<input type=\"number\" class=\"shoppinginput\"  value=\"".$quantityTag ."\" min=\"0\">";
            echo"</td>";
            echo "<td>";
            echo "<span>$</span><output class=\"itemPrice\">".substr($priceTag,strpos($priceTag,"$")+1,strpos($priceTag,"/")-1)."</output>";
            echo "<button type=\"button\" class=\"btn btn-dark btn1 remove\"> Remove</button>";
            echo "</td>";
            echo "</tr>";

            }
    }
            
    }
}






    

