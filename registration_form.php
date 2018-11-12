<?php
	include('includes/db.php');
	include('includes/header.html');
?>

	<div class="ui container full-basic-segment">
		<div class="ui container">
	        <div class="ui grid">
	        	<div class="one column row">
	        		<div class="column">
	        			<form class="ui form" action="new_account.php" method="POST">
	        				<h4 class="ui dividing header">Registration</h4>
	        				<div class="field">
						    	<!--have not inserted JS code for validating input yet-->
						    	<label>First Name</label>
						    	<input type="text" name = "fname" id = "fname" placeholder="First Name" maxlength="20" value="<?php if(isset($_SESSION['temp_first'])){echo $_SESSION['temp_first'];unset($_SESSION['temp_first']);}?>">
							    <div id = "fname_error"></div><br />
							</div>

							<div class="field">
							    <label>Last Name</label>
						      	<input type="text" name = "lname" id = "lname" placeholder="Last Name" maxlength="20" value="<?php if(isset($_SESSION['temp_last'])){echo $_SESSION['temp_last'];unset($_SESSION['temp_last']);}?>">
						      	<div id = "lname_error"></div><br />
						    </div>

						    <div class="field">
						      	<label>Username</label>
						      	<input type="text" name = "uid" id = "uid" placeholder="Username" maxlength="20" value="<?php if(isset($_SESSION['temp_user'])){echo $_SESSION['temp_user'];unset($_SESSION['temp_user']);}?>">
						      	<div id = "uid_error"></div><br />
						    </div>

						    <div class="field">
						      	<label>Password</label>
						      	<input type="password" name = "pwd" id = "pwd" placeholder="Password" maxlength="20" value="<?php if(isset($_SESSION['temp_pass'])){echo $_SESSION['temp_pass'];unset($_SESSION['temp_pass']);}?>">
						      	<div id = "pwd_error"></div><br />
						    </div>

						    <div class="field">
						      	<label>Email</label>
						      	<input type="text" name = "email" id = "email" placeholder="Email" maxlength="35" value="<?php if(isset($_SESSION['temp_email'])){echo $_SESSION['temp_email'];unset($_SESSION['temp_email']);}?>">
						      	<div id = "email_error"></div><br />
						    </div>

						      	<!--input type="submit" name = "submit" id = "submit" value="Submit"><br /-->
						    <div class="field">
						    	<button class="blue ui button" type="submit">Submit</button>
						    </div>
						</form>
					</div>
				</div>
			</div>
	    </div>
	</div>  <!--end of full-basic-segment-->

	<div id="footer-style" class="ui container fluid footer-style">
		<footer class="ui container basic segment">
			<?php include('includes/footer.html'); ?>
		</footer>
	</div>
</body>