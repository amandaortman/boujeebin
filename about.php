<?php
session_start();
include('includes/db.php');

include('includes/header.php');

?>
<style>
* {
    box-sizing: border-box;
}

.column {
    float: left;
    width: 33.33%;
    padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}
</style>

		<div class="ui container full-basic-segment">

			<div class="ui container">
				<div class="ui grid">
					<div class="one column row">
						<div class="column">
							<h3 class="ui center aligned header">About Boujee Bin</h3>
							<img src="./img/bbin.jpg" class="ui fluid image" alt="Rack of Clothes"><br>
                            <p>Louis Vuitton, Gucci, Chanel, and more, get the designer brands you want at affordable 
								prices. Boujee Bin offers you luxury clothing at a fraction of the price. We take 
								overflow wholesale products from the top brands around the world and offer it to 
								you at a low-cost.  We offer tops, outerwear, pants, skirts, dresses, from casual 
								to professional looks. Every season for every day, we have the look you want. </p>
							<h4 class="ui center aligned header">Meet the Team</h4>

							<div class="row">
								<div class="column">
									<img src="img/eugene.jpg" alt="Eugene" style="width:100%">
								</div>
								<div class="column">
									<img src="img/amanda.png" alt="Amanda" style="width:100%">
								</div>
								<div class="column">
									<img src="img/ryan.jpg" alt="Ryan" style="width:100%">
								</div>
							</div>
							<div class="row">
								<div class="column">
									<p>Eugene Ross</p>
								</div>
								<div class="column">
									<p>Amanda Ortman</p>
								</div>
								<div class="column">
									<p>Ryan Bealey</p>
								</div>
							</div><br>
							<div class="row">
								<div class="column">
									<img src="img/thalia.jpg" alt="Thalia" style="width:100%">
								</div>
								<div class="column">
									<img src="img/monica.jpg" alt="Monica" style="width:100%">
								</div>
								<div class="column">
									<img>
								</div>
							</div>
							<div class="row">
								<div class="column">
									<p>Thalia Su</p>
								</div>
								<div class="column">
									<p>Monica Mousadi</p>
								</div>
								<div class="column">
									
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
	</div>	
	</body><!--end body-->
</html>