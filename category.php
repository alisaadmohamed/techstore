<?php include ('inc/header.php') ?>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="assets/images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Category Name Here</h2>
		</div>
	</div>

	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

					<!-- Shop Sidebar -->
					<div class="shop_sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">Categories</div>

                            <?php foreach ($allCategory  as $cat): ?>

							<ul class="sidebar_categories">
								<li><a href=""><?= $cat['name']?></a></li>
							</ul>
                            <?php  endforeach; ?>
						</div>

					</div>

				</div>

				<div class="col-lg-9">

					<!-- Shop Content -->

					<div class="shop_content">

						<div class="product_grid">
							<div class="product_grid_border"></div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="uploads/1.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-cart-plus"></i></div>
							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="uploads/2.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Huawei MediaPad...</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-cart-plus"></i></div>
							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="uploads/3.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">Apple iPod shuffle</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-cart-plus"></i></div>
							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="uploads/4.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Sony MDRZX310W</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-cart-plus"></i></div>

							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="uploads/5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">LUNA Smartphone</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-cart-plus"></i></div>

							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="uploads/6.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">Canon IXUS 175...</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-cart-plus"></i></div>

							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="uploads/7.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">Canon STM Kit...</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-cart-plus"></i></div>

							</div>


							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="uploads/8.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Rapoo 7100p Gray</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-cart-plus"></i></div>
							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="uploads/9.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">Canon EF</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-cart-plus"></i></div>
							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="uploads/10.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Gembird SPK-103</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-cart-plus"></i></div>
							</div>

						</div>

						<!-- Shop Page Navigation -->

						<div class="shop_page_nav d-flex flex-row">
							<div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
							<ul class="page_nav d-flex flex-row">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">...</a></li>
								<li><a href="#">21</a></li>
							</ul>
							<div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>	

	<!-- Copyright -->
<?php include ('inc/footer.php') ?>