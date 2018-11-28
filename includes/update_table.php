<?php
include('db.php');
include('backout_header.php');
?>

<div class="ui container full-basic-segment">

      <div class="ui container">
        <div class="ui grid">
          <div class="one column row">
            <div class="center aligned column">
              <h3 class="ui header">Site Administrator</h3>
            </div>
          </div>  

          <div class="one column row">
            <div class="center aligned column">
              <h4 class="ui header">Edit</h4>
            </div>
          </div>  

          <div class="one column row">
            <div class="column">

              <!-- CATALOG -->
              <div class="ui bottom attached tab segment active" data-tab="catalog">

<?php
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $_SESSION['temp_prod_id'] = $id;
  $sql = "SELECT * FROM products WHERE PK='$id'";
  //$sql echoes out fine
  $result = mysqli_query($dbc, $sql);

  echo "<table class=\"ui celled table\">
   <thead><tr>
      <th>ID</th>
      <th>Product</th>
      <th>Brand</th>
      <th>SKU</th>
      <th>Stock</th>
      <th>Sale Price</th>
    <th>Price</th>
      <th class=\"center aligned\">Remove</th>
      </tr></thead>";

  echo "<form name=\"form" . $id . "\" action=\"update.php\" method=\"POST\">";

  if (mysqli_num_rows($result) > 0) {  
    while($row = mysqli_fetch_assoc($result)) {

      echo "<tr>";

      echo "<td>" . $row['PK'] . "</td>";
      echo "<td><div class=\"ui input\"><input type=\"text\" name=\"prodName\" value=\"" . $row['prodName'] . "\"></div></td>";
      echo "<td><select class=\"ui fluid search dropdown\" name=\"prodBrand\" value=\"" . $row['prodBrand'] . 
        "\"><option value=\"Hugo Boss\">Hugo Boss</option>
        <option value=\"Valentino\">Valentino</option>
        <option value=\"Ben Taverniti\">Ben Taverniti</option>
        <option value=\"Hermes\">Hermes</option>
        <option value=\"Saint Laurent\">Saint Laurent</option>
        <option value=\"Burberry\">Burberry</option></td>";
      echo "<td>" . $row['prodSKU'] . "</td>";
      echo "<td><div class=\"ui input\"><input type=\"text\" name=\"prodStock\" value=\"" . $row['prodStock'] . "\" size=\"3\" maxlength=\"3\"></div></td>";
      echo "<td><div class=\"ui input\"><input type=\"text\" name=\"prodSale\" value=\"" . $row['prodSale'] . "\" size=\"6\" maxlength=\"20\"></div></td>";
      echo "<td><div class=\"ui input\"><input type=\"text\" name=\"prodPrice\" value=\"" . $row['prodPrice'] . "\" size=\"6\" maxlength=\"20\"></div></td>";
      if(isset($_SESSION['type'])=='admin'){
        echo "<td class=\"center aligned\"><a href=\"delete_product.php?id=" . $id . "\"><i class=\"close icon\"></i></a></td>";  //remove products
      }

      echo "</tr>";
    }
  } else {
  echo "0 results";
}
      
      echo "</table>";
      echo "<div class=\"ui one column centered grid\"><div class=\"row\">";
      echo "<button class=\"black ui secondary button\" name=\"back\"><a style=\"color:#FFF;\" href=\"../admin.php\">Go Back</a></button>";
      echo "<button class=\"black ui submit button\" name=\"update\">Update</button>";
      echo "</div></div>";
      echo "</form>";

//Do not include. Breaks needed connection
//mysqli_close($dbc);
} else {
  echo "<div class=\"ui one column centered grid\"><div class=\"row\">";
      echo "<p>Something went wrong. Please return to the admin page.</p>";
      echo "</div><div class=\"row\">";
      echo "<button class=\"black ui secondary button\" name=\"back\"><a style=\"color:#FFF;\" href=\"../admin.php\">Go Back</a></button>";
      echo "</div></div>";
}
?>

                </div>

            </div>
          </div>  <!--End of row with table-->

        </div>    
      </div>
    </div>

    <div id="footer-style" class="ui container fluid footer-style">
      <div class="center aligned one column stackable ui grid sign-up">
      <div class="eight wide column">
        <h4>Sign up for the Boujee Bin Bulletin</h4>
        <form class="ui form">
          <div class="field">
            <div class="ui action input">
              <input type="email" name="email" placeholder="E-mail address">
              <button class="ui button">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div id="footer-style" class="ui container fluid footer-style">
      <footer class="ui container basic segment">
        <?php include('backout_footer.html'); ?>
      </footer>
    </div>
  </body><!--end body-->
</html>