<!DOCTYPE html>
<html lang="en">
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
	}
?>
	<head>


		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129205961-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-129205961-1');
</script>


	<?php 
			$title = 'Boujee Bin';
			$description = 'Designer Brands at Discount Prices';
			$url = 'https://url.com';
			$keywords = 'designer, brands, discounts, clothing, fashion, apparel, womens fashion, mens fashion, discount fashion, bargains, fashion deals, fashion discounts, gucci, louis  vuitton, fendi, prada, kate spade, steve madden, ferragamo, salvatore ferragamo';
			$share = 'img/share.png';
			$ico = 'img/favicon.ico';
		?>

		<title><?php echo $title ?></title>

		<style>
			@import url('./css/reset.css');
			@import url('./css/styles.css');
			@import url('https://cdn.jsdelivr.net/npm/semantic-ui@2.4.0/dist/semantic.min.css');
			@import url('https://fonts.googleapis.com/css?family=Noto+Serif+KR:600,700,900');
			@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,700');
		</style>

		

	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<meta content="width=device-width" name="viewport" />
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta content="yes" name="apple-touch-fullscreen" />

	<meta name='robots' content='noindex,nofollow' /> <!-- remove after launch --> 


	<link rel="icon" href=<?php echo $ico ?> type="image/x-icon" />
	<link rel="shortcut icon" href=<?php echo $ico ?> />


	<meta content=<?php echo $title ?> name="application-name" />
	<meta content=<?php echo $description ?> name="description" />
	<meta content=<?php echo $title ?>name="author" />
	<meta content=<?php echo $keywords ?> name="keywords" />
	<meta content=<?php echo date("Y"); ?> name="copyright" />

	<meta content="website" property="og:type" />
	<meta content=<?php echo $title ?> property="og:title" />
	<meta content=<?php echo $description ?> property="og:description" />
	<meta content=<?php echo $share ?> property="og:image" />
	<meta content=<?php echo $url ?> property="og:url" />
	<meta content="1200" property="og:image:width" />
	<meta content="630" property="og:image:height" />
	<meta content=<?php echo $title ?> property="og:site_name" />
	
	<meta content="summary_large_image" name="twitter:card" />
	<meta content=<?php echo $title ?> name="twitter:title" />
	<meta content=<?php echo $description ?> name="twitter:description" />
	<meta content=<?php echo $share ?> name="twitter:image" />
	<meta content="@twitter" name="twitter:site" />
	<meta content="@twitter" name="twitter:creator" />

	</head>

	<body>
		<header>
			<div id="page-banner" class="ui container fluid">
				<div class="ui grid">
					<div class="one column row">
						<div class="center aligned column">
							<span class="banner-message">Free Shipping on all orders over $50!</span>
						</div>
					</div>
				</div>
			</div>

			<div class="ui container"> 
				<!--MOBILE-->

				<div id="mySidenav" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					<a href="home.php">Home</a>
					<a href="catalog.php?page=all">All</a>
					<a href="catalog.php?page=new">New Arrivals</a>
					<a href="catalog.php?page=mens">Mens</a>
					<a href="catalog.php?page=womens">Womens</a>
					<?php
						if(isset($_SESSION['user_id'])){
							if($_SESSION['type']=='admin' || $_SESSION['type']=='super'){
								echo '<a href="admin.php">Account</a>';
							} else {
								echo '<a href="client.php">Account</a>';
							}
						} else {
							echo '<a href="login.php">Account</a>';
						}
					?>
					<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&business=3WFKL5Q3KQ4AA&display=1">Cart</a>

					<?php
						if(isset($_SESSION['user_id'])){
							echo '<a href="includes/logout.php">Logout</a>';
						}
					?>
				</div>

				<div class="doubling ui padded grid">
					<div class="mobile only two column row">
						<div class="mobile only left aligned middle aligned eight wide column">
							<a href="home.php"><img class='logo' src='img/bb-logo.svg' alt='Boujee Bin' /></a>
						</div>

						<div class="mobile only right floated right aligned middle aligned eight wide column">
							<div class="borderless right menu">
								<a href="login.php" class="item mobile-menu">
									<i class="user icon"></i>
								</a>
								<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&business=3WFKL5Q3KQ4AA&display=1" class="item mobile-menu">
									<i class="shopping cart icon"></i>
								</a>

								<span class="item mobile-menu middle aligned content pointer">
									<i class="bars icon" onclick="openNav()"></i>
								</span>								
							</div>
						</div>
					</div>

					<div class="mobile only one column row">
						<div class="mobile only sixteen wide column">
							<div class="ui search">
								<div class="ui fluid icon input">
									<form method="GET" action="search.php" class="ui icon input">
										<input type="text" name="q" placeholder="Search..." class="prompt">
										<i class="search icon"><input type="submit" value="" style="display: none;"></i>
									</form>
								</div>
								<div class="results"></div>
							</div>
						</div>							
					</div>

				</div>

				<!--COMPUTER/TABLET-->
				<div class="ui padded grid computer only tablet only">
					<div class="three column row">
						<div class="computer only tablet only column">
							<a href="home.php">
								<img class='logo' src='img/bb-logo.svg' alt='Boujee Bin' />
							</a>
						</div>

						<div class="computer only tablet only center aligned middle aligned column">
						
						</div>

						<div class=" tablet only computer only right floated right aligned column">
							<div class="ui search">
								<div class="ui icon input">
									<form method="GET" action="search.php" class="ui icon input">
										<input type="text" name="q" placeholder="Search..." class="prompt">
										<i class="search icon"><input type="submit" value="" style="display: none;"></i>
									</form>
								</div>
								<div class="results"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

			<nav>	
				<div class="ui container"> 
					<div class="ui stackable grid padded grid computer only tablet only">
						<div class="three column row">
							<div class="left aligned middle tablet left aligned computer aligned eight wide computer eleven wide tablet column">
								<ul class="nav">
									<li class="nav-item"><a href="home.php" class="nav-link active">Home</a></li>
									<li class="nav-item"><a href="catalog.php?page=all" class="nav-link">All</a></li>
									<li class="nav-item"><a href="catalog.php?page=new" class="nav-link">New Arrivals</a></li>
									<li class="nav-item"><a href="catalog.php?page=mens" class="nav-link">Mens</a></li>
									<li class="nav-item"><a href="catalog.php?page=womens" class="nav-link">Womens</a></li>
								</ul>
							</div>
			
							<div class="right floated right aligned four wide computer five wide tablet column computer only tablet only">
								<ul class="nav">
									<?php
										if(isset($_SESSION['user_id'])){
											if($_SESSION['type']=='admin' || $_SESSION['type']=='super'){
              									echo '<li class="nav-item"><a href="admin.php" class="nav-link">Account</a></li>';
              								} else {
              									echo '<li class="nav-item"><a href="client.php" class="nav-link">Account</a></li>';
              								}
										} else {
											echo '<li class="nav-item"><a href="login.php" class="nav-link">Account</a></li>';
										}
									?>
									<li class="nav-item"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&business=3WFKL5Q3KQ4AA&display=1" class="nav-link">Cart</a></li>
									<?php
										if(isset($_SESSION['user_id'])){
											echo '<li class="nav-item"><a href="includes/logout.php" class="nav-link">Logout</a></li>';
										}
									?>
								</ul>		
							</div>
						</div>
					</div>
				</div>
			</nav>