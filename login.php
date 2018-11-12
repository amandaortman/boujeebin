<?php
if(isset($_SESSION['user_id'])) {
    header('Location: account.php');
}

include('includes/db.php');
include('includes/header.html');
?>

		<div class="ui container full-basic-segment">

            <div class="ui grid">
                <div class="tablet only computer only column">
                    <div class="ui basic segment">
                        <div class="ui two column very relaxed stackable grid">
                            <div class="column">
                                <div class="ui form">
                                    <div class="field">
                                      <h3 class="ui header">Login</h3>
                                    </div>
                                    <div class="field">
                                        <label>Username</label>
                                        <div class="ui left icon input">
                                            <input type="text" placeholder="Username">
                                            <i class="user icon"></i>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Password</label>
                                        <div class="ui left icon input">
                                            <input type="password">
                                            <i class="lock icon"></i>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui blue submit button"><a href="client.php">Login</a></div>
                                    </div>
                                    <div class="field">
                                        <a href="#">Forgot your password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui form">
                                    <div class="field">
                                        <h3 class="ui header">New customer?</h3>
                                    </div>    
                                    <div class="field">
                                        <h4 class="ui header">Create an account with us and you'll be able to:</h4>
                                    </div>  
                                    <div class="field">
                                        <ul class="ui list">
                                            <li>Check out faster</li>
                                            <li>Save multiple shipping addresses</li>
                                            <li>Access your order history</li>
                                            <li>Track new orders</li>
                                        </ul>
                                    </div>        
                                    <div class="field">
                                        <div class="ui blue submit button"><a href="#">Sign Up</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="ui vertical divider">
                            Or
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui grid">
                <div class="mobile only column">
                    <div class="ui left aligned basic segment">
                        <div class="ui form">
                            <div class="field">
                                <h3 class="ui header">Login</h3>
                            </div>                            
                            <div class="field">
                                <label>Username</label>
                                <div class="ui left icon input">
                                    <input type="text" placeholder="Username">
                                    <i class="user icon"></i>
                                </div>
                            </div>
                            <div class="field">
                                <label>Password</label>
                                <div class="ui left icon input">
                                    <input type="password">
                                    <i class="lock icon"></i>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui blue submit button"><a href="client.php">Login</a></div>
                            </div>
                            <div class="field">
                                <a href="#">Forgot your password?</a>
                            </div>
                        </div>

                        <div class="ui horizontal divider">
                            Or
                        </div>

                        <div class="middle aligned left aligned column">
                            <div class="ui form">
                                <div class="field">
                                    <h3 class="ui header">New customer?</h3>
                                </div>    
                                <div class="field">
                                    <h4 class="ui header">Create an account with us and you'll be able to:</h4>
                                </div>  
                                <div class="field">
                                    <ul class="ui list">
                                        <li>Check out faster</li>
                                        <li>Save multiple shipping addresses</li>
                                        <li>Access your order history</li>
                                        <li>Track new orders</li>
                                    </ul>
                                </div>        
                                <div class="field">
                                    <div class="ui blue submit button"><a href="#">Sign Up</a></div>
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
			</footer>
		</div>
	</body><!--end body-->
</html>