<?php
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
    <th>ID</th>
    <th>Product</th>
    <th>Brand</th>
    <th>SKU</th>
    <th>Stock</th>
    <th>Sale Price</th>
	<th>Price</th>
    <th class=\"center aligned\">Remove</th>
    </tr></thead>";

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {

    echo "<tr>";

    echo "<td>" . $row['PK'] . "</td>";
    echo "<td>" . $row['prodName'] . "</td>";
    echo "<td>" . $row['prodBrand'] . "</td>";
    echo "<td>" . $row['prodSKU'] . "</td>";
    echo "<td><div class=\"ui input\"><input type=\"text\" value=\"" . $row['prodStock'] . "\"></div></td>";
    echo "<td>" . $row['prodSale'] . "</td>";
	echo "<td>" . $row['prodPrice'] . "</td>";
    echo "<td class=\"center aligned\"><i class=\"close icon\"></i></td>";

    echo "</tr>";
    }
} else {
    echo "0 results";
}

    echo "</table>";

mysqli_close($dbc);

?>			



							
							</div>

							<!-- orders -->
							<div class="ui bottom attached tab segment" data-tab="orders">
								<table class="ui compact table">
									<thead>
										<tr>
											<th>Order ID</th>
											<th>Name</th>
											<th>Transaction ID</th>
											<th>Delete Order</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td data-label="OrderID">1</td>
											<td data-label="CustName">Bob Jones</td>
											<td data-label="TransID"><a href="#">BB12345</a></td>
											<td data-label="Delete"><a href="#">Delete</a></td>
										</tr>
										<tr>
											<td data-label="OrderID">2</td>
											<td data-label="CustName">Sarah Doe</td>
											<td data-label="TransID"><a href="#">BB12345</a></td>
											<td data-label="Delete"><a href="#">Delete</a></td>
										</tr>
										<tr>
											<td data-label="OrderID">3</td>
											<td data-label="CustName">John Smith</td>
											<td data-label="TransID"><a href="#">BB12345</a></td>
											<td data-label="Delete"><a href="#">Delete</a></td>
										</tr>
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
			<	<div id="footer-style" class="ui container fluid footer-style">
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