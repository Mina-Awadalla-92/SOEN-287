<?php



function addToCart()
{
    if(isset($_GET['productName'])){
    $productPage = new DOMDocument("1.0","UTF-8");
    $productPage -> load("../Database/products.xml");
    $nameTag = $productPage -> getElementsByTagName('name');
    
    $xml = new DOMDocument("1.0","UTF-8");
    $xml -> load("../Database/user.xml");

    $emailTag = $xml -> getElementsByTagName('email');
    if(isset($_GET['productName'])){
        
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
               echo $userTag->nodeValue;
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
           echo "<img src=\"". $imgTag. "\" alt=\";\"";
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

/*<tr>
                                        <td>
                                            <img src="https://www.washingtonpost.com/rf/image_982w/2010-2019/WashingtonPost/2020/08/13/Food/Images/v-howto-lobster_029.JPG" alt=" ;">
                                            <p>Lobster</p>
                                        </td>
                                        <td>
                                            <h6>$29.99/lb</h6>
                                        </td>
                                        <td>
                                            <input type="number" id="Lobster" class="shoppinginput" value="1" min="0">
                                        </td>
                                        <td>
                                            <span>$</span><output class="itemPrice">29.99</output>
                                            <button type="button" class="btn btn-dark btn1 remove"> Remove</button> &nbsp
                                        </td>
                                    </tr>*/






    

