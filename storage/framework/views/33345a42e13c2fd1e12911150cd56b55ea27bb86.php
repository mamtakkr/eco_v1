
<?php $__env->startSection('content'); ?>

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="<?php echo e(route('index')); ?>">Home</a></li>
				<li><a href="<?php echo e(route('shop')); ?>">Shop</a></li>
				<li class='active'>Shopping Cart</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
	<div class="container">
		<div class="row ">
			<?php if(!empty($cart_data)): ?>
			<?php if(Cookie::get('shopping_cart')): ?>
			<?php $total="0" ?>
			<div class="shopping-cart">
				<div class="shopping-cart-table ">
					<div class="table-responsive">
						<div class="col-md-12 text-right mb-3">
							<a href="javascript:void(0)" class="font-weight-bold btn btn-primary" onclick="clearCart()">Clear Cart</a>
						</div>
						<table class="table">
							<thead>
								<tr>
									<th class="cart-romove item">Remove</th>
									<th class="cart-description item">Image</th>
									<th class="cart-product-name item">Product Name</th>
									<th class="cart-edit item">Price</th>
									<th class="cart-qty item">Quantity</th>
									<th class="cart-sub-total item">Total Amount</th>
									<!-- <th class="cart-total last-item">Grandtotal</th> -->
								</tr>
							</thead><!-- /thead -->

							<tbody>
								<?php //$total = 0; 
								?>
								<?php $__currentLoopData = $cart_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr id="cartpage">
									<td class="romove-item"><a href="#" title="cancel" class="icon" onclick="deleteCart(<?php echo e($cart['item_id']); ?>)"><i class="fa fa-trash-o"></i></a></td>
									<td class="cart-image">
										<a class="entry-thumbnail" href="<?php echo e(route('product-detail', $cart['item_id'])); ?>">
											<img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($cart['item_image']); ?>" alt="">
										</a>
									</td>
									<td class="cart-product-name-info">
										<h4 class='cart-product-description'><a href="<?php echo e(route('product-detail', $cart['item_id'])); ?>"><?php echo e($cart['item_name']); ?></a></h4>
										<div class="row">
											<div class="col-sm-12">
												<div class="rating rateit-small"></div>
											</div>
											<div class="col-sm-12">
												<div class="reviews">
													(06 Reviews)
												</div>
											</div>
										</div><!-- /.row -->
										<!-- <div class="cart-product-info">
											<span class="product-color">COLOR:<span>Blue</span></span>
						</div> -->
									</td>
									<td class="cart-product-edit"><?php echo e($cart['item_price']); ?></td>
									<td class="cart-product-quantity">
										<div class="quant-input">
											<!-- <div class="arrows">
				                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
				                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
				                </div> -->
											<!-- <form> -->
											<input type="text" id="salePrice<?php echo e($cart['item_id']); ?>" value="<?php echo e($cart['item_price']); ?>" min="1">
											<input type="number" id="quantity<?php echo e($cart['item_id']); ?>" onchange="updateQuantity(<?php echo e($cart['item_id']); ?>)" value="<?php echo e($cart['item_quantity']); ?>" min="1">
											<!-- </form> -->
										</div>
									</td>
									<td class="cart-product-sub-total">
										<span class="cart-sub-total-price" id="amount<?php echo e($cart['item_id']); ?>">
											₹ <?php echo e($cart['item_price'] * ($cart['item_quantity'])); ?>

										</span>
									</td>
								</tr>
								<?php $total += $cart['item_price'] * ($cart['item_quantity']); ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody><!-- /tbody -->

							<tfoot>
								<tr>
									<td colspan="7">
										<div class="shopping-cart-btn">
											<span class="">
												<a href="<?php echo e(route('shop')); ?>" class="btn btn-upper btn-primary pull-right outer-right-xs">Continue Shopping</a>
												<!-- <a href="#" class="btn btn-upper btn-primary outer-left-xs">Update shopping cart</a> -->
											</span>
										</div><!-- /.shopping-cart-btn -->
									</td>
								</tr>
							</tfoot>
						</table><!-- /table -->
					</div>
				</div><!-- /.shopping-cart-table -->
				<div class="col-md-4 col-sm-12 estimate-ship-tax">
					<table class="table">
						<thead>
							<tr>
								<th>
									<span class="estimate-title">Estimate shipping and tax</span>
									<p>Enter your destination to get shipping and tax.</p>
								</th>
							</tr>
						</thead><!-- /thead -->
						<tbody>
							<tr>
								<td>
									<div class="form-group">
										<label class="info-title control-label">Country <span>*</span></label>
										<select class="form-control unicase-form-control selectpicker">
											<option>--Select options--</option>
											<option>India</option>
											<option>SriLanka</option>
											<option>united kingdom</option>
											<option>saudi arabia</option>
											<option>united arab emirates</option>
										</select>
									</div>
									<div class="form-group">
										<label class="info-title control-label">State/Province <span>*</span></label>
										<select class="form-control unicase-form-control selectpicker">
											<option>--Select options--</option>
											<option>TamilNadu</option>
											<option>Kerala</option>
											<option>Andhra Pradesh</option>
											<option>Karnataka</option>
											<option>Madhya Pradesh</option>
										</select>
									</div>
									<div class="form-group">
										<label class="info-title control-label">Zip/Postal Code</label>
										<input type="text" class="form-control unicase-form-control text-input" placeholder="">
									</div>
									<div class="pull-right">
										<button type="submit" class="btn-upper btn btn-primary">GET A QOUTE</button>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div><!-- /.estimate-ship-tax -->

				<div class="col-md-4 col-sm-12 estimate-ship-tax">
					<table class="table">
						<thead>
							<tr>
								<th>
									<span class="estimate-title">Discount Code</span>
									<p>Enter your coupon code if you have one..</p>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="form-group">
										<input type="text" class="form-control unicase-form-control text-input" placeholder="You Coupon..">
									</div>
									<div class="clearfix pull-right">
										<button type="submit" class="btn-upper btn btn-primary">APPLY COUPON</button>
									</div>
								</td>
							</tr>
						</tbody><!-- /tbody -->
					</table><!-- /table -->
				</div><!-- /.estimate-ship-tax -->

				<div class="col-md-4 col-sm-12 cart-shopping-total">
					<table class="table">
						<thead>
							<tr>
								<th>
									<div class="cart-sub-total">
										Grand Total:<span class="inner-left-md" id="total">₹ <?php echo e($total); ?></span>
									</div>
									<!-- <div class="cart-grand-total">
						Grand Total<span class="inner-left-md">$600.00</span>
					</div> -->
								</th>
							</tr>
						</thead><!-- /thead -->
						<tbody>
							<tr>
								<td>
									<div class="cart-checkout-btn pull-right">
										<?php if(Auth::user()): ?>
										<a href="<?php echo e(route('checkout')); ?>" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</a>
										<?php else: ?>
										<a href="#" class="btn btn-primary checkout-btn" data-toggle="modal" data-target="#loginModal">PROCCED TO CHEKOUT</a>
										<?php endif; ?>
										<span class="">Checkout with multiples address!</span>
									</div>
								</td>
							</tr>
						</tbody><!-- /tbody -->
					</table><!-- /table -->
				</div><!-- /.cart-shopping-total -->
			</div><!-- /.shopping-cart -->

			<?php endif; ?>
			<?php endif; ?>

			<?php if(!empty($carts) && Auth::check()): ?>
			<?php $total="0" ?>
			<div class="shopping-cart">
				<div class="shopping-cart-table ">
					<div class="table-responsive">
						<div class="col-md-12 text-right mb-3">
							<a href="javascript:void(0)" class="font-weight-bold btn btn-primary" onclick="clearCart(<?php echo e(Auth::user()->id); ?>)">Clear Cart</a>
						</div>
						<table class="table">
							<thead>
								<tr>
									<th class="cart-romove item">Remove</th>
									<th class="cart-description item">Image</th>
									<th class="cart-product-name item">Product Name</th>
									<th class="cart-edit item">Price</th>
									<th class="cart-qty item">Quantity</th>
									<th class="cart-sub-total item">Total Amount</th>
									<!-- <th class="cart-total last-item">Grandtotal</th> -->
								</tr>
							</thead><!-- /thead -->

							<tbody>
								<?php //$total = 0; 
								?>
								<?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr id="cartpage">
									<td class="romove-item"><a href="#" title="cancel" class="icon" onclick="deleteCart(<?php echo e($cart['id']); ?>)"><i class="fa fa-trash-o"></i></a></td>
									<td class="cart-image">
										<a class="entry-thumbnail" href="<?php echo e(route('product-detail', $cart['pro_id'])); ?>">
											<img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($cart['pro_image_url1']); ?>" alt="">
										</a>
									</td>
									<td class="cart-product-name-info">
										<h4 class='cart-product-description'><a href="<?php echo e(route('product-detail', $cart['pro_id'])); ?>"><?php echo e($cart['pro_title']); ?></a></h4>
										<div class="row">
											<div class="col-sm-12">
												<div class="rating rateit-small"></div>
											</div>
											<div class="col-sm-12">
												<div class="reviews">
													(06 Reviews)
												</div>
											</div>
										</div><!-- /.row -->
										<!-- <div class="cart-product-info">
											<span class="product-color">COLOR:<span>Blue</span></span>
						</div> -->
									</td>
									<td class="cart-product-edit"><?php echo e($cart['pro_sale_price']); ?></td>
									<td class="cart-product-quantity">
										<div class="quant-input">
											<!-- <div class="arrows">
				                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
				                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
				                </div> -->
											<!-- <form> -->
											<input type="text" id="salePrice<?php echo e($cart['pro_id']); ?>" value="<?php echo e($cart['pro_sale_price']); ?>" min="1">
											<input type="number" id="quantity<?php echo e($cart['pro_id']); ?>" onchange="updateQuantity(<?php echo e($cart['pro_id']); ?>)" value="<?php echo e($cart['quantity']); ?>" min="1">
											<!-- </form> -->
										</div>
									</td>
									<td class="cart-product-sub-total">
										<span class="cart-sub-total-price" id="amount<?php echo e($cart['pro_id']); ?>">
											₹ <?php echo e($cart['pro_sale_price'] * ($cart['quantity'])); ?>

										</span>
									</td>
								</tr>
								<?php $total += $cart['pro_sale_price'] * ($cart['quantity']); ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody><!-- /tbody -->

							<tfoot>
								<tr>
									<td colspan="7">
										<div class="shopping-cart-btn">
											<span class="">
												<a href="<?php echo e(route('shop')); ?>" class="btn btn-upper btn-primary pull-right outer-right-xs">Continue Shopping</a>
												<!-- <a href="#" class="btn btn-upper btn-primary outer-left-xs">Update shopping cart</a> -->
											</span>
										</div><!-- /.shopping-cart-btn -->
									</td>
								</tr>
							</tfoot>
						</table><!-- /table -->
					</div>
				</div><!-- /.shopping-cart-table -->
				<div class="col-md-4 col-sm-12 estimate-ship-tax">
					<table class="table">
						<thead>
							<tr>
								<th>
									<span class="estimate-title">Estimate shipping and tax</span>
									<p>Enter your destination to get shipping and tax.</p>
								</th>
							</tr>
						</thead><!-- /thead -->
						<tbody>
							<tr>
								<td>
									<div class="form-group">
										<label class="info-title control-label">Country <span>*</span></label>
										<select class="form-control unicase-form-control selectpicker">
											<option>--Select options--</option>
											<option>India</option>
											<option>SriLanka</option>
											<option>united kingdom</option>
											<option>saudi arabia</option>
											<option>united arab emirates</option>
										</select>
									</div>
									<div class="form-group">
										<label class="info-title control-label">State/Province <span>*</span></label>
										<select class="form-control unicase-form-control selectpicker">
											<option>--Select options--</option>
											<option>TamilNadu</option>
											<option>Kerala</option>
											<option>Andhra Pradesh</option>
											<option>Karnataka</option>
											<option>Madhya Pradesh</option>
										</select>
									</div>
									<div class="form-group">
										<label class="info-title control-label">Zip/Postal Code</label>
										<input type="text" class="form-control unicase-form-control text-input" placeholder="">
									</div>
									<div class="pull-right">
										<button type="submit" class="btn-upper btn btn-primary">GET A QOUTE</button>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div><!-- /.estimate-ship-tax -->

				<div class="col-md-4 col-sm-12 estimate-ship-tax">
					<table class="table">
						<thead>
							<tr>
								<th>
									<span class="estimate-title">Discount Code</span>
									<p>Enter your coupon code if you have one..</p>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="form-group">
										<input type="text" class="form-control unicase-form-control text-input" placeholder="You Coupon..">
									</div>
									<div class="clearfix pull-right">
										<button type="submit" class="btn-upper btn btn-primary">APPLY COUPON</button>
									</div>
								</td>
							</tr>
						</tbody><!-- /tbody -->
					</table><!-- /table -->
				</div><!-- /.estimate-ship-tax -->

				<div class="col-md-4 col-sm-12 cart-shopping-total">
					<table class="table">
						<thead>
							<tr>
								<th>
									<div class="cart-sub-total">
										Grand Total:<span class="inner-left-md" id="total">₹ <?php echo e($total); ?></span>
									</div>
									<!-- <div class="cart-grand-total">
						Grand Total<span class="inner-left-md">$600.00</span>
					</div> -->
								</th>
							</tr>
						</thead><!-- /thead -->
						<tbody>
							<tr>
								<td>
									<div class="cart-checkout-btn pull-right">
										<?php if(Auth::user()): ?>
										<a href="<?php echo e(route('checkout')); ?>" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</a>
										<?php else: ?>
										<a href="#" class="btn btn-primary checkout-btn" data-toggle="modal" data-target="#loginModal">PROCCED TO CHEKOUT</a>
										<?php endif; ?>
										<span class="">Checkout with multiples address!</span>
									</div>
								</td>
							</tr>
						</tbody><!-- /tbody -->
					</table><!-- /table -->
				</div><!-- /.cart-shopping-total -->
			</div><!-- /.shopping-cart -->
			<?php else: ?>
			<div class="row">
				<div class="col-md-12 mycard py-5 text-center">
					<div class="mycards">
						<h4>Your cart is currently empty.</h4>
						<a href="<?php echo e(route('shop')); ?>" class="btn btn-upper btn-primary outer-left-xs mt-5">Continue Shopping</a>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div> <!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
		<div id="brands-carousel" class="logo-slider wow fadeInUp">

			<div class="logo-slider-inner">
				<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
					<div class="item m-t-15">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand1.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt="">
						</a>
					</div>
					<!--/.item-->

					<div class="item m-t-10">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand2.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt="">
						</a>
					</div>
					<!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand3.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt="">
						</a>
					</div>
					<!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand4.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt="">
						</a>
					</div>
					<!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand5.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt="">
						</a>
					</div>
					<!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand6.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt="">
						</a>
					</div>
					<!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand2.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt="">
						</a>
					</div>
					<!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand4.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt="">
						</a>
					</div>
					<!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand1.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt="">
						</a>
					</div>
					<!--/.item-->

					<div class="item">
						<a href="#" class="image">
							<img data-echo="assets/images/brands/brand5.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt="">
						</a>
					</div>
					<!--/.item-->
				</div><!-- /.owl-carousel #logo-slider -->
			</div><!-- /.logo-slider-inner -->

		</div><!-- /.logo-slider -->
		<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
	</div><!-- /.container -->
</div><!-- /.body-content -->

<!-- ============================================================= FOOTER ============================================================= -->

<!-- ============================================== INFO BOXES ============================================== -->
<div class="row our-features-box">
	<div class="container">
		<ul>
			<li>
				<div class="feature-box">
					<div class="icon-truck"></div>
					<div class="content-blocks">We ship worldwide</div>
				</div>
			</li>
			<li>
				<div class="feature-box">
					<div class="icon-support"></div>
					<div class="content-blocks">call
						+1 800 789 0000</div>
				</div>
			</li>
			<li>
				<div class="feature-box">
					<div class="icon-money"></div>
					<div class="content-blocks">Money Back Guarantee</div>
				</div>
			</li>
			<li>
				<div class="feature-box">
					<div class="icon-return"></div>
					<div class="content">30 days return</div>
				</div>
			</li>

		</ul>
	</div>
</div>
<!-- /.info-boxes -->
<!-- ============================================== INFO BOXES : END ============================================== -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eco_V1\resources\views/cart.blade.php ENDPATH**/ ?>