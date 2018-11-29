<?php
session_start();
include('includes/db.php');
include('includes/header.php');
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
							<h4 class="ui header">Dashboard</h4>
						</div>
					</div>	

					<div class="one column row">
						<div class="column">
							<div class="ui top attached tabular menu">
								<a class="item active" data-tab="catalog">Catalog</a>
								<a class="item" data-tab="orders">Customer Orders</a>
							</div>

							<!-- CATALOG -->
							<div class="ui bottom attached tab segment active" data-tab="catalog">

							
<?php


$sql = "SELECT PK, prodName, prodBrand, prodDesc, prodCat, prodSKU, prodStock, prodSale, prodPrice, prodImg, prodWeightLBS, gender FROM products";

$result = mysqli_query($dbc, $sql);

 echo "<table class=\"ui celled table\">
 <thead><tr>
 	<th></th>
    <th>ID</th>
    <th>Product</th>
    <th>Brand</th>
    <th>SKU</th>
    <th>Stock</th>
    <th>Sale Price</th>
	<th>Price</th>
    <th>Remove</th>
    </tr></thead>";

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {

    $id = $row['PK'];
    echo "<tr>";

    echo "<td><a href=\"includes/update_table.php?id=" . $id . "\"><i class=\"pencil alternate icon\"></i></a></td>";
    echo "<td>" . $id . "</td>";
    echo "<td>" . $row['prodName'] . "</td>";
    echo "<td>" . $row['prodBrand'] . "</td>";
    echo "<td>" . $row['prodSKU'] . "</td>";
    echo "<td>" . $row['prodStock'] . "</div></td>";
    echo "<td>" . $row['prodSale'] . "</td>";
	echo "<td>" . $row['prodPrice'] . "</td>";
    if(isset($_SESSION['type'])=='admin'){
	  echo "<td class=\"center aligned\"><a href=\"includes/delete_product.php?id=" . $id . "\"><i class=\"close icon\"></i></a></td>";  //remove products
	}

    echo "</tr>";
    }
} else {
    echo "0 results";
}

    echo "</table>";

//mysqli_close($dbc);

?>			
					<div class="ui one column centered grid">
						<div class="row">
							<button class="black ui submit button" name="add"><a href="includes/add_product.php">Add Product</a></button>
						</div>
					</div>

							
							</div>

							<!-- orders -->
							<div class="ui bottom attached tab segment" data-tab="orders">
								<table class="ui compact table">
									<thead>
										<tr>
											<th>Customer ID</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Email</th>
											<th>Amount Charged</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$sql = "SELECT * FROM bb_users_orders";
											$result = mysqli_query($dbc, $sql);
											if (mysqli_num_rows($result) > 0) {
												while($row = mysqli_fetch_assoc($result)) {
											echo "<tr>";
												echo "<td>" .$row['customer_id'] . "</td>";
												echo "<td>" .$row['first_name']. "</td>";
												echo "<td>" .$row['last_name']. "</td>";
												echo "<td>" .$row['email']. "</td>";
												echo "<td>" .$row['charge']."</td>";
											}
										} else {
											echo "0 results";
										}
										?>
									</tbody>
								</table>						
							</div>
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
		<div id="footer-style" class="ui container fluid footer-style">
			<footer class="ui container basic segment">
				<?php include('includes/footer.html'); ?>
			</footer>
		</div>
	</body><!--end body-->
</html>