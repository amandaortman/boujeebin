<?php
include('includes/db.php');
include('includes/header.php');
?>

		<div class="ui container full-basic-segment">

			<div class="ui container">
				<div class="ui grid">
					<div class="one column row">
						<div class="column">
							<form class="ui form">
								<h4 class="ui dividing header">Personal Information</h4>
								<div class="field">
									<label>Name</label>
									<div class="two fields">
										<div class="field">
											<input type="text" name="shipping[first-name]" placeholder="First Name" value="<?php
												if(isset($_SESSION['first'])){
													echo $_SESSION['first'];
												}
											?>">
										</div>
										<div class="field">
											<input type="text" name="shipping[last-name]" placeholder="Last Name" value="<?php
												if(isset($_SESSION['last'])){
													echo $_SESSION['last'];
												}
											?>">>
										</div>
									</div>
								</div>
								<h4 class="ui dividing header">Shipping Information</h4>
								<div class="field">
									<label>Billing Address</label>
									<div class="fields">
										<div class="twelve wide field">
											<input type="text" name="shipping[address]" placeholder="Street Address">
										</div>
										<div class="four wide field">
											<input type="text" name="shipping[address-2]" placeholder="Apt #">
										</div>
									</div>
								</div>
								<div class="two fields">
									<div class="field">
										<label>State</label>
										<select class="ui fluid dropdown">
											<option value="">State</option>
											<option value="AL">Alabama</option>
											<option value="AK">Alaska</option>
											<option value="AZ">Arizona</option>
											<option value="AR">Arkansas</option>
											<option value="CA">California</option>
											<option value="CO">Colorado</option>
											<option value="CT">Connecticut</option>
											<option value="DE">Delaware</option>
											<option value="DC">District Of Columbia</option>
											<option value="FL">Florida</option>
											<option value="GA">Georgia</option>
											<option value="HI">Hawaii</option>
											<option value="ID">Idaho</option>
											<option value="IL">Illinois</option>
											<option value="IN">Indiana</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
											<option value="LA">Louisiana</option>
											<option value="ME">Maine</option>
											<option value="MD">Maryland</option>
											<option value="MA">Massachusetts</option>
											<option value="MI">Michigan</option>
											<option value="MN">Minnesota</option>
											<option value="MS">Mississippi</option>
											<option value="MO">Missouri</option>
											<option value="MT">Montana</option>
											<option value="NE">Nebraska</option>
											<option value="NV">Nevada</option>
											<option value="NH">New Hampshire</option>
											<option value="NJ">New Jersey</option>
											<option value="NM">New Mexico</option>
											<option value="NY">New York</option>
											<option value="NC">North Carolina</option>
											<option value="ND">North Dakota</option>
											<option value="OH">Ohio</option>
											<option value="OK">Oklahoma</option>
											<option value="OR">Oregon</option>
											<option value="PA">Pennsylvania</option>
											<option value="RI">Rhode Island</option>
											<option value="SC">South Carolina</option>
											<option value="SD">South Dakota</option>
											<option value="TN">Tennessee</option>
											<option value="TX">Texas</option>
											<option value="UT">Utah</option>
											<option value="VT">Vermont</option>
											<option value="VA">Virginia</option>
											<option value="WA">Washington</option>
											<option value="WV">West Virginia</option>
											<option value="WI">Wisconsin</option>
											<option value="WY">Wyoming</option>
										</select>
									</div>
									<div class="field">
										<label>Country</label>
										<input type="text" name="country" placeholder="Country">
									</div>
								</div>
								<h4 class="ui dividing header">Billing Information</h4>
								<div class="fields">
									<div class="seven wide field">
										<label>Card Number</label>
										<input type="text" name="card[number]" maxlength="16" placeholder="Card #">
									</div>
									<div class="three wide field">
										<label>CVC</label>
										<input type="text" name="card[cvc]" maxlength="3" placeholder="CVC">
									</div>
									<div class="six wide field">
										<label>Expiration</label>
										<div class="two fields">
											<div class="field">
												<select class="ui fluid search dropdown" name="card[expire-month]">
													<option value="">Month</option>
													<option value="1">January</option>
													<option value="2">February</option>
													<option value="3">March</option>
													<option value="4">April</option>
													<option value="5">May</option>
													<option value="6">June</option>
													<option value="7">July</option>
													<option value="8">August</option>
													<option value="9">September</option>
													<option value="10">October</option>
													<option value="11">November</option>
													<option value="12">December</option>
												</select>
											</div>
											<div class="field">
												<input type="text" name="card[expire-year]" maxlength="4" placeholder="Year">
											</div>
										</div>
									</div>
								</div>
								
								<div class="ui primary button" tabindex="0">Update Account Information</div>
							</form>
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