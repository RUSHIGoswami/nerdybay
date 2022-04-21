<?php
    include 'config/constants.php';
    $select = "SELECT * FROM `products` WHERE `tag`='trending'";
    $result = mysqli_query($conn, $select);
?>
<section class="service">
		<div class="container">
			<div class="service-details">
				<div class="section-header text-center">
					<h2>Trending Laptops</h2>
				</div>
				<!--/.section-header-->
				<div class="service-content-one">
					<div class="row">
                        <?php
                            while ($row = mysqli_fetch_assoc($result)){
                        ?>
						<div class="col-sm-4 col-xs-12" >
							<div class="service-single text-center">
								<div class="service-img">
									<img src="assets/productimgs/<?php echo $row['product_img'];?>"/>
								</div>
								<!--/.service-img-->
								<div class="service-txt">
									<h2>
										<a href="product.php?name=<?php echo $row['pname'];?>"><?php echo $row['pname'];?></a>
									</h2>
									<p><?php echo $row['category'];?></p>
									<a href="product.php?name=<?php echo $row['pname'];?>" class="service-btn">Show more</a>
								</div>
								<!--/.service-txt-->
							</div>
							<!--/.service-single-->
						</div>
                        <?php }?>
						<!--/.col-->
					</div>
					<!--/.row-->
				</div>
				<!--/.service-content-one-->
			</div>
			<!--/.service-details-->
		</div>
		<!--/.container-->
	</section>