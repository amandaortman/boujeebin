<?php

include('prod_values.php');


if (!isset($_GET['id'])) {
    //header to products page
    echo "<p>This product does not exist or is no longer in inventory. Please check back later.</p>";
} else {

    $productID = $_GET['id'];

    $sql = "SELECT PK, prodName, prodBrand, prodDesc, prodCat, prodSKU, prodStock, prodSale, prodPrice, prodImg, prodWeightLBS, gender, color, size FROM products WHERE PK=$productID";

    $result = mysqli_query($dbc, $sql);

    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {
            echo "<img src=\"https://students.cah.ucf.edu/~am921588/dig4530c/assignments/ia02/img/" . $row['prodImg'] . "\" alt=\"" . $row['prodBrand'] . " " . $row['prodName'] . "\">";
            echo "</div>
            <div class=\"middle aligned eight wide computer column sixteen wide tablet sixteen wide mobile\">
                <h3 class=\"ui header\">" . $row['prodName'] . "</h3>
                <div class=\"ui rating\" data-rating=\"3\" data-max-rating=\"5\">
                    <i class=\"icon\"></i>
                    <i class=\"icon\"></i>
                    <i class=\"icon\"></i>
                    <i class=\"icon\"></i>
                    <i class=\"icon\"></i>
                </div>";

                echo "<h4 class=\"ui header\">"; 

                if ($row['prodStock'] > 0) {
                    echo "In stock";
                } else {
                    echo "Sold out";
                }
                
                echo"</h4>";
                
                echo "<h4 class=\"ui header\">" . $row['prodPrice'] . "</h4>";
                
                echo "<h4 class=\"ui header\">" . $row['prodBrand'] . "</h4>";
                echo "<p>" . $row['prodDesc'] . "</p>";
                // echo "<button class=\"ui primary button addToCartSingle\"  >Add to Cart</button>";   
                
                echo "<form target=\"paypal\" action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\">
                    <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                    <input type=\"hidden\" name=\"hosted_button_id\" value=\"
                    
                    $prodPrice

                    
                    \">
                    <table>
                    <tr><td><input type=\"hidden\" name=\"on0\" value=\"Choose a size\">Choose a size</td></tr><tr><td><select name=\"os0\">
                        <option value=\"Small\">Small </option>
                        <option value=\"Medium\">Medium </option>
                        <option value=\"Large\">Large </option>
                    </select> </td></tr>
                    </table>
                    
                    <button name=\"submit\" class=\"ui primary button\" style=\"margin-top: 20px;\">Add to Cart</button>
                    <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/en_US/i/scr/pixel.gif\" width=\"1\" height=\"1\">
                    </form>" ;


        }

    } else {
        echo "<p>There are 0 products in inventory</p>";
    }

}
?>
