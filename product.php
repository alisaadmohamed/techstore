<?php include ('inc/header.php') ?>



	<!-- Single Product -->

	<div class="single_product">
		<div class="container">
			<div class="row">

				<!-- Images -->
				<!-- <div class="col-lg-2 order-lg-1 order-2">
					<ul class="image_list">
						<li data-image="images/single_4.jpg"><img src="assets/images/single_4.jpg" alt=""></li>
						<li data-image="images/single_2.jpg"><img src="assets/images/single_2.jpg" alt=""></li>
						<li data-image="images/single_3.jpg"><img src="assets/images/single_3.jpg" alt=""></li>
					</ul>
				</div> -->

				<!-- Selected Image -->
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="image_selected"><img src="assets/images/single_4.jpg" alt=""></div>
				</div>

				<!-- Description -->
				<div class="col-lg-6 order-3">
					<div class="product_description">
						<div class="product_category">Laptops</div>
						<div class="product_name">MacBook Air 13</div>
						<div class="product_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at. Maecenas aliquet, dolor a faucibus efficitur, nisi tellus cursus urna, eget dictum lacus turpis.</p></div>
						<div class="order_info d-flex flex-row">
							<form action="#">
								<div class="clearfix" style="z-index: 1000;">

									<!-- Product Quantity -->
									<div class="product_quantity clearfix">
										<span>Quantity: </span>
										<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
										<div class="quantity_buttons">
											<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
											<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
										</div>
									</div>

                                    <div class="product_price">$2000</div>

								</div>

								<div class="button_container">
									<button type="button" class="button cart_button">Add to Cart</button>
								</div>

							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


<?php include ('inc/footer.php') ?>