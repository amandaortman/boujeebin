<?php

$sql = "SELECT prodBrand, prodType, prodDescription, prodPrice, prodColor, prodSize, prodImage, prodStock, prodGender FROM stock";

$result = mysqli_query($dbc, $sql);

 echo "<div class=\"ui three doubling cards\">";

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {

    echo "<div class=\"card\">";
        echo "<div class=\"image\">";
            echo "<img src=\"https://students.cah.ucf.edu/~dig4530c_group02/images/" . $row['prodImage'] . "\">";
        echo "</div>";

echo "<div class=\"content\">
    <div class=\"header\">" . $row['prodType'] . "</div>
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