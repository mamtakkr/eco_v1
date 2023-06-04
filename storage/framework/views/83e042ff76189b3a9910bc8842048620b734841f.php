
<?php $__env->startSection('content'); ?>

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-vs" id="top-banner-and-menu">
  <div class="container">
    <div class="row">
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
              <?php $__currentLoopData = get_categories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if(count(get_child_categories($cat->id))!=0): ?>
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i><?php echo e(ucfirst($cat->title)); ?></a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <?php $__currentLoopData = get_child_categories($cat->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="<?php echo e(route('product-cat',$child_cat->slug)); ?>"><?php echo e(ucfirst($child_cat->title)); ?></a></li>
                        </ul>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <!-- /.row -->
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu -->
              </li>
              <?php else: ?>
              <li class="dropdown menu-item">
                <a href="<?php echo e(route('product-cat',$cat->slug)); ?>" class="dropdown-toggle">
                  <i class="icon fa fa-envira"></i><?php echo e(ucfirst($cat->title)); ?></a>
              </li>
              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <!-- /.menu-item -->

            </ul>
            <!-- /.nav -->
          </nav>
          <!-- /.megamenu-horizontal -->
        </div>
        <!-- /.side-menu -->
        <!-- ================================== TOP NAVIGATION : END ================================== -->

        <!-- ============================================== HOT DEALS ============================================== -->
        
<!-- ============================================== HOT DEALS: END ============================================== -->

<!-- ============================================== SPECIAL OFFER ============================================== -->

<div class="sidebar-widget outer-bottom-small">
  <h3 class="section-title">Special Offer</h3>
  <div class="sidebar-widget-body outer-top-xs">
    <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
      <?php $__currentLoopData = $special_offer_sets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $special_offers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="item">
        <div class="products special-product">
          <?php $__currentLoopData = $special_offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $special_offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($special_offer->discount > 50): ?>
          <div class="product">
            <div class="product-micro">
              <div class="row product-micro-row">
                <div class="col col-xs-5">
                  <div class="product-image">
                    <div class="image">
                      <a href="<?php echo e(route('product-detail', $special_offer->slug)); ?>">
                        <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($special_offer->image_url1); ?>" alt="" height="253" width="202">
                      </a>
                    </div>
                    <!-- /.image -->

                  </div>
                  <!-- /.product-image -->
                </div>
                <!-- /.col -->
                <div class="col col-xs-7">
                  <div class="product-info">
                    <h3 class="name"><a href="#"><?php echo e($special_offer->title); ?></a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="product-price">
                      <span class="price">₹<?php echo e($special_offer->sale_price); ?></span>
                      <span class="price-before-discount"><?php if($special_offer->price > $special_offer->sale_price): ?> ₹ <?php echo e($special_offer->price); ?> <?php endif; ?></span><br>
                      <span class="text text-success" style="font-size: large;">
                        <?php if($special_offer->discount>0): ?> <b><?php echo e($special_offer->discount); ?>% off </b><?php endif; ?></span>
                    </div>
                    <!-- /.product-price -->

                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.product-micro-row -->
            </div>
            <!-- /.product-micro -->

          </div>
          <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
  <!-- /.sidebar-widget-body -->
</div>
<!-- /.sidebar-widget -->
<!-- ============================================== SPECIAL OFFER : END ============================================== -->
<!-- ============================================== PRODUCT TAGS ============================================== -->
<div class="sidebar-widget product-tag">
  <h3 class="section-title">Product Categories tags</h3>
  <div class="sidebar-widget-body outer-top-xs">
    <div class="tag-list">
      <?php $__currentLoopData = get_categories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a class="item" href="<?php echo e(route('product-cat',$product_cat->slug)); ?>"><?php echo e($product_cat->title); ?></a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <!-- /.tag-list -->
  </div>
  <!-- /.sidebar-widget-body -->
</div>
<!-- /.sidebar-widget -->
<!-- ============================================== PRODUCT TAGS : END ============================================== -->
<!-- ============================================== SPECIAL DEALS ============================================== -->

<div class="sidebar-widget outer-bottom-small">
  <h3 class="section-title">Deal Of The Day</h3>
  <div class="sidebar-widget-body outer-top-xs">
    <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
      <?php $__currentLoopData = $deal_of_daysets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deal_of_days): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="item">
        <div class="products special-product">
          <?php $__currentLoopData = $deal_of_days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deal_of_day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="product">
            <div class="product-micro">
              <div class="row product-micro-row">
                <div class="col col-xs-5">
                  <div class="product-image">
                    <div class="image">
                      <a href="<?php echo e(route('product-detail', $deal_of_day->relProduct->slug)); ?>">
                        <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($deal_of_day->relProduct->image_url1); ?>" alt="" height="253" width="202">
                      </a>
                    </div>
                    <!-- /.image -->

                  </div>
                  <!-- /.product-image -->
                </div>
                <!-- /.col -->
                <div class="col col-xs-7">
                  <div class="product-info">
                    <h3 class="name"><a href="#"><?php echo e($deal_of_day->relProduct->title); ?></a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="product-price">
                      <span class="price">₹<?php echo e($deal_of_day->relProduct->sale_price); ?></span>
                      <span class="price-before-discount"><?php if($deal_of_day->relProduct->price > $deal_of_day->relProduct->sale_price): ?> ₹ <?php echo e($deal_of_day->relProduct->price); ?> <?php endif; ?></span><br>
                      <span class="text text-success" style="font-size: large;">
                        <?php if($deal_of_day->relProduct->discount>0): ?> <b><?php echo e($deal_of_day->relProduct->discount); ?>% off </b><?php endif; ?></span>
                      <p class="text text-success" style="font-size:smaller">Deal Of Day</p>
                    </div>
                    <!-- /.product-price -->

                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.product-micro-row -->
            </div>
            <!-- /.product-micro -->

          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
  <!-- /.sidebar-widget-body -->
</div>
<!-- /.sidebar-widget -->
<!-- ============================================== SPECIAL DEALS : END ============================================== -->
<!-- ============================================== NEWSLETTER ============================================== -->
<div class="sidebar-widget newsletter outer-bottom-small">
  <h3 class="section-title">Newsletters</h3>
  <div class="sidebar-widget-body outer-top-xs">
    <p>Sign Up for Our Newsletter!</p>
    <form>
      <div class="form-group">
        <label class="sr-only" for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
      </div>
      <button class="btn btn-primary">Subscribe</button>
    </form>
  </div>
  <!-- /.sidebar-widget-body -->
</div>
<!-- /.sidebar-widget -->
<!-- ============================================== NEWSLETTER: END ============================================== -->

<!-- ============================================== Testimonials============================================== -->
<div class="sidebar-widget outer-top-vs ">
  <div id="advertisement" class="advertisement">
    <div class="item">
      <div class="avatar"><img src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/testimonials/member1.png" alt="Image"></div>
      <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer. Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat.<em>"</em></div>
      <div class="clients_author">John Doe <span>Abc Company</span> </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.item -->

    <div class="item">
      <div class="avatar"><img src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/testimonials/member3.png" alt="Image"></div>
      <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer. Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat.<em>"</em></div>
      <div class="clients_author">Stephen Doe <span>Xperia Designs</span> </div>
    </div>
    <!-- /.item -->

    <div class="item">
      <div class="avatar"><img src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/testimonials/member2.png" alt="Image"></div>
      <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer. Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat.<em>"</em></div>
      <div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span> </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.item -->

  </div>
  <!-- /.owl-carousel -->
</div>

<!-- ============================================== Testimonials: END ============================================== -->


</div>
<!-- /.sidemenu-holder -->
<!-- ============================================== SIDEBAR : END ============================================== -->

<!-- ============================================== CONTENT ============================================== -->
<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
  <!-- ========================================== SECTION – HERO ========================================= -->

  <div id="hero">
    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

      <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="item" style="background-image: url(public/images/sliders/<?php echo e($slider->image_url); ?>);">
        <div class="container-fluid">
          <div class="caption bg-color vertical-center text-left">
            <div class="slider-header fadeInDown-1"><?php echo e($slider->title); ?></div>
            <div class="big-text fadeInDown-1"> <?php echo e($slider->sub_title); ?> </div>
            <div class="excerpt fadeInDown-2 hidden-xs"> <span><?php echo substr($slider->short_description,0,60); ?></span> </div>
            <div class="button-holder fadeInDown-3"> <a href="#" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
          </div>
          <!-- /.caption -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <!-- /.item -->

    </div>
    <!-- /.owl-carousel -->
  </div>

  <!-- ========================================= SECTION – HERO : END ========================================= -->


  <!-- ============================================== SCROLL TABS ============================================== -->
  <div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
    <div class="more-info-tab clearfix ">
      <h3 class="new-product-title pull-left">New Products</h3>
      <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
        <!-- <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li> -->
        <?php if(!empty($categories[0]['title'])): ?><li><a data-transition-type="backSlide" href="#<?php echo e($categories[0]['title']); ?>" data-toggle="tab"><?php echo e($categories[0]['title']); ?></a></li><?php endif; ?>
        <?php if(!empty($categories[1]['title'])): ?><li><a data-transition-type="backSlide" href="#<?php echo e($categories[1]['title']); ?>" data-toggle="tab"><?php echo e($categories[1]['title']); ?></a></li><?php endif; ?>
        <?php if(!empty($categories[2]['title'])): ?><li><a data-transition-type="backSlide" href="#<?php echo e($categories[2]['title']); ?>" data-toggle="tab"><?php echo e($categories[2]['title']); ?></a></li><?php endif; ?>
        <?php if(!empty($categories[3]['title'])): ?><li><a data-transition-type="backSlide" href="#<?php echo e($categories[3]['title']); ?>" data-toggle="tab"><?php echo e($categories[3]['title']); ?></a></li><?php endif; ?>
      </ul>
      <!-- /.nav-tabs -->
    </div>

    <div class="tab-content outer-top-xs">
      <?php if(!empty($categories[0])): ?>
      <div class="tab-pane in active" id="<?php echo e($categories[0]['title']); ?>">
        <div class="product-slider">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
            <?php $__currentLoopData = $categories[0]['rel_product']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image">
                      <a href="<?php echo e(route('product-detail', $product['slug'])); ?>">
                        <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product['image_url1']); ?>" alt="">
                        <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product['image_url2']); ?>" alt="" class="hover-image">
                      </a>
                    </div>
                  </div>
                  <div class="product-info text-left">
                    <h3 class="name"><a href="<?php echo e(route('product-detail', $product['slug'])); ?>"><?php echo e(ucfirst($product['title'])); ?></a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price">
                      <span class="price"> ₹<?php echo e($product['sale_price']); ?> </span>
                      <span class="price-before-discount"><?php if($product['price'] > $product['sale_price']): ?> ₹ <?php echo e($product['price']); ?> <?php endif; ?></span>
                      <span class="text text-success">&nbsp;&nbsp;&nbsp; <?php if($product['discount']>0): ?> <b><?php echo e($product['discount']); ?>% off </b><?php endif; ?></span>
                    </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <input type="hidden" class="product_id" value="<?php echo e($product['id']); ?>">
                          <input type="hidden" id="quantity<?php echo e($product['id']); ?>" class="qty-input form-control" value="1" min="1">
                          <button type="submit" class="btn btn-primary icon" onclick="addCart(<?php echo e($product['id']); ?>)"><i class="fa fa-shopping-cart"></i></button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- /.item -->

          </div>
          <!-- /.home-owl-carousel -->
        </div>
        <!-- /.product-slider -->
      </div>
      <?php endif; ?>
      <!-- /.tab-pane -->
      <?php if(!empty($categories[1])): ?>
      <div class="tab-pane" id="<?php echo e($categories[1]['title']); ?>">
        <div class="product-slider">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
            <?php $__currentLoopData = $categories[1]['rel_product']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image">
                      <a href="<?php echo e(route('product-detail', $product['slug'])); ?>">
                        <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product['image_url1']); ?>" alt="">
                        <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product['image_url2']); ?>" alt="" class="hover-image">
                      </a>
                    </div>
                  </div>
                  <div class="product-info text-left">
                    <h3 class="name"><a href="<?php echo e(route('product-detail', $product['slug'])); ?>"><?php echo e(ucfirst($product['title'])); ?></a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price">
                      <span class="price"> ₹<?php echo e($product['sale_price']); ?> </span>
                      <span class="price-before-discount"><?php if($product['price'] > $product['sale_price']): ?> ₹ <?php echo e($product['price']); ?> <?php endif; ?></span>
                      <span class="text text-success">&nbsp;&nbsp;&nbsp; <?php if($product['discount']>0): ?> <b><?php echo e($product['discount']); ?>% off </b><?php endif; ?></span>
                    </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <input type="hidden" class="product_id" value="<?php echo e($product['id']); ?>">
                          <input type="hidden" id="quantity<?php echo e($product['id']); ?>" class="qty-input form-control" value="1" min="1">
                          <button type="submit" class="btn btn-primary icon" onclick="addCart(<?php echo e($product['id']); ?>)"><i class="fa fa-shopping-cart"></i></button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- /.item -->
          </div>
          <!-- /.home-owl-carousel -->
        </div>
        <!-- /.product-slider -->
      </div>
      <?php endif; ?>
      <!-- /.tab-pane -->
      <?php if(!empty($categories[2])): ?>
      <div class="tab-pane" id="<?php echo e($categories[2]['title']); ?>">
        <div class="product-slider">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
            <?php $__currentLoopData = $categories[2]['rel_product']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image">
                      <a href="<?php echo e(route('product-detail', $product['slug'])); ?>">
                        <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product['image_url1']); ?>" alt="">
                        <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product['image_url2']); ?>" alt="" class="hover-image">
                      </a>
                    </div>
                  </div>
                  <div class="product-info text-left">
                    <h3 class="name"><a href="<?php echo e(route('product-detail', $product['slug'])); ?>"><?php echo e(ucfirst($product['title'])); ?></a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price">
                      <span class="price"> ₹<?php echo e($product['sale_price']); ?> </span>
                      <span class="price-before-discount"><?php if($product['price'] > $product['sale_price']): ?> ₹ <?php echo e($product['price']); ?> <?php endif; ?></span>
                      <span class="text text-success">&nbsp;&nbsp;&nbsp; <?php if($product['discount']>0): ?> <b><?php echo e($product['discount']); ?>% off </b><?php endif; ?></span>
                    </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <input type="hidden" class="product_id" value="<?php echo e($product['id']); ?>">
                          <input type="hidden" id="quantity<?php echo e($product['id']); ?>" class="qty-input form-control" value="1" min="1">
                          <button type="submit" class="btn btn-primary icon" onclick="addCart(<?php echo e($product['id']); ?>)"><i class="fa fa-shopping-cart"></i></button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <!-- /.home-owl-carousel -->
        </div>
        <!-- /.product-slider -->
      </div>
      <?php endif; ?>
      <!-- /.tab-pane -->
      <?php if(!empty($categories[3])): ?>
      <div class="tab-pane" id="<?php echo e($categories[3]['title']); ?>">
        <div class="product-slider">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
            <?php $__currentLoopData = $categories[3]['rel_product']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image">
                      <a href="<?php echo e(route('product-detail', $product['slug'])); ?>">
                        <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product['image_url1']); ?>" alt="">
                        <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product['image_url2']); ?>" alt="" class="hover-image">
                      </a>
                    </div>
                  </div>
                  <div class="product-info text-left">
                    <h3 class="name"><a href="<?php echo e(route('product-detail', $product['slug'])); ?>"><?php echo e(ucfirst($product['title'])); ?></a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price">
                      <span class="price"> ₹<?php echo e($product['sale_price']); ?> </span>
                      <span class="price-before-discount"><?php if($product['price'] > $product['sale_price']): ?> ₹ <?php echo e($product['price']); ?> <?php endif; ?></span>
                      <span class="text text-success">&nbsp;&nbsp;&nbsp; <?php if($product['discount']>0): ?> <b><?php echo e($product['discount']); ?>% off </b><?php endif; ?></span>
                    </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <input type="hidden" class="product_id" value="<?php echo e($product['id']); ?>">
                          <input type="hidden" id="quantity<?php echo e($product['id']); ?>" class="qty-input form-control" value="1" min="1">
                          <button type="submit" class="btn btn-primary icon" onclick="addCart(<?php echo e($product['id']); ?>)"><i class="fa fa-shopping-cart"></i></button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <!-- /.home-owl-carousel -->
        </div>
        <!-- /.product-slider -->
      </div>
      <?php endif; ?>
      <!-- /.tab-pane -->

    </div>
    <!-- /.tab-content -->
  </div>
  <!-- /.scroll-tabs -->
  <!-- ============================================== SCROLL TABS : END ============================================== -->

  <div class="wide-banners outer-bottom-xs">
    <div class="row">
      <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-4 col-sm-4">
        <div class="wide-banner cnt-strip">
          <div class="image" style="background-image: url(public/images/banners/<?php echo e($banner->image_url); ?>); height: 134px; width: 293px; position: relative; ">
            <img src="<?php echo e(URL::to('/')); ?>/public/images/banners/<?php echo e($banner->image_url); ?>" class="img-responsive" style="position: absolute; height: 134px; width: 293px;">
            <span class="overlay-text" style="position: absolute; margin-top: 10px; margin-left: 10%;">
              <h4><?php echo e($banner->title); ?></h4>
            </span>
            <span class="overlay-text" style="position: absolute; margin-top: 20px; margin-left: 10%;">
              <h2><?php echo e($banner->sub_title); ?></h2>
            </span>
            <a href="<?php echo e($banner->link_url); ?>" class="overlay-text" style="position: absolute; margin-top: 105px; margin-left: 10%;">
              <h6><?php echo e($banner->link_title); ?></h6>
            </a>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>


  <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
  <!-- ============================================== FEATURED PRODUCTS ============================================== -->
  <section class="section featured-product">
    <div class="row">
      <div class="col-lg-3">
        <h3 class="section-title"><?php echo e(ucfirst($main_category['title'])); ?></h3>
        <?php if(count(get_child_categories($main_category['id']))!=0): ?>
        <ul class="sub-cat">
          <?php $__currentLoopData = get_child_categories($main_category['id']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><a href="<?php echo e(route('product-cat',$child_cat->slug)); ?>"><?php echo e(ucfirst($child_cat['title'])); ?></a></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
      </div>
      <div class="col-lg-9">
        <div class="owl-carousel homepage-owl-carousel custom-carousel owl-theme outer-top-xs">
          <?php $__currentLoopData = $main_category['rel_product']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="item item-carousel">
            <div class="products">
              <div class="product">
                <div class="product-image">
                  <div class="image">
                    <a href="<?php echo e(route('product-detail', $product['slug'])); ?>">
                      <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product['image_url1']); ?>" alt="<?php echo e($product['title']); ?>">
                      <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product['image_url2']); ?>" alt="<?php echo e($product['title']); ?>" class="hover-image">
                    </a>

                  </div>
                  <!-- /.image -->

                  <!-- <div class="tag new"><span>new</span></div> -->
                </div>
                <!-- /.product-image -->

                <div class="product-info text-left">
                  <h3 class="name"><a href="<?php echo e(route('product-detail', $product['slug'])); ?>"><?php echo e(ucfirst($product['title'])); ?></a></h3>
                  <div class="rating rateit-small"></div>
                  <div class="description"></div>
                  <div class="product-price">
                    <span class="price"> $<?php echo e($product['sale_price']); ?> </span>
                    <span class="price-before-discount"><?php if($product['price'] > $product['sale_price']): ?> ₹ <?php echo e($product['price']); ?> <?php endif; ?></span>
                    <span class="text text-success">&nbsp;&nbsp;&nbsp; <?php if($product['discount']>0): ?> <b><?php echo e($product['discount']); ?>% off </b><?php endif; ?></span>
                  </div>
                  <!-- /.product-price -->

                </div>
                <!-- /.product-info -->
                <div class="cart clearfix animate-effect">
                  <div class="action">
                    <ul class="list-unstyled">
                      <li class="add-cart-button btn-group">
                        <input type="hidden" class="product_id" value="<?php echo e($product['id']); ?>">
                        <input type="hidden" id="quantity<?php echo e($product['id']); ?>" class="qty-input form-control" value="1" min="1">
                        <button type="submit" class="btn btn-primary icon" onclick="addCart(<?php echo e($product['id']); ?>)"><i class="fa fa-shopping-cart"></i></button>
                      </li>
                      <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                      <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                    </ul>
                  </div>
                  <!-- /.action -->
                </div>
                <!-- /.cart -->
              </div>
              <!-- /.product -->

            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <!-- /.item -->
        </div>
      </div>
    </div>
    <!-- /.home-owl-carousel -->
  </section>
  <!-- /.section -->
  <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
  <!-- ============================================== WIDE PRODUCTS ============================================== -->

  <!-- /.wide-banners -->
  <!-- ============================================== WIDE PRODUCTS : END ============================================== -->



  <!-- /.sidebar-widget -->
  <!-- ============================================== BEST SELLER : END ============================================== -->

  <!-- ============================================== BLOG SLIDER ============================================== -->
  <?php if(count($blogs)!=0): ?>
  <section class="section latest-blog outer-bottom-vs">
    <h3 class="section-title">Latest form Blog</h3>
    <div class="blog-slider-container outer-top-xs">
      <div class="owl-carousel blog-slider custom-carousel">
        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item">
          <div class="blog-post">
            <div class="blog-post-image">
              <div class="image">
                <a href="blog.html">
                  <img src="<?php echo e(URL::to('/')); ?>/public/images/blogs/<?php echo e($blog->image_url); ?>" alt="<?php echo e($blog->image_url); ?>" style="height: 115px; width: 281px;">
                </a>
              </div>
            </div>
            <!-- /.blog-post-image -->

            <div class="blog-post-info text-left">
              <h3 class="name"><a href="#"><?php echo e($blog->title); ?></a></h3>
              <span class="info">By <?php echo e($blog->author_name); ?> &nbsp;|&nbsp; <?php echo e(date('d M Y', strtotime($blog['created_at']))); ?> </span>
              <p class="text"><?php echo substr($blog->description,0,150); ?></p>
            </div>
            <!-- /.blog-post-info -->

          </div>
          <!-- /.blog-post -->
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- /.item -->

      </div>
      <!-- /.owl-carousel -->
    </div>
    <!-- /.blog-slider-container -->
  </section>
  <?php endif; ?>
  <!-- /.section -->
  <!-- ============================================== BLOG SLIDER : END ============================================== -->

  <!-- ============================================== FEATURED PRODUCTS ============================================== -->
  <section class="section new-arriavls">
    <h3 class="section-title">Featured Products</h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
      <?php $__currentLoopData = $featured_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="item item-carousel">
        <div class="products">
          <div class="product">
            <div class="product-image">
              <div class="image">
                <a href="<?php echo e(route('product-detail', $featured_product->relProduct->slug)); ?>">
                  <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($featured_product->relProduct->image_url1); ?>" alt="<?php echo e($featured_product->relProduct->title); ?>">
                  <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($featured_product->relProduct->image_url2); ?>" alt="<?php echo e($featured_product->relProduct->title); ?>" class="hover-image">
                </a>

              </div>
              <!-- /.image -->

              <!-- <div class="tag new"><span>new</span></div> -->
            </div>
            <!-- /.product-image -->

            <div class="product-info text-left">
              <h3 class="name"><a href="<?php echo e(route('product-detail', $featured_product->relProduct->slug)); ?>"><?php echo e(ucfirst($featured_product->relProduct->title)); ?></a></h3>
              <div class="rating rateit-small"></div>
              <div class="description"></div>
              <div class="product-price">
                <span class="price"> $<?php echo e($featured_product->relProduct->sale_price); ?> </span>
                <span class="price-before-discount"><?php if($featured_product->relProduct->price > $featured_product->relProduct->sale_price): ?> ₹ <?php echo e($featured_product->relProduct->price); ?> <?php endif; ?></span>
                <span class="text text-success">&nbsp;&nbsp;&nbsp; <?php if($featured_product->relProduct->discount>0): ?> <b><?php echo e($featured_product->relProduct->discount); ?>% off </b><?php endif; ?></span>
              </div>
              <!-- /.product-price -->

            </div>
            <!-- /.product-info -->
            <div class="cart clearfix animate-effect">
              <div class="action">
                <ul class="list-unstyled">
                  <li class="add-cart-button btn-group">
                    <input type="hidden" class="product_id" value="<?php echo e($featured_product->pro_id); ?>">
                    <input type="hidden" id="quantity<?php echo e($featured_product->pro_id); ?>" class="qty-input form-control" value="1" min="1">
                    <button type="submit" class="btn btn-primary icon" onclick="addCart(<?php echo e($featured_product['pro_id']); ?>)"><i class="fa fa-shopping-cart"></i></button>
                  </li>
                  <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                  <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                </ul>
              </div>
              <!-- /.action -->
            </div>
            <!-- /.cart -->
          </div>
          <!-- /.product -->

        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <!-- /.home-owl-carousel -->
  </section>
  <!-- /.section -->
  <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

</div>
<!-- /.homebanner-holder -->
<!-- ============================================== CONTENT : END ============================================== -->
</div>
<!-- /.row -->
<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider">
  <div class="logo-slider-inner">
    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
      <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt=""> </a> </div>
      <!--/.item-->

      <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt=""> </a> </div>
      <!--/.item-->

      <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand3.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt=""> </a> </div>
      <!--/.item-->

      <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt=""> </a> </div>
      <!--/.item-->

      <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt=""> </a> </div>
      <!--/.item-->

      <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand6.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt=""> </a> </div>
      <!--/.item-->

      <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt=""> </a> </div>
      <!--/.item-->

      <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt=""> </a> </div>
      <!--/.item-->

      <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt=""> </a> </div>
      <!--/.item-->

      <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" alt=""> </a> </div>
      <!--/.item-->
    </div>
    <!-- /.owl-carousel #logo-slider -->
  </div>
  <!-- /.logo-slider-inner -->

</div>
<!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
</div>
<!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->

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


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eco_V1\resources\views/index.blade.php ENDPATH**/ ?>