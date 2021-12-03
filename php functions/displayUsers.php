<?php
 $xml = new DOMDocument("1.0","UTF-8");
 $xml -> load("../../Database/user.xml");
 $users = $xml->getElementsByTagName('user');
 for($i = 0; $i < $users->length; $i++){
     $fName = $xml->getElementsByTagName('firstName')[$i] -> nodeValue;
     $lName = $xml->getElementsByTagName('lastName')[$i]-> nodeValue;
     $email = $xml->getElementsByTagName('email')[$i]->nodeValue;
     $address = $xml->getElementsByTagName('address')[$i]-> nodeValue;
     $city = $xml->getElementsByTagName('city')[$i]-> nodeValue;
     $province = $xml->getElementsByTagName('province')[$i]-> nodeValue;
     $postalCode = $xml->getElementsByTagName('postalcode')[$i];
     echo "<tr>";
     echo "<th scope=\"row\">".$i."</th>";
     echo "<td><img src=\"user.jpg\"style=\"width: 50px; height: 50px;\"/></td>";
     echo "<td>".$fName."</td>";
     echo "<td>".$lName."</td>";
     echo "<td>".$email."</td>";
     echo "<td>".$email."</td>";
     echo "<td>".$address."</td>";
     echo "<td> <a href=\"EditUsers.php\" class=\"fa fa-edit\"></a></td>";
     echo "<td> <a href=\"deleteUser.php?deleteId=(put id variable here)\" class=\"fa fa-trash\"></a> </td>";
     echo " </tr>";
   
 }
 
 
            



?>