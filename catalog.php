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

      <?php include('includes/sort.php'); ?>

      <div class="ui grid">
        <div class="four column row">
          <div class="computer only five wide tablet column four wide computer column">
          <div class="ui vertical accordion menu">
            <?php include("./includes/filter.html");?></div>
          </div>
          <div id="catalog" class="sixteen wide mobile column eleven wide tablet column twelve wide computer column">
            <?php include("./includes/items.php"); ?>
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
        <script src="js/filter.js"></script>
			</footer>
		</div>
	</body><!--end body-->
</html>