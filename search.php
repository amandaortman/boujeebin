<?php
include('includes/db.php');
include('includes/header.php');

//temp
if (isset($_GET['page'])) {

  if($_GET['page'] == "mens"){
    $page_section = "Mens";
  } elseif ($_GET['page'] == "womens") {
    $page_section = "Womens";
  } elseif ($_GET['page'] == "new") {
    $page_section = "New Arrivals";
  } elseif ($_GET['page'] == "all") {
    $page_section = "All Products";
  } else {
    $page_section = "Products";
  }

} else {
  $page_section = "Products";
}
?>

		<div class="ui container full-basic-segment">

      <div class="ui grid">

        <!--SIDE FILTER-->
        <div id="filterSidebar" class="sidefilter">
          <a href="javascript:void(0)" class="closebtn" onclick="closeFilter()">&times;</a>
          <div class="ui fluid vertical secondary  accordion menu">
          <?php include("./includes/filter.html");?></div>
        </div>

        <!--MOBILE-->
        <div class="mobile only one column row middle aligned center aligned">
          <div class="center aligned column">
            <div class="ui header"><?php echo $page_section; ?></div>  
          </div>        
        </div>


        <div class="mobile only two column row middle aligned center aligned">
          <div class="left aligned left floated column">
            <button class="ui basic button" onclick="openFilter()">
            <i class="icon filter"></i>
            Filter
            </button>            
          </div>

          <div class="right floated right aligned column">
            <div class="basic segment">
              <select class="ui dropdown">
                <option value="">Sort By</option>
                <option value="1">Newest</option>
                <option value="0">Female</option>
                <option value="1">Best Sellers</option>
                <option value="0">Price Low to High</option>
                <option value="1">Price High to Low</option>
                <option value="0">Product Name A-Z</option>
              </select> 
            </div>
          </div>
        </div>

        <!--computer-->
        <div class="computer only tablet only three column row middle aligned center aligned">
          <div class="four wide column"></div>

          <div class="center aligned eight wide column">
            <div class="ui header"><?php echo $page_section; ?></div>
          </div>

          <div class="right floated right aligned four wide column">
            <div class="basic segment">
              <select class="ui dropdown">
                <option value="">Sort By</option>
                <option value="1">Newest</option>
                <option value="0">Female</option>
                <option value="1">Best Sellers</option>
                <option value="0">Price Low to High</option>
                <option value="1">Price High to Low</option>
                <option value="0">Product Name A-Z</option>
              </select> 
            </div>
          </div>
        </div>

      </div>





      <div class="ui grid">
        <div class="four column row">
          <div class="computer only five wide tablet column four wide computer column">
          <div class="ui vertical accordion menu">
            <?php include("./includes/filter.html");?></div>
          </div>
          
          <div class="sixteen wide mobile column eleven wide tablet column twelve wide computer column">
              <?php
              if (empty($_GET["q"])){
                include("./includes/items.php");
              } else {
                echo "<div class='ui three doubling cards'>";
                $searchQuery = "SELECT * FROM products WHERE prodName LIKE "."'%".$_GET['q']."%'".";";
                $result = mysqli_query($dbc, $searchQuery);
                if (mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_assoc($result)) {
                      echo "
                        <div class='card'>
                          <div class='image'>
                            <img src='https://students.cah.ucf.edu/~am921588/dig4530c/assignments/ia02/img/".$row["prodImg"]."'>
                          </div>
                          <div class='content'>
                            <div class='header'>
                              ".$row["prodName"]."
                            </div>
                            <div class='description'>
                              ".$row["prodBrand"]."
                              <span class='right floated'>".$row["prodPrice"]."</span>
                            </div>
                          </div>
                          <div class='ui bottom attached button'>
                            <i class='add icon'></i>
                            Add to Cart
                          </div>
                        </div>
                      ";
                    };
                    echo "</div>";
                  } else {
                    echo "<p>We couldn't seem to find products that fit what you're looking for.</p>";
                  };
              };
              mysqli_close($dbc);
              ?>
          </div>
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
			<footer class="ui container basic segment">
				<?php include('includes/footer.html'); ?>
			</footer>
		</div>
	</body><!--end body-->
</html>