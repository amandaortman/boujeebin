<?php
session_start();
include('includes/db.php');
include('includes/header.html');
?>

        <div class="ui container full-basic-segment">
            <div class="ui container">
                <div class="ui grid">
                    <div class="one column row">
                        <div class="column">

                            <div class="ui two top attached steps">
                                <div class="active step">
                                    <i class="payment icon"></i>
                                    <div class="content">
                                        <div class="title">Shipping</div>
                                        <div class="description">Choose your shipping options</div>
                                    </div>
                                </div>
                                <div class="disabled step">
                                    <i class="info icon"></i>
                                    <div class="content">
                                        <div class="title">Confirm Order</div>
                                        <div class="description">Verify order details</div>
                                    </div>
                                </div>
                            </div>

                            <div class="ui attached segment">
                                <form class="ui form" action="charge.php" method="post" id="payment-form">
                                    <h4 class="ui dividing header">Personal Information</h4>
                                    <div class="field">
                                        <label>Name</label>
                                        <div class="two fields">
                                            <div class="field">
                                                <input type="text" name="customer_first_name" id="customer_first_name" placeholder="First Name">
                                            </div>
                                            <div class="field">
                                                <input type="text" name="customer_last_name" id="customer_last_name" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label for="stripeEmail">Email</label>
                                        <div class="field">
                                            <input type="email"  id="stripeEmail" name="stripeEmail" placeholder="E-mail">
                                        </div>
                                    </div>

                                    <h4 class="ui dividing header">Shipping Information</h4>
                                    <div class="two fields">
                                        <div class="field">
                                            <label>Billing Address</label>
                                            <input type="text" id="address_line1" name="address_line1" placeholder="Street Address">
                                        </div>
                                        <div class="field">
                                            <label>State</label>
                                            <select class="ui fluid dropdown" name="address_state" id="address_state">
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
                                    </div>

                                    <div class="three fields">
                                        <div class="field">
                                            <label>City</label>
                                            <input type="text" name="address_city" id="address_city" placeholder="City">
                                        </div>
                                        <div class="field">
                                            <label>Zip</label>
                                            <input type="text" name="address_zip" id="address_zip" maxlength="5" placeholder="Zip code">
                                        </div> 
                                        <div class="field">
                                            <label>Country</label>
                                            <input type="text" name="address_country" id="address_country" placeholder="Country">
                                        </div>                               
                                    </div>

                                    <h4 class="ui dividing header">Billing Information</h4>
                                    <div class="fields">
                                        <div class="seven wide field">
                                            <label>Card Number</label>
                                            <div id="card-number"><!-- A Stripe Element will be inserted here. --></div>
                                        </div>
                                        <div class="three wide field">
                                            <label>CVC</label>
                                            <div id="card-cvc"></div>
                                        </div>
                                        <div class="six wide field">
                                            <label>Expiration</label>
                                            <div id="card-expiry"></div>
                                        </div>
                                    </div>

                                    <!--Stripe errors-->
                                    <div id="card-errors" role="alert"></div>

                                    <button class="ui primary button" id="checkout_button" tabindex="0">Confirm Order</button>
                                </form>

                                <h4 class="ui dividing header">Order Summary</h4>
                                <div class="fields">
                                    <div class="field">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


		<div id="footer-style" class="ui container fluid footer-style">
			<footer class="ui container basic segment">
                <?php include('includes/footer.html'); ?>

                <!--Stripe API-->
                <script src="https://js.stripe.com/v3/"></script>
                <script type="text/javascript" src="js/checkout.js"></script>
			</footer>
		</div>
	</body><!--end body-->
</html>