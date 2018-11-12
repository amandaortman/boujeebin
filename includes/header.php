<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Boujee Bin - Amanda Ortman</title>

		<style>
			@import url('./css/reset.css');
			@import url('./css/styles.css');
			@import url('https://cdn.jsdelivr.net/npm/semantic-ui@2.4.0/dist/semantic.min.css');

			@import url('https://fonts.googleapis.com/css?family=Noto+Serif+KR:600,700,900');
			@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,700');
		</style>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">

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
					<a href="login.php">Account</a>
					<a href="cart.php">Cart</a>
				</div>

				<div class="doubling ui padded grid">
					<div class="mobile only two column row">
						<div class="mobile only left aligned middle aligned eight wide column">
							<a href="home.php"><h2 class="mobile-header">Boujee Bin</h2></a>
						</div>

						<div class="mobile only right floated right aligned middle aligned eight wide column">
							<div class="borderless right menu">
								<a href="login.php" class="item mobile-menu">
									<i class="user icon"></i>
								</a>
								<a href="cart.php" class="item mobile-menu">
									<i class="shopping cart icon"></i>
								</a>

								<span class="item mobile-menu middle aligned content pointer">
									<i class="bars icon" onclick="openNav()"></i>
								</span>								
							</div>
						</div>
					</div>

					<div class="mobile only one colum row">
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
						<div class="computer only tablet only column"></div>

						<div class="computer only tablet only center aligned middle aligned column">
							<a href="home.php"><h2>Boujee Bin</h2></a>
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
							<div class="large screen only four wide computer column"></div>
							<div class="left aligned middle tablet center aligned computer aligned eight wide computer eleven wide tablet column">
								<ul class="nav">
									<li class="nav-item"><a href="home.php" class="nav-link active">Home</a></li>
									<li class="nav-item"><a href="catalog.php?page=all" class="nav-link">All</a></li>
									<li class="nav-item"><a href="catalog.php?page=new" class="nav-link">New Arrivals</a></li>
									<li class="nav-item"><a href="catalog.php?page=mens" class="nav-link">Mens</a></li>
									<li class="nav-item"><a href="catalog.php?page=womens" class="nav-link">Womens</a></li>
								</ul>
							</div>
			
							<div class="right floated center aligned four wide computer five wide tablet column computer only tablet only">
								<ul class="nav">
									<li class="nav-item"><a href="login.php" class="nav-link">Account</a></li>
									<li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
								</ul>		
							</div>
						</div>
					</div>
				</div>
			</nav>


