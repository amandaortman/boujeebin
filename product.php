<?php
session_start();
include('includes/db.php');
include('includes/header.php');
?>

		<div class="ui container full-basic-segment">
			<div class="ui container">
				<div class="ui grid">
					<div class="two column row">
						<div class="center aligned middle aligned eight wide computer column sixteen wide tablet sixteen wide mobile">

						<?php include('includes/product_description.php');?>
							
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
