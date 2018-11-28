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
              <h4 class="ui header">Add</h4>
            </div>
          </div>  

          <div class="one column row">
            <div class="column">

              <!-- CATALOG -->
              <div class="ui bottom attached tab segment active" data-tab="catalog">

<?php
  $sql = "SELECT * FROM products";
  $result = mysqli_query($dbc, $sql);
  $num_rows = mysqli_num_rows($result);
  $id = $num_rows + 1;  //Figure out num of rows and add 1
  $_SESSION['id'] = $id;  //Differs from $_SESSION['user_id']. This is for col PK in products table
  $sku = $num_rows + 1;
  $_SESSION['sku'] = $sku;

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

  echo "<form name=\"form\" action=\"add.php\" method=\"POST\">";

  echo "<tr>";

  echo "<td>" . $id . "</td>";
  echo "<td><div class=\"ui input\"><input type=\"text\" name=\"prodName\" value=\"\"></div></td>";
  echo "<td><select class=\"ui fluid search dropdown\" name=\"prodBrand\" value=\"\">
    <option value=\"Hugo Boss\">Hugo Boss</option>
    <option value=\"Valentino\">Valentino</option>
    <option value=\"Ben Taverniti\">Ben Taverniti</option>
    <option value=\"Hermes\">Hermes</option>
    <option value=\"Saint Laurent\">Saint Laurent</option>
    <option value=\"Burberry\">Burberry</option></td>";
  echo "<td>" . $sku . "</td>";
  echo "<td><div class=\"ui input\"><input type=\"text\" name=\"prodStock\" value=\"\" size=\"3\" maxlength=\"3\"></div></td>";
  echo "<td><div class=\"ui input\"><input type=\"text\" name=\"prodSale\" value=\"\" size=\"6\" maxlength=\"20\"></div></td>";
  echo "<td><div class=\"ui input\"><input type=\"text\" name=\"prodPrice\" value=\"\" size=\"6\" maxlength=\"20\"></div></td>";
  if(isset($_SESSION['type'])=='admin'){
    echo "<td class=\"center aligned\"><i class=\"close icon\"></i></td>";  //remove products
  }
  echo "</tr>";
      
  echo "</table>";
  echo "<div class=\"ui one column centered grid\"><div class=\"row\">";
  echo "<button class=\"black ui secondary button\" name=\"back\"><a style=\"color:#FFF;\" href=\"../admin.php\">Go Back</a></button>";
  echo "<button class=\"black ui submit button\" name=\"add\">Add</button>";
  echo "</div></div>";
  echo "</form>";

//Do not include. Breaks needed connection
//mysqli_close($dbc);
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