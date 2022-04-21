	<section id="menu">
		<div class="container">
			<div class="menubar">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">
							<span class="h1">NerdyBay, <?php echo $_SESSION['admin']; ?></span>
						</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="index.php">Dashboard</a></li>
							<li><a href="products.php">Products</a></li>
							<li><a href="addprdt.php">Add Product</a></li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Settings
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<li><a class="dropdown-item" href="addadmin.php" style="color: black">Add Admin</a>
									</li>
									<li><a class="dropdown-item" href="logout.php" style="color: black">Logout</a></li>
								</ul>
							</li>

						</ul>
						<!-- / ul -->
					</div>
				</nav>
			</div>
		</div>
	</section>