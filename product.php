<?php
include('includes/db.php');
include('includes/header.php');
?>

		<div class="ui container full-basic-segment">
			<div class="ui container">
				<div class="ui grid">
					<div class="two column row">
						<div class="center aligned middle aligned eight wide computer column sixteen wide tablet sixteen wide mobile">
							<img src="https://students.cah.ucf.edu/~am921588/dig4530c/assignments/ia02/img/prod_2.jpg" alt="Hugo Boss Cropped short-sleeved top in two-tone lace">
						</div>
						<div class="middle aligned eight wide computer column sixteen wide tablet sixteen wide mobile">
							<h3 class="ui header">Cropped short-sleeved top in two-tone lace</h3>
							<div class="ui rating" data-rating="3" data-max-rating="5">
								<i class="icon"></i>
								<i class="icon"></i>
								<i class="icon"></i>
								<i class="icon"></i>
								<i class="icon"></i>
							</div>
							<h3 class="ui header"><s>$550</s> $200</h3>
							<h4 class="ui header">In stock</h4>
							<h4 class="ui header">Designer: Hugo Boss</h4>
							<p>A feminine top by HUGO Womenswear, cut to a regular fit with a cropped length. Designed in two-tone lace, this top contrasts a distinctive floral pattern with a simple silhouette and an exposed zipper at the center back. Layer it over a patterned mini dress to create an unconventional print-led ensemble.</p>
							<button class="ui primary button">Add to Cart</button>
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
