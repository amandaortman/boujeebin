<?php
session_start();
include('includes/db.php');
include('includes/header.php');
?>

		<div class="ui container full-basic-segment">

			<div class="ui container" id="cart_checkout_div">


				<div class="ui grid">
					<div class="one column row">
						<div class="sixteen wide column">

							<h3 class="ui header">Your Shopping Cart (<?php if (isset($_SESSION['cart_count'])) { echo $_SESSION['cart_count']; } else {echo "0"; }?>)</h3>

							<!--<div class="ui positive message">
								<p>Add $23.53 more to your cart for free shipping!</p>
							</div>-->	

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
			
					<?php include("./includes/cart_items.php");?>
					<?php
					if(isset($_SESSION['total_cart_price'])) {
						//var_dump($_SESSION['total_cart_price']);

						$sess_cart = $_SESSION['total_cart_price'];

						$complete_total = array_sum($sess_cart);

						
					}
					
					?>

				</div>



				<div class="ui grid">
					<div class="one column row">
						<div class="right aligned column">
							<div class="ui basic segment">
								<span>Tax</span>: <span><?php if(!isset($_SESSION['total_cart_price'])) { echo "0";} else { $total_with_tax = ($complete_total * 0.06); echo $total_with_tax;} ?></span><br>
								<span>Shipping</span>: <span><?php 
								if ((isset($complete_total)) && $complete_total > 50) {
										  echo "Free";
										} else {
											echo "$3.99"; 
										}
									  
									  ?></span><br>
								<span>Subtotal</span>: <span>$ <?php if (!isset($_SESSION['cart_count'])) { echo "0"; } else { $_SESSION['cart_end_total'] = ($complete_total + $total_with_tax); echo $_SESSION['cart_end_total']; } ?></span>
							</div>
						</div>
					</div>

					<div class="two column row">
						<div class="left aligned column">
							<a href="includes/clear_cart.php"><button class="ui red button clearCheckout">Clear Checkout</button></a>
						</div>
						<div class="right aligned column">
							<a href="checkout.php"><button class="ui primary button">Proceed to Checkout</button></a>
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