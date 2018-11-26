<?php

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
                echo "<button class=\"ui primary button addToCartSingle\"  data-id=\"" . $row['PK'] . "\">Add to Cart</button>";            

        }

    } else {
        echo "<p>There are 0 products in inventory</p>";
    }

}
?>
