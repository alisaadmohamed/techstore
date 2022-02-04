<?php include 'inc/header.php'?>


	<?php 


use TechStore\Classes\Models\Product;

		if($request->getHas('id')) {

			$id = $request->get('id');
			
		} else {
			$id = 1;
		}
		$produ = new Product;
		$singProduct= $produ->selectId($id,"products.id AS prodId,products.name AS prodName,`desc` ,price,img,cats.name AS catName");
	
	

	
	?>



	<!-- Single Product -->
<?php if(! empty($singProduct)): ?>

		
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
					<div class="image_selected"><img src="<?= URL . 'uploads/' .$singProduct['img'] ?>" alt=""></div>
				</div>

				<!-- Description -->
				<div class="col-lg-6 order-3">
					<div class="product_description">


						<div class="product_category"><?=$singProduct['catName']?></div>
						<div class="product_name"><?=$singProduct['prodName']?></div>
						<div class="product_text"><p><?=$singProduct['desc']?>.</p></div>
						<div class="order_info d-flex flex-row">
							<form  method="post" action="<?= URL ?>handler/add-cart.php">
								<div class="clearfix" style="z-index: 1000;">
                                    <input id="product_name" type="hidden"  name="id"   value="<?=$singProduct['prodId']?>" >
                                    <input id="product_name" type="hidden"  name="prodName"   value="<?=$singProduct['prodName']?>" >
                                    <input id="product_name" type="hidden"  name="desc"   value="<?=$singProduct['desc']?>" >
                                    <input id="product_name" type="hidden"  name="img"   value="<?=$singProduct['img']?>" >
																		<input id="product_name" type="hidden"  name="price"   value="<?=$singProduct['price']?>" >

									<!-- Product Quantity -->
									<div class="product_quantity clearfix">
										<span>Quantity: </span>
										<input id="quantity_input" type="text"  name="qua" pattern="[0-9]*" value="1">
										<div class="quantity_buttons">
											<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
											<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
										</div>
									</div>

                                    <div  class="product_price">$<?=$singProduct['price']?> </div>

								</div>



	



								<?php if(! $cart->has($singProduct['prodId'])):?>

								<div class="button_container">
									<button type="submit"  name="submit" class="button cart_button">Add to Cart</button>
								</div>


										<?php endif;?>

							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

<?php else:  ?>

<div class="single_product text-center" >
	No Product Found
</div>

<?php endif;?>

<?php include 'inc/footer.php'?>

