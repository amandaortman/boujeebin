<?php
$sql = "SELECT PK, prodName, prodBrand, prodDesc, prodCat, prodSKU, prodStock, prodSale, prodPrice, prodImg, prodWeightLBS, gender, color, size FROM products";
$result = mysqli_query($dbc, $sql);
echo "<div class=\"ui link three doubling cards\">";
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class=\"card\">";
            echo "<div class=\"image\">";
                echo "<a class=\"image\" href=\"product.php?id=" . $row['PK'] . "\"><img class=\"ui fluid image\" src=\"https://students.cah.ucf.edu/~am921588/dig4530c/assignments/ia02/img/" . $row['prodImg'] . "\"></a>";
            echo "</div>";
        echo "<div class=\"content\">
                    <div class=\"header\">
                        <a class=\"productImageLink\" href=\"product.php?id=" . $row['PK'] . "\" data-price=\"" . $row['prodPrice'] .  "\" data-brand=\"" . $row['prodBrand'] .  "\" data-category=\"" . $row['prodCat'] .  "\" data-color=\"" . $row['color'] .  "\" data-gender=\"" . $row['gender'] .  "\" data-size=\"" . $row['size'] .  "\">" . $row['prodName'] . "</a>
                    </div>
                    
                    <div class=\"description\">
                        <span class=\"left floated\">" . $row['prodBrand'] . "</span>
                        <span class=\"right floated\">" . $row['prodPrice'] . "</span>
                    </div>
                </div>
            <div class=\"ui bottom attached button addToCart\" data-id=\"" . $row['PK'] .  "\">
                <i class=\"add icon\"></i>
                Add to Cart
            </div>";
        echo "</div>";        
    }
} else {
    echo "<p>There are 0 products in inventory</p>";
}
echo "</div>";
mysqli_close($dbc);
?>