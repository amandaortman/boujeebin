<?php
session_start();
include('includes/db.php');
include('includes/header.php');
?>

		<div class="ui container full-basic-segment">

			<div class="ui container">
				<div class="ui grid">
					<div class="one column row">
						<div class="column">
                            <h3 class="ui center aligned header">Contact Us</h3>
                            <h4 class="ui center aligned header">Boujee Bin Headquarters</h4>
                            <h4 class="ui center aligned header">4000 Central Florida Blvd.</h4>
                            <h4 class="ui center aligned header">Orlando, FL 32816</h4>
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