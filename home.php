<?php
include('includes/db.php');
include('includes/header.php');
?>

		<div class="ui container full-basic-segment">

			<div class="ui container">
				<div class="ui grid">
					<div class="two column row">
						<div class="center aligned column">
							<h2 class="ui header"><a href="catalog.php">Mens's Fashion</a></h2>
							<img src="./img/header1.jpg" class="fluid"  alt="Menswear">
						</div>
						<div class="center aligned column">
							<h2 class="ui header"><a href="catalog.php">Women's Fashion</a></h2>
							<img src="./img/header2.jpg" class="fluid" alt="Women's Fashion">
						</div>
					</div>
				</div>
			</div>



			<div class="ui container">
				<div class="ui grid">
					<div class="one column row">
						<div class="column">
							<br><br>
							<h3 class="ui header center aligned">Feature Product</h3>
						</div>
					</div>
					<div class="two column row">
						<div class="center aligned middle aligned column">

						<?php

						$sql = "SELECT PK, prodName, prodBrand, prodDesc, prodCat, prodSKU, prodStock, prodSale, prodPrice, prodImg, prodWeightLBS, gender FROM products WHERE PK=2";

						$result = mysqli_query($dbc, $sql);



						if (mysqli_num_rows($result) > 0) {

							while($row = mysqli_fetch_assoc($result)) {

							echo "
						<img src=\"https://students.cah.ucf.edu/~am921588/dig4530c/assignments/ia02/img/" . $row['prodImg'] . "\" alt=\"Featured Product\">	
							";
							echo "</div><div class=\"middle aligned column\">";

							echo "<h3 class=\"ui header\">" . $row['prodName']  . "</h3>";
							echo "<h3 class=\"ui header\">" . $row['prodBrand'] . "</h3>";
							
						$sql = "SELECT PK, prodName, prodBrand, prodDesc, prodCat, prodSKU, prodStock, prodSale, prodPrice, prodImg, prodWeightLBS, gender FROM products WHERE PK=2";
							echo "<h3 class=\"ui header\"> Sale Price: " . $row['prodSale'] . "</h3>";
							
							echo "<p>" . $row['prodDesc'] . "</p>";
							echo "<a href=\"product.php\"><button class=\"ui primary button\">View Product</button></a>";

							}
						} else {
							echo "<p>There are no feature products</p>";
						}

						mysqli_close($dbc);

						?>


						</div>
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