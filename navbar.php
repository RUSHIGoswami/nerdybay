<!--menu start-->
	<section id="menu">
		<div class="container">
			<div class="menubar">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">
							<span class="h1">NerdyBay</span>
							<!-- <img src="assets/images/logo/logo.png" alt="" /> -->
						</a>
					</div>
					<!--/.navbar-header -->

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="products.php">Products</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php">Contact</a></li>
							<?php
								if ($_SESSION['logincheck'] == true) {
									echo '<li>
									<a href="logout.php">
										logout
									</a>
									</li>';
								}
								else {
									echo '
									<li>
									<a href="login.php">
										<span class="lnr lnr-user"></span>
									</a>
									</li>';
								}
							?>
							<li>
								<a href="cart.html">
									<span class="lnr lnr-cart"></span>
								</a>
							</li>
						</ul>
						<!-- / ul -->
					</div>
					<!-- /.navbar-collapse -->
				</nav>
				<!--/nav -->
			</div>
			<!--/.menubar -->
		</div>
		<!-- /.container -->
	</section>
	<!--/#menu-->
	<!--menu end-->