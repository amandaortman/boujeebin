<?php
session_start();
include('includes/db.php');
include('includes/header.php');

/*---STRIPE---*/
//MAKE SURE STRIPE FILES UPDATED
require_once('./stripe-php/init.php');

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_7RvSmX5HQLx8a5U2xIpGiABD");

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];

/*---FORM INPUT AND PROCESS---*/
//CUSTOMER INFORMATION FROM FORM
$email = $_POST['stripeEmail'];
$billingFirstName = $_POST['customer_first_name'];
$billingLastName = $_POST['customer_last_name'];
$billingAddress = $_POST['address_line1'];
$billingZip = $_POST['address_zip'];
$billingState = $_POST['address_state'];
$billingCity = $_POST['address_city'];
$billingCountry = $_POST['address_country'];

//CHANGE ONCE CHECKOUT CART COMPLETE
//update according to cart
//$total = $_SESSION['total_price'];
$total = $_SESSION['cart_end_total'];
$total = $total * 100;
//example $total = 2099;

//CHANGE TABLE NAME INFORMATION
$sql = "SELECT * FROM bb_users WHERE email = '" . $email ."' LIMIT 1";
$result = mysqli_query($dbc, $sql);
//$check_result_rows = mysqli_num_rows($result);

if((mysqli_num_rows($result) === 1)) {
	$customer_exists = true;

	//CHANGE ROW NAMES TO MATCH	
	while($row = mysqli_fetch_array($result)) {
		$customer_id_db = $row["customer_id"];
		$customer_fname_db = $row["first_name"];
		$customer_lname_db = $row["last_name"];
	}

	$get_customer = \Stripe\Customer::retrieve($customer_id_db);

	$card_id = $get_customer->sources->data[0]->id;

	//UPDATE DESCRIPTION FOR STRIPE
	$charge = \Stripe\Charge::create([
	    'amount' => $total,
	    'currency' => 'usd',
	    'description' => 'Boujee Bin Order',
	    'source' => $card_id,
	    'customer' => $customer_id_db,
	]);	

} else {
	$customer_exists = false;
	$customer = \Stripe\Customer::create(array(
	  "email" => $email,
	  "source" => $token,
	));

	//UPDATE DESCRIPTION	
	$charge = \Stripe\Charge::create([
	    'amount' => $total,
	    'currency' => 'usd',
	    'description' => 'Boujee Bin',
	    "customer" => $customer->id
	    //'source' => $token,
	    //'receipt_email' => $email, doesn't work in test mode
	]);	
}

$success_message = $charge->outcome->seller_message;
$amount_charged = $charge->amount;
$amount_charged = number_format(($amount_charged/100), 2);
$customer_name = $charge->source->name;

if($customer_exists) {
	//Add charge to table


} else {
	//customer does not exist
	//UPDATE TABLE INFORMATION
	$new_customer = "INSERT INTO bb_users (customer_id, type, first_name, last_name, email, address, zip, state, city, country) 
	VALUES ('$customer->id', 'client', '$billingFirstName','$billingLastName', '$email', '$billingAddress', '$billingZip', '$billingState', '$billingCity', '$billingCountry')";
	$nc_result = mysqli_query($dbc, $new_customer);		

	//IF NEW CUSTOMER
	if($nc_result) {
		$new_customer_success = true;
	} else {
		$new_customer_success = false;
	}
	
	mysqli_close($dbc);
}

//INVOICE

if ($success_message) {
	$to = $email;
	$from = $email;
	$headers = "From: $email \r\n"; 
	$headers .= "Reply-To: $email \r\n"; 	
	$subject = 'Your Boujee Bin Order Confirmation';
	$body = "Hello " . $billingFirstName . "\nYour payment of " . $amount_charged . " was received!\nThank you!\n-Boujee Bin";

	mail($to, $subject, $body, $headers);
}	
?>
	  
		<div class="ui container full-basic-segment">
			<div class="ui container">
				<div class="ui grid">
					<div class="column row">
						<div class="center aligned column">
							<h1 id="checkout_header" class="featured">Thank you for your purchase</h1> 
							<i class="check icon"></i><br>
							<?php
								echo $charge->outcome->seller_message . "<br>";
								echo "You were charged $" . $amount_charged . "<br>";
							?>
							<p>Please allow 1-3 days for processing.</p>
							<p>You will receive your order within 5-7 business days after processing.</p>		
						</div>
					</div>
					
					<div class="two column row">
						<div class="center aligned column">
							<h4>Customer:</h4> 
							<?php
							echo $billingFirstName . " " . $billingLastName . "<br>";
							echo $email . "<br>";
							?>				  
						</div>
						
						<div class="center aligned column">
							<h4>Ship to:</h4>
							<?php
							echo $billingFirstName . " " . $billingLastName . "<br>";
							echo $billingAddress . "<br>";
							echo $billingCity . ", " . $billingState . " " . $billingZip . " " . $billingCountry;				
							echo "<br>";
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


				<!--Stripe API-->
				<script src="https://js.stripe.com/v3/"></script>
				<script type="text/javascript" src="js/checkout.js"></script>
			</footer>
		</div><!--end footer div-->
	</body><!--end body-->
</html>
