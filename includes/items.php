<?php
if (isset($_GET['page'])) {
    if ($_GET['page'] == "mens") {
        $sql = "SELECT PK, prodName, prodBrand, prodDesc, prodCat, prodSKU, prodStock, prodSale, prodPrice, prodImg, prodWeightLBS, gender, color, size FROM products WHERE gender='mens'";
    } 
    else if ($_GET['page'] == "womens")  {
        $sql = "SELECT PK, prodName, prodBrand, prodDesc, prodCat, prodSKU, prodStock, prodSale, prodPrice, prodImg, prodWeightLBS, gender, color, size FROM products WHERE gender='womens'";
    } else if ($_GET['page'] == "new")  {
        $sql = "SELECT PK, prodName, prodBrand, prodDesc, prodCat, prodSKU, prodStock, prodSale, prodPrice, prodImg, prodWeightLBS, gender, color, size FROM products ORDER BY PK DESC";
    }
    else {
        $sql = "SELECT PK, prodName, prodBrand, prodDesc, prodCat, prodSKU, prodStock, prodSale, prodPrice, prodImg, prodWeightLBS, gender, color, size FROM products";
    }
}

$result = mysqli_query($dbc, $sql);
echo "<div class=\"ui link three doubling cards\">";
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {

        $price = $row['prodPrice'];
        $price = trim($price, '$');
        $price = round($price);

        if($price <= 100) {
            $prodRange = 'R1';
        } elseif((100 <= $price) && ($price <= 200)) {
            $prodRange = 'R2';
        } elseif((200 <= $price) && ($price <= 300)) {
            $prodRange = 'R3';
        } elseif((300 <= $price) && ($price <= 400)) {
            $prodRange = 'R4';
        } elseif($price >= 400) {
            $prodRange = 'R5';
        }
        echo "<div class=\"card\" data-card-sort=\"" . $row['PK'] . "\" data-gender=\"" . $row['gender'] . "\" data-category=\"" . $row['prodPrice'] . "," . $row['prodBrand'] . "," . $prodRange . "," . $row['prodCat'] . "," . $row['color'] . "," . $row['gender'] . "," . $row['size'] .  "\">";
            echo "<div class=\"image\">";
                echo "<a class=\"image\" href=\"product.php?id=" . $row['PK'] . "\"><img class=\"ui fluid image\" src=\"https://students.cah.ucf.edu/~am921588/dig4530c/assignments/ia02/img/" . $row['prodImg'] . "\"></a>";
            echo "</div>";
        echo "<div class=\"content\">
                    <div class=\"header\">
                        <a class=\"productImageLink\" href=\"product.php?id=" . $row['PK'] . "\">" . $row['prodName'] . "</a>
                    </div>
                    
                    <div class=\"description\">
                        <span class=\"left floated\">" . $row['prodBrand'] . "</span>
                        <span class=\"right floated\">" . $row['prodPrice'] . "</span>
                    </div>
                </div>
            <a class=\"ui bottom attached button\" href=\"product.php?id=" . $row['PK'] . "\" data-id=\"" . $row['PK'] .  "\">
                
                View Item
            </a>";
        echo "</div>";        
    }
} else {
    echo "<p>There are 0 products in inventory</p>";
}
echo "</div>";
mysqli_close($dbc);
?>

