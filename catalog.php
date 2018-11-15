<?php
session_start();
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
            <?php include("./includes/items.php"); ?>
          </div>
        </div>
      </div>
		</div>

		<div id="footer-style" class="ui container fluid footer-style">
			<footer class="ui container basic segment">
				<?php include('includes/footer.html'); ?>
			</footer>
		</div>
	</body><!--end body-->
</html>