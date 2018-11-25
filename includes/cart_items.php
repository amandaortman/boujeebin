<?php

if (isset($_SESSION['cart'])) {


    $_SESSION['total_cart_price'] = array();

    $cartArray = $_SESSION['cart'];

    $itemCount = array_count_values($cartArray);

    foreach($itemCount as $key => $value) {
        //key is ID value is Count
 
        $sql = "SELECT PK, prodName, prodBrand, prodDesc, prodCat, prodSKU, prodStock, prodSale, prodPrice, prodImg, prodWeightLBS, gender, color, size FROM products WHERE PK=$key";

        $result = mysqli_query($dbc, $sql);       

        if (mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {
                
                $price = $row['prodPrice'];
                $price = preg_replace('/[\$,]/', '', $price);
                $total_quan = ($price * $value); 

                array_push($_SESSION['total_cart_price'], $total_quan);

                echo "
                    <!--ONE ITEM-->
                    <div class=\"one column row\">
                        <div class=\"column\">					
                            <div class=\"ui grid\">

                                <div class=\"four column row computer only\">
                                    <div class=\"middle aligned left aligned eight wide computer column computer only\">
                                        <div class=\"ui divided items\">
                                            <div class=\"item\">
                                                <div class=\"image\">
                                                    <img class=\"ui fluid image\" src=\"https://students.cah.ucf.edu/~am921588/dig4530c/assignments/ia02/img/" . $row['prodImg'] . "\" alt=\"" . $row['prodBrand'] . " " . $row['prodName'] . "\">
                                                </div>
                                                <div class=\"content\">
                                                    <a class=\"header\">" . $row['prodName'] ."</a>
                                                    <div class=\"description\">
                                                        <p>" . $row['color'] . "</p>
                                                        <p>" . $row['size'] . "</p>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"middle aligned center aligned two wide computer column computer only\">
                                        <span class=\"ui header\">" .   $row['prodPrice']  . "</span>
                                    </div>

                                    <div class=\"middle aligned center aligned two wide computer column computer only\">										
                                        <i class=\"minus icon q-cart\"></i><span class=\"ui header\"> " . $value . " </span><i class=\"plus icon q-cart\"></i>										
                                    </div>

                                    <div class=\"middle aligned center aligned two wide computer column computer only\">
                                        <span class=\"ui header\">"  . "&#36;" .  ($total_quan)  .   "</span>
                                    </div>

                                    <div class=\"middle aligned right aligned two wide computer column computer only\">
                                        <i class=\"close icon deleteProduct\" data-id=\"" . $row['PK'] . "\"></i>
                                    </div>	
                                </div>

                                
                                <!--MOBILE/TABLET-->
                                <div class=\"one column row mobile only tablet only\">
                                    <div class=\"middle aligned left aligned sixteen wide column mobile only tablet only\">
                                        <div class=\"ui divided items\">
                                            <div class=\"item\">
                                                <div class=\"image\">
                                                    <img class=\"ui fluid image\" src=\"https://students.cah.ucf.edu/~am921588/dig4530c/assignments/ia02/img/" . $row['prodImg'] . "\" alt=\"" . $row['prodBrand'] . " " . $row['prodName'] . "\">
                                                </div>
                                                <div class=\"content\">
                                                    <a class=\"header\">" . $row['prodName'] ."</a>
                                                    <div class=\"description\">
                                                        <p>" . $row['color'] . "</p>
                                                        <p>" . $row['size'] . "</p>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"one column row mobile only tablet only\">
                                    <div class=\"middle aligned center aligned sixteen wide computer column\">
                                        <span class=\"ui header\">" .   $row['prodPrice']  . "</span>
                                    </div>

                                    <div class=\"middle aligned center aligned sixteen wide computer column\">										
                                        <i class=\"minus icon q-cart\"></i><span class=\"ui header\"> " . $value . " </span><i class=\"plus icon q-cart\"></i>										
                                    </div>

                                    <div class=\"middle aligned center aligned sixteen wide computer column\">
                                        <span class=\"ui header\">" . "&#36;" .  ($total_quan)  .   "</span>
                                    </div>		

                                    <div class=\"middle aligned right aligned sixteen wide computer column\">
                                        <br>
                                        <button class=\"ui fluid button\">Remove Item</button>
                                    </div>	
                                </div>

                            </div>
                        </div>
                    </div>	

                    <div class=\"ui divider\"></div>
                    <!--END ITEM-->
            ";           
            }
    
        } 

    }


}

?>   

