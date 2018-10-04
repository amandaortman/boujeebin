<?php

$sql = "SELECT PK, prodName, prodBrand, prodDesc, prodCat, prodSKU, prodStock, prodSale, prodPrice, prodImg, prodWeightLBS, gender FROM products";

$result = mysqli_query($dbc, $sql);

 echo "<div class=\"ui three doubling cards\">";

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {

    echo "<div class=\"card\">";
        echo "<div class=\"image\">";
            echo "<img src=\"https://students.cah.ucf.edu/~am921588/dig4530c/assignments/ia02/img/" . $row['prodImg'] . "\">";
        echo "</div>";

echo "<div class=\"content\">
    <div class=\"header\">" . $row['prodName'] . "</div>
    <div class=\"description\">
            " . $row['prodBrand'] . "
        <span class=\"right floated\">" . $row['prodPrice'] . "</span>
    </div>
</div>
<div class=\"ui bottom attached button\">
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
