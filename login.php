<?php
if(isset($_SESSION['user_id'])) {
    header('Location: client.php');
}

include('includes/db.php');
include('includes/header.php');
?>

		<div class="ui container full-basic-segment">

            <div class="ui grid">
                <div class="tablet only computer only column">
                    <div class="ui basic segment">
                        <div class="ui two column very relaxed stackable grid">
                            <div class="column">
                                <form class="ui form" action="includes/existing_account.php" method="POST">
                                      <h3 class="ui header">Login</h3>
                                      <?php
                                        if (isset($_SESSION['user_error'])) {   
                                            echo '<div class="ui basic red error message visible">' . $_SESSION['user_error'] . '</div>';
                                            unset($_SESSION['user_error']);
                                        }
                                      ?>
                                    <div class="field">
                                        <label>Username</label>
                                        <div class="ui left icon input">
                                            <input name="uid" type="text" placeholder="Username" value="<?php if(isset($_SESSION['temp_user'])){
                                                echo $_SESSION['temp_user'];unset($_SESSION['temp_user']);}
                                                else if(isset($_SESSION['temp_user_mobile'])){
                                                    $_SESSION['temp_user']=$_SESSION['temp_user_mobile'];
                                                    echo $_SESSION['temp_user'];
                                                    unset($_SESSION['temp_user']);
                                                }
                                                ?>">
                                            <i class="user icon"></i>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Password</label>
                                        <div class="ui left icon input">
                                            <input name="pwd" type="password" placeholder="Password">
                                            <i class="lock icon"></i>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <button class="ui blue submit button" name="submit">Login</button>
                                    </div>
                                    <div class="field">
                                        <a href="#">Forgot your password?</a>
                                    </div>
                                </form>
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
                                        <button class="ui blue submit button"><a href="registration_form.php">Sign Up</a></button>
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
                        <form class="ui form" action="includes/existing_account.php" method="POST">
                            <h3 class="ui header">Login</h3> 
                            <?php
                                if (isset($_SESSION['user_error_mobile'])) {   
                                    echo '<div class="ui basic red error message visible">' . $_SESSION['user_error_mobile'] . '</div>';
                                    unset($_SESSION['user_error_mobile']);
                                }
                              ?>
                            <div class="field">
                                <label>Username</label>
                                <div class="ui left icon input">
                                    <input name="uid" type="text" placeholder="Username" value="<?php if(isset($_SESSION['temp_user_mobile'])){
                                        echo $_SESSION['temp_user_mobile'];unset($_SESSION['temp_user_mobile']);}
                                        else if(isset($_SESSION['temp_user'])){
                                            $_SESSION['temp_user_mobile']=$_SESSION['temp_user'];
                                            echo $_SESSION['temp_user_mobile'];
                                            unset($_SESSION['temp_user_mobile']);}
                                        ?>">
                                    <i class="user icon"></i>
                                </div>
                            </div>
                            <div class="field">
                                <label>Password</label>
                                <div class="ui left icon input">
                                    <input name="pwd" type="password" placeholder="Password">
                                    <i class="lock icon"></i>
                                </div>
                            </div>
                            <div class="field">
                                <button class="ui blue submit button" name="submit">Login</button>
                            </div>
                            <div class="field">
                                <a href="#">Forgot your password?</a>
                            </div>
                        </form>

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
                                    <button class="ui blue submit button"><a href="registration_form.php">Sign Up</a></button>
                                </div>
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
			<footer class="ui container basic segment">
				<?php include('includes/footer.html'); ?>
			</footer>
		</div>

        <script src="js/validate.js"></script>
	</body><!--end body-->
</html>