<?php
//include('includes/config.php');
include('includes/db.php');
include('includes/header.html');
?>

		<div class="ui container full-basic-segment">

			<div class="ui container">


				<div class="ui grid">
					<div class="one column row">
						<div class="sixteen wide column">

							<h3 class="ui header">Your Shopping Cart (3)</h3>

							<div class="ui positive message">
								<p>Add $23.53 more to your cart for free shipping!</p>
							</div>	

							<div class="ui divider"></div>
						</div>						
					</div>
				</div>


				<div id="cart_headers" class="ui grid">
					<div class="computer only five column row">
						<div class="left aligned eight wide column">
							<h4 class="ui header">Item</h4>
						</div>
						<div class="center aligned two wide column">
							<h4 class="ui header">Price</h4>
						</div>		
						<div class="center aligned two wide column">
							<h4 class="ui header">Quantity</h4>
						</div>
						<div class="center aligned two wide column">
							<h4 class="ui header">Total</h4>
						</div>	
						<div class="right aligned two wide column">
							<h4 class="ui header">Remove</h4>
						</div>		
					</div>	
				</div>


				<div id="cart_div" class="computer only ui grid">
					<div class="computer only one column row">
						<div class="computer only sixteen wide column">
							<div class="ui divider"></div>
						</div>						
					</div>
				</div>
	

				<div class="ui grid">
					<!--ONE ITEM-->
					<div class="one column row">
						<div class="column">					
							<div class="ui grid">
								<div class="four column row computer only">
									<div class="middle aligned left aligned eight wide computer column computer only">
										<div class="ui divided items">
											<div class="item">
												<div class="image">
													<img src="https://via.placeholder.com/500x450">
												</div>
												<div class="content">
													<a class="header">Product Name</a>
													<div class="description">
														<p>Product Description</p>
														<p>Product Color</p>
														<p>Product Size</p>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="middle aligned center aligned two wide computer column computer only">
										<span class="ui header">$20</span>
									</div>

									<div class="middle aligned center aligned two wide computer column computer only">										
										<i class="minus icon q-cart"></i><span class="ui header"> 2 </span><i class="plus icon q-cart"></i>										
									</div>

									<div class="middle aligned center aligned two wide computer column computer only">
										<span class="ui header">$40</span>
									</div>
									
									<div class="middle aligned right aligned two wide computer column computer only">
										<i class="close icon"></i>
									</div>	

								</div>


								<!--MOBILE/TABLET-->
								<div class="one column row mobile only tablet only">
									<div class="middle aligned left aligned sixteen wide column mobile only tablet only">
										<div class="ui divided items">
											<div class="item">
												<div class="image">
													<img src="https://via.placeholder.com/500x450">
												</div>
												<div class="content">
													<a class="header">Product Name</a>
													<div class="description">
														<p>Product Description</p>
														<p>Product Color</p>
														<p>Product Size</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="one column row mobile only tablet only">
									<div class="middle aligned center aligned sixteen wide computer column">
									<span class="ui header">Item Price: </span><span class="ui header">$20</span>
									</div>

									<div class="middle aligned center aligned sixteen wide computer column">										
										<i class="minus icon q-cart"></i><span class="ui header"> 2 </span><i class="plus icon q-cart"></i>										
									</div>

									<div class="middle aligned center aligned sixteen wide computer column">
										<span class="ui header">Item Total: </span><span class="ui header">$40</span>
									</div>		

									<div class="middle aligned right aligned sixteen wide computer column">
										<br>
										<button class="ui fluid button">Remove Item</button>
									</div>	
								</div>
							</div>
						</div>
					</div>	
					<div class="ui divider"></div><!--END ITEM-->



				</div>



				<div class="ui grid">
					<div class="one column row">
						<div class="right aligned column">
							<div class="ui basic segment">
								<span>Tax</span>: <span>$3.99</span><br>
								<span>Shipping</span>: <span>$3.99</span><br>
								<span>Subtotal</span>: <span>$42.15</span>
							</div>
						</div>
					</div>

					<div class="one column row">
						<div class="right aligned column">
							<button class="ui primary button"><a href="checkout.php">Proceed to Checkout</a></button>
						</div>
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