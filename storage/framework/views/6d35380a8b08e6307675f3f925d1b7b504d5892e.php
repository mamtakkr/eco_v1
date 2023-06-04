
<?php $__env->startSection('content'); ?>

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="<?php echo e(route('index')); ?>">Home</a></li>
				<li><a href="<?php echo e(route('cart')); ?>">Cart</a></li>
				<li class='active'>Checkout</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="checkout-box ">
			<div class="row">
				<div class="col-xs-6 col-sm-9 col-md-9 rht-col">
					<div class="panel-group checkout-steps" id="accordion">

						<?php if(Auth::check()): ?>
						<!-- checkout-step-01 If Auth -->
						<div class="panel panel-default checkout-step-01">

							<!-- panel-heading -->
							<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
										<span>1</span> Checkout Method <i class="fa fa-check"></i>
									</a>

								</h4>
							</div>
							<!-- panel-heading -->

							<div id="collapseOne" class="panel-collapse collapse in">
								<!-- panel-body  -->
								<div class="panel-body">
									<div class="row">
										<div class="col-md-6 col-sm-6 guest-login">
											<h4 class="checkout-subtitle">Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e(Auth::user()->name); ?></h4>
											<h4 class="checkout-subtitle">Phone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e(Auth::user()->contact); ?></h4>
											<a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                								document.getElementById('logout-form').submit();">
												Logout and Sign in to another account
											</a>
											<div class="panel-heading">
												<h4 class="unicase-checkout-title">
													<a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
														<span style="margin-top:20px;">Continue Checkout</span>
													</a>
												</h4>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 guest-login">
											<h4 class="checkout-subtitle">Advantages of our secure login</h4>
											<span>Fast and easy check out</span><br><br>
											<span>Easy access to your order history and status</span><br><br>
											<span>Get Relevant Alerts and Recommendation</span><br><br>
											<span>Wishlist, Reviews, Ratings and more.</span><br>
										</div>
									</div>
								</div>
								<!-- panel-body  -->
								<span>Please note that upon clicking "Logout" you will lose all items in cart and will be redirected to Flipkart home page.</span>
							</div><!-- row -->
						</div>
						<!--End checkout-step-01 If Auth -->

						<?php else: ?>
						<!-- checkout-step-01  -->
						<div class="panel panel-default checkout-step-01">

							<!-- panel-heading -->
							<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
										<span>1</span>Checkout Method
									</a>
								</h4>
							</div>
							<!-- panel-heading -->

							<div id="collapseOne" class="panel-collapse collapse in">

								<!-- panel-body  -->
								<div class="panel-body">
									<div class="row">

										<!-- already-registered-login -->
										<div class="col-md-6 col-sm-6 already-registered-login">
											<h4 class="checkout-subtitle">Already registered?</h4>
											<p class="text title-tag-line">Please log in below:</p>
											<form method="POST" action="<?php echo e(route('login')); ?>">
												<?php echo csrf_field(); ?>
												<div class="form-group row">
													<label for="inputPrice" class="col-sm-2 col-form-label">Email</label>
													<div class="col-sm-10">
														<input type="email" name="email" class="form-control" id="email" placeholder="Email" required autofocus>
													</div>
												</div>

												<!-- Password -->
												<div class="form-group row">
													<label for="inputPrice" class="col-sm-2 col-form-label">Password</label>
													<div class="col-sm-10">
														<input type="password" name="password" class="form-control" id="password" placeholder="Password" required autocomplete="current-password">
													</div>
												</div>

												<!-- Remember Me -->
												<div class="form-group row">
													<div class="col-md-6 offset-md-4">
														<div class="form-check">
															<input type="checkbox" name="remember" id="remember_me">
															<label class="form-chek-label" for="remember">Remember Me</label>
														</div>
													</div>
												</div>

												<!-- Remember Me -->
												<div class="form-group row mb-0">
													<div class="col-md-8 offset-md-4">
														<button type="submit" class="btn btn-primary">Login</button>
														<?php if(Route::has('password.request')): ?>
														<a class="btn btn-link" href="<?php echo e(route('password.request')); ?>"><?php echo e(__('Forgot your password?')); ?></a>
														<?php endif; ?>
													</div>
												</div>

											</form>
										</div>
										<!-- already-registered-login -->


										<div class="col-md-6 col-sm-6 guest-login">
											<h4 class="checkout-subtitle">Advantages of our secure login</h4>
											<span>Fast and easy check out</span><br><br>
											<span>Easy access to your order history and status</span><br><br>
											<span>Get Relevant Alerts and Recommendation</span><br><br>
											<span>Wishlist, Reviews, Ratings and more.</span><br>
										</div>

									</div>
								</div>
								<!-- panel-body  -->

							</div><!-- row -->
						</div>
						<!-- checkout-step-01  -->
						<?php endif; ?>


						<?php if(Auth::check()): ?>
						<!-- checkout-step-02 If Auth -->
						<div class="panel panel-default checkout-step-02">
							<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
										<span>2</span> Shipping Address <?php if(!empty($shipping_address)): ?> <i class="fa fa-check"></i> <?php endif; ?>
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body">
									<!-- Show Address-form  -->
									<!-- <form class="register-form" role="form"> -->
									<?php $add_id = ""; ?>

									<?php $__currentLoopData = $shipping_address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="radio radio-checkout-unicase">
										<input id="address<?php echo e($row->id); ?>" type="radio" name="text" onchange="addressShip(<?php echo e($row->id); ?>)" value="<?php echo e($row->id); ?>">
										<h4 class="checkout-subtitle"><?php echo e($row->name); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo e($row->address_type); ?>

											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo e($row->contact); ?>

										</h4>
										<p class="checkout-subtitle">
											<?php if(!empty($row->address)): ?> <?php echo e($row->address); ?>, <?php endif; ?>
											<?php if(!empty($row->locality)): ?> <?php echo e($row->locality); ?>, <?php endif; ?>
											<?php if(!empty($row->state)): ?> <?php echo e($row->state); ?>, <?php endif; ?>
											<?php if(!empty($row->city)): ?> <?php echo e($row->city); ?> <?php endif; ?>
										</p>
										<!-- Edit Address-form  -->
										<div class="panel-heading">
											<h4 class="unicase-checkout-title">
												<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree" style="margin-left:820px;">
													Edit
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
											<div class="panel-body">
												<form method="post" action="<?php echo e(route('front-shipping-address-update')); ?>" enctype="multipart/form-data" class="form-horizontal">
													<?php echo csrf_field(); ?>
													<input type="hidden" name="_method" value="Patch" />
													<input type="text" name="id" class="form-control <?php echo e($errors->has('body')? 'is-invalid':''); ?> " value="<?php echo e(old('id',$row->id)); ?>">

													<div class="form-group row">
														<div class="col-sm-12">
															<div class="col-sm-6">
																<input type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?php echo e(old('name',$row->name)); ?>">
															</div>
															<div class="col-sm-6">
																<input type="text" name="contact" class="form-control" id="contact" placeholder="10-digit mobile number" value="<?php echo e(old('contact',$row->contact)); ?>">
															</div>
														</div>
													</div>

													<div class="form-group row">
														<div class="col-sm-12">
															<div class="col-sm-6">
																<input type="text" name="pincode" class="form-control" id="pincode" placeholder="Pincode" value="<?php echo e(old('pincode',$row->pincode)); ?>">
															</div>
															<div class="col-sm-6">
																<input type="text" name="locality" class="form-control" id="locality" placeholder="Locality" value="<?php echo e(old('locality',$row->locality)); ?>">
															</div>
														</div>
													</div>

													<div class="form-group row">
														<div class="col-sm-12">
															<div class="col-sm-12">
																<textarea class="form-control" name="address" id="address" rows="3" placeholder="Address (Area and Street)" value="<?php echo e(old('address',$row->address)); ?>"></textarea>
															</div>
														</div>
													</div>

													<div class="form-group row">
														<div class="col-sm-12">
															<div class="col-sm-6">
																<input type="text" name="city" class="form-control" id="city" placeholder="City/District/Town" value="<?php echo e(old('city',$row->city)); ?>">
															</div>
															<div class="col-sm-6">
																<select class="form-control" name="state">
																	<option value="">Select State</option>
																	<?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																	<option value="<?php echo e($row1['id']); ?>" <?php if($row1['id']==$row->state): ?> selected <?php endif; ?> ><?php echo e($row1['name']); ?></option>
																	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																</select>
															</div>
														</div>
													</div>

													<div class="form-group row">
														<div class="col-sm-12">
															<div class="col-sm-6">
																<input type="text" name="landmark" class="form-control" id="landmark" placeholder="Landmark (Optional)" value="<?php echo e(old('landmark',$row->landmark)); ?>">
															</div>
															<div class="col-sm-6">
																<input type="text" name="contact2" class="form-control" id="contact2" placeholder="Alternate Phone (Optional)" value="<?php echo e(old('contact2',$row->contact2)); ?>">
															</div>
														</div>
													</div>

													<div class="form-group row">
														<label class="radio-button guest-check" for="guest">Address Type</label>
														<div class="col-sm-12">
															<div class="col-sm-6">
																<input id="guest" type="radio" name="address_type" value="home" <?php if ($row->address_type == 'home') echo "checked"; ?>>
																<label class="radio-button guest-check" for="guest">Home (All day delivery)</label>
															</div>
															<div class="col-sm-6">
																<input id="guest" type="radio" name="address_type" value="work" <?php if ($row->address_type == 'work') echo "checked"; ?>>
																<label class="radio-button guest-check" for="guest">Work (Delivery between 10AM-5PM)</label>
															</div>
														</div>
													</div>

													<div class="form-group row">
														<div class="col-sm-12">
															<div class="col-sm-12">
																<input type="submit" class="btn btn-warning" value="Save And Deliver Here" />
																<input type="reset" class="btn btn-link" value="Cancel">
															</div>
														</div>
													</div>

												</form>
											</div>
										</div>
										<div class="panel-heading">
											<h4 class="unicase-checkout-title">
												<a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
													<span style="margin-top:20px;">Deliver Here</span>
												</a>
											</h4>
										</div>
										<!--End Edit Address-form  -->
									</div>
									<?php $add_id = $row->id; ?>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<!-- </form> -->


								</div>
								<!-- Add Address-form  -->
								<div class="panel panel-default checkout-step-05">
									<div class="panel-heading">
										<h4 class="unicase-checkout-title">
											<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFive">
												<span>+</span>Add a new address
											</a>
										</h4>
									</div>
									<div id="collapseFive" class="panel-collapse collapse">
										<div class="panel-body">
											<form method="POST" action="<?php echo e(route('front-shipping-address-store')); ?>">
												<?php echo csrf_field(); ?>
												<div class="form-group row">
													<div class="col-sm-12">
														<div class="col-sm-6">
															<input type="text" name="name" class="form-control" id="name" placeholder="Name">
														</div>
														<div class="col-sm-6">
															<input type="text" name="contact" class="form-control" id="contact" placeholder="10-digit mobile number">
														</div>
													</div>
												</div>

												<div class="form-group row">
													<div class="col-sm-12">
														<div class="col-sm-6">
															<input type="text" name="pincode" class="form-control" id="pincode" placeholder="Pincode">
														</div>
														<div class="col-sm-6">
															<input type="text" name="locality" class="form-control" id="locality" placeholder="Locality">
														</div>
													</div>
												</div>

												<div class="form-group row">
													<div class="col-sm-12">
														<div class="col-sm-12">
															<textarea class="form-control" name="address" id="address" rows="3" placeholder="Address (Area and Street)"></textarea>
														</div>
													</div>
												</div>

												<div class="form-group row">
													<div class="col-sm-12">
														<div class="col-sm-6">
															<input type="text" name="city" class="form-control" id="city" placeholder="City/District/Town">
														</div>
														<div class="col-sm-6">
															<select class="form-control" name="state">
																<option>Select State</option>
																<?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																<option value="<?php echo e($row->id); ?>"><?php echo e($row->name); ?></option>
																<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
															</select>
														</div>
													</div>
												</div>

												<div class="form-group row">
													<div class="col-sm-12">
														<div class="col-sm-6">
															<input type="text" name="landmark" class="form-control" id="landmark" placeholder="Landmark (Optional)">
														</div>
														<div class="col-sm-6">
															<input type="text" name="contact2" class="form-control" id="contact2" placeholder="Alternate Phone (Optional)">
														</div>
													</div>
												</div>

												<div class="form-group row">
													<label class="radio-button guest-check" for="guest">Address Type</label>
													<div class="col-sm-12">
														<div class="col-sm-6">
															<input id="guest" type="radio" name="address_type" value="home" checked>
															<label class="radio-button guest-check" for="guest">Home (All day delivery)</label>
														</div>
														<div class="col-sm-6">
															<input id="guest" type="radio" name="address_type" value="work">
															<label class="radio-button guest-check" for="guest">Work (Delivery between 10AM-5PM)</label>
														</div>
													</div>
												</div>

												<div class="form-group row">
													<div class="col-sm-12">
														<div class="col-sm-12">
															<input type="submit" class="btn btn-warning" value="Save And Deliver Here" />
															<input type="reset" class="btn btn-link" value="Cancel">
														</div>
													</div>
												</div>

											</form>
										</div>
									</div>
								</div>
								<!--End Add Address-form  -->
							</div>
						</div>
						<!--End checkout-step-02 If Auth -->

						<?php else: ?>
						<!-- checkout-step-02  -->
						<div class="panel panel-default checkout-step-02">

							<!-- panel-heading -->
							<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseTwo">
										<span>2</span>Shipping Address
									</a>
								</h4>
							</div>
							<!-- panel-heading -->

						</div>
						<?php endif; ?>

						<?php if(Auth::check()): ?>
						<!-- checkout-step-03 If Auth -->
						<div class="panel panel-default checkout-step-03">
							<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseSix">
										<span>3</span> Order Review <?php if(count($carts)!=0): ?> <i class="fa fa-check"></i> <?php endif; ?>
									</a>
								</h4>
							</div>
							<div id="collapseSix" class="panel-collapse collapse">
								<div class="panel-body">
									<?php if(!empty($carts)): ?>
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
											<?php $total = 0; ?>
											<?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr id="cartpage">
												<td class="romove-item"><a href="#" title="cancel" class="icon" onclick="deleteCart(<?php echo e($cart['id']); ?>)"><i class="fa fa-trash-o"></i></a></td>
												<td class="cart-image">
													<a class="entry-thumbnail" href="<?php echo e(route('product-detail', $cart['pro_id'])); ?>">
														<img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($cart->relProduct['image_url1']); ?>" alt="" height="50" width="50">
													</a>
												</td>
												<td class="cart-product-name-info">
													<h4 class='cart-product-description'><a href="<?php echo e(route('product-detail', $cart['pro_id'])); ?>"><?php echo e($cart->relProduct['title']); ?></a></h4>

												</td>
												<td class="cart-product-edit"><?php echo e($cart->relProduct['sale_price']); ?></td>
												<td class="cart-product-quantity">
													<div class="quant-input">
														<input type="hidden" id="salePrice<?php echo e($cart['pro_id']); ?>" value="<?php echo e($cart->relProduct['sale_price']); ?>" min="1">
														<input type="number" id="quantity<?php echo e($cart['pro_id']); ?>" onchange="updateQuantity(<?php echo e($cart['pro_id']); ?>)" value="<?php echo e($cart['quantity']); ?>" min="1">
													</div>
												</td>
												<td class="cart-product-sub-total">
													<span class="cart-sub-total-price" id="amount<?php echo e($cart['pro_id']); ?>">
														₹ <?php echo e($cart->relProduct['sale_price'] * ($cart['quantity'])); ?>

													</span>
												</td>
											</tr>
											<?php $total += $cart->relProduct['sale_price'] * ($cart['quantity']); ?>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</tbody><!-- /tbody -->
									</table><!-- /table -->
									<?php if(count($carts)==0): ?>
									<h4>No product found in your cart</h4>
									<div class="shopping-cart-btn">
										<span class="">
											<a href="<?php echo e(route('shop')); ?>" class="btn btn-upper btn-primary pull-right outer-right-xs">Continue Shopping</a>
											<!-- <a href="#" class="btn btn-upper btn-primary outer-left-xs">Update shopping cart</a> -->
										</span>
									</div>
									<?php endif; ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<!--End checkout-step-03 If Auth -->

						<?php else: ?>
						<!-- checkout-step-03  -->
						<div class="panel panel-default checkout-step-03">

							<!-- panel-heading -->
							<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseSix">
										<span>3</span>Order Review
									</a>
								</h4>
							</div>
							<!-- panel-heading -->

						</div>
						<!-- checkout-step-03  -->
						<?php endif; ?>


						<?php if(Auth::check() && count($carts)!=0): ?>
						<!-- checkout-step-04 If Auth -->
						<div class="panel panel-default checkout-step-04">
							<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFour">
										<span>4</span>Payment Information
									</a>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse">
								<div class="panel-body">
									<form action="<?php echo e(route('front-place-order')); ?>" method="POST">
										<?php echo csrf_field(); ?>
										<div class="form-group row">
											<label class="radio-button guest-check" for="guest">Payment Type</label>
											<input type="hidden" name="address_id" value="<?php echo e($add_id); ?>" class="address_id">
											<div class="col-sm-12">
												<div class="col-sm-6">
													<input id="guest" type="radio" name="payment_mode" value="COD" checked>
													<label class="radio-button guest-check" for="guest">Cash On Delivery</label>
												</div>
												<div class="col-sm-6">
													<input id="guest" type="radio" name="payment_mode" value="paypal">
													<label class="radio-button guest-check" for="guest">Pay With Paypal</label>
												</div>
												<!-- <div class="col-sm-6">
													<input id="guest" type="radio" name="payment_mode" value="Razorpay" onclick="razorPayOnline()">
													<label class="radio-button guest-check" for="guest">Razorpay Pay Online</label>
												</div> -->
												
											</div>
										</div>
										<button type="submit" name="place_order_btn" class="btn btn-primary">Place Order</button>
									</form>
								</div>
							</div>
						</div>
						<!--End checkout-step-04 If Auth -->

						<?php else: ?>
						<!-- checkout-step-04  -->
						<div class="panel panel-default checkout-step-04">
							<div class="panel-heading">
								<h4 class="unicase-checkout-title">
									<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFour">
										<span>4</span>Payment Information
									</a>
								</h4>
							</div>
						</div>
						<!-- checkout-step-04  -->
						<?php endif; ?>

					</div><!-- /.checkout-steps -->
				</div>

				<?php if(Auth::check()): ?>
				<div class="col-xs-12 col-sm-3 col-md-3 sidebar">
					<!-- checkout-progress-sidebar -->
					<div class="checkout-progress-sidebar ">
						<div class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="unicase-checkout-title">Price Details</h4>
								</div>
								<div class="">
									<ul class="nav nav-checkout-progress list-unstyled">
										<li>Price (<span class="basket-item-count">0</span>) Items
											<span id="total" style="float:right;">₹ <?php echo e($total); ?></span>
										</li>
										<li>Delivery Charges <span style="float:right;">₹ 0</span></li>
										<li>Discount <span style="float:right;" class="discount_price">0</span></li>
										<li>
											<h4>Total Payable
												<span id="total" style="float:right;" class="grand_total">₹ <?php echo e($total); ?></span>
												<h4>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- checkout-progress-sidebar -->
				</div>
				<?php else: ?>
				<div class="col-xs-12 col-sm-3 col-md-3 sidebar">
					<!-- checkout-progress-sidebar -->
					<div class="checkout-progress-sidebar ">
						<div class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="unicase-checkout-title">Fast and easy check out</h4>
								</div>
							</div>
						</div>
					</div>
					<!-- checkout-progress-sidebar -->
				</div>
				<?php endif; ?>



				<div class="col-xs-12 col-sm-3 col-md-3 sidebar estimate-ship-tax">
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
										<input type="text" name="coupon_code" id="applyCoupon" class="form-control unicase-form-control text-input" placeholder="You Coupon..">
										<small id="error_coupon" class="text-danger"></small>
									</div>
									<div class="clearfix pull-right">
										<button type="submit" class="btn-upper btn btn-primary" onclick="applyCoupon()">APPLY COUPON</button>
									</div>
								</td>
							</tr>
						</tbody><!-- /tbody -->
					</table><!-- /table -->
				</div><!-- /.estimate-ship-tax -->


			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
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
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
	function addressShip(id) {
		var _token = "<?php echo e(csrf_token()); ?>";
		var address = $('input[name=address_id]').val(id);
		var qs = {
			id: id,
			_token: _token
		};
		$.ajax({
			url: "",
			method: "GET",
			data: qs,
			success: function(result) {
				// alert(JSON.stringify(qs.id));
				$('.address_id').text(qs.id);
			},
			error: function(request, status, error) {
				console.log('Error is' + request.responseText);
			}
		});
	}
</script>
<script type="text/javascript">
	function ShowHideDiv() {
		var paymentMode = document.getElementById("paymentMode");
		var paymentModeDiv = document.getElementById("paymentModeDiv");
		paymentModeDiv.style.display = paymentMode.value == "Online" ? "block" : "none";

	}

	function applyCoupon() {
		var _token = "<?php echo e(csrf_token()); ?>";
		var coupon_code = $('input[name=coupon_code]').val();
		if ($.trim(coupon_code).length == 0) {
			error_coupon = "Please enter valid Coupon";
			$('#error_coupon').text(error_coupon);
		} else {
			error_coupon = '';
			$('#error_coupon').text(error_coupon);
		}

		if (error_coupon != '') {
			return false;
		}

		var qs = {
			coupon_code: coupon_code,
			_token: _token
		};

		$.ajax({
			url: "<?php echo e(route('ajax-front-apply-coupon-code')); ?>",
			type: 'POST',
			data: qs,
			success: function(response) {
				if (response.error_status == 'error') {
					alertify.set('notifier', 'position', 'top-right');
					alertify.success(response.status);
					$('input[name=coupon_code]').val('');
				} else {
					var discount_price = response.discount_price;
					var grand_total_price = response.grand_total_price;
					$('.coupon_code').prop('readonly', true);
					$('.discount_price').text(discount_price);
					$('#total').text(grand_total_price);
					$('.grand_total').text(grand_total_price);
				}
			}
		});
	}

	// function razorPayOnline(){
	// 	// var payment_mode = document.querySelector('input[name="payment_mode"]:checked').value;
	// 	// alert(payment_mode);
	// }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eco_V1\resources\views/checkout.blade.php ENDPATH**/ ?>