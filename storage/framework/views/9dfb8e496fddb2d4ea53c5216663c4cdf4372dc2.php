
<?php $__env->startSection('content'); ?>

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
                <li><a href="#">Clothing</a></li>
                <li class='active'><?php echo e(ucfirst($product_detail->title)); ?></li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row single-product'>
            <div class='col-xs-12 col-sm-12 col-md-3 sidebar'>
                <div class="sidebar-module-container">
                    <!-- <div class="home-banner outer-top-n outer-bottom-xs">
                        <img src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/banners/LHS-banner.jpg" alt="Image">
                    </div> -->



                    <!-- ============================================== HOT DEALS ============================================== -->
                    
<!-- ============================================== HOT DEALS: END ============================================== -->

<!-- ============================================== Popular Products ============================================== -->

<div class="sidebar-widget outer-bottom-small">
    <h3 class="section-title">Popular Products</h3>
    <div class="sidebar-widget-body outer-top-xs">
        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
            <?php $__currentLoopData = $popular_productsets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popular_products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item">
                <div class="products special-product">
                    <?php $__currentLoopData = $popular_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popular_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="product">
                        <div class="product-micro">
                            <div class="row product-micro-row">
                                <div class="col col-xs-5">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="<?php echo e(route('product-detail', $popular_product->relProduct->slug)); ?>">
                                                <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($popular_product->relProduct->image_url1); ?>" alt="" height="253" width="202">
                                            </a>
                                        </div>
                                        <!-- /.image -->

                                    </div>
                                    <!-- /.product-image -->
                                </div>
                                <!-- /.col -->
                                <div class="col col-xs-7">
                                    <div class="product-info">
                                        <h3 class="name"><a href="#"><?php echo e($popular_product->relProduct->title); ?></a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="product-price">
                                            <span class="price">₹<?php echo e($popular_product->relProduct->sale_price); ?></span>
                                            <span class="price-before-discount"><?php if($popular_product->relProduct->price > $popular_product->relProduct->sale_price): ?> ₹ <?php echo e($popular_product->relProduct->price); ?> <?php endif; ?></span><br>
                                            <span class="text text-success" style="font-size: large;">
                                                <?php if($popular_product->relProduct->discount>0): ?> <b><?php echo e($popular_product->relProduct->discount); ?>% off </b><?php endif; ?></span>
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
<!-- ============================================== Popular Products : END ============================================== -->


</div>
</div><!-- /.sidebar -->
<div class='col-xs-12 col-sm-12 col-md-9 rht-col'>
    <div class="detail-block">
        <div class="product_data">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gallery-holder">
                    <div class="product-item-holder size-big single-product-gallery small-gallery">

                        <div id="owl-single-product">

                            <?php if(!empty($product_detail->image_url1)): ?>
                            <div class="single-product-gallery-item" id="slide1">
                                <a data-lightbox="image-1" data-title="Gallery" href="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product_detail->image_url1); ?>">
                                    <img class="img-responsive" alt="" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" data-echo="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product_detail->image_url1); ?>" />
                                </a>
                            </div><!-- /.single-product-gallery-item -->
                            <?php endif; ?>
                            <?php if(!empty($product_detail->image_url2)): ?>
                            <div class="single-product-gallery-item" id="slide2">
                                <a data-lightbox="image-1" data-title="Gallery" href="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product_detail->image_url2); ?>">
                                    <img class="img-responsive" alt="" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" data-echo="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product_detail->image_url2); ?>" />
                                </a>
                            </div><!-- /.single-product-gallery-item -->
                            <?php endif; ?>
                            <?php if(!empty($product_detail->image_url3)): ?>
                            <div class="single-product-gallery-item" id="slide3">
                                <a data-lightbox="image-1" data-title="Gallery" href="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product_detail->image_url3); ?>">
                                    <img class="img-responsive" alt="" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" data-echo="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product_detail->image_url3); ?>" />
                                </a>
                            </div><!-- /.single-product-gallery-item -->
                            <?php endif; ?>
                            <?php if(!empty($product_detail->image_url4)): ?>
                            <div class="single-product-gallery-item" id="slide4">
                                <a data-lightbox="image-1" data-title="Gallery" href="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product_detail->image_url4); ?>">
                                    <img class="img-responsive" alt="" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" data-echo="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product_detail->image_url4); ?>" />
                                </a>
                            </div><!-- /.single-product-gallery-item -->
                            <?php endif; ?>
                            <?php if(!empty($product_detail->image_url1)): ?>
                            <div class="single-product-gallery-item" id="slide5">
                                <a data-lightbox="image-1" data-title="Gallery" href="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product_detail->image_url1); ?>">
                                    <img class="img-responsive" alt="" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" data-echo="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product_detail->image_url1); ?>" />
                                </a>
                            </div><!-- /.single-product-gallery-item -->
                            <?php endif; ?>

                        </div><!-- /.single-product-slider -->


                        <div class="single-product-gallery-thumbs gallery-thumbs">

                            <div id="owl-single-product-thumbnails">
                                <?php if(!empty($product_detail->image_url1)): ?>
                                <div class="item">
                                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                                        <img class="img-responsive" alt="" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" data-echo="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product_detail->image_url1); ?>" />
                                    </a>
                                </div>
                                <?php endif; ?>
                                <?php if(!empty($product_detail->image_url2)): ?>
                                <div class="item">
                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide2">
                                        <img class="img-responsive" alt="" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" data-echo="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product_detail->image_url2); ?>" />
                                    </a>
                                </div>
                                <?php endif; ?>
                                <?php if(!empty($product_detail->image_url3)): ?>
                                <div class="item">
                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3" href="#slide3">
                                        <img class="img-responsive" alt="" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" data-echo="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product_detail->image_url3); ?>" />
                                    </a>
                                </div>
                                <?php endif; ?>
                                <?php if(!empty($product_detail->image_url4)): ?>
                                <div class="item">
                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="4" href="#slide4">
                                        <img class="img-responsive" alt="" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" data-echo="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product_detail->image_url4); ?>" />
                                    </a>
                                </div>
                                <?php endif; ?>
                                <?php if(!empty($product_detail->image_url1)): ?>
                                <div class="item">
                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="5" href="#slide5">
                                        <img class="img-responsive" alt="" src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/blank.gif" data-echo="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product_detail->image_url1); ?>" />
                                    </a>
                                </div>
                                <?php endif; ?>

                            </div><!-- /#owl-single-product-thumbnails -->



                        </div><!-- /.gallery-thumbs -->

                    </div><!-- /.single-product-gallery -->
                </div><!-- /.gallery-holder -->
                <div class='col-sm-12 col-md-8 col-lg-8 product-info-block'>
                    <div class="product-info">
                        <h1 class="name"><?php echo e(ucfirst($product_detail->title)); ?></h1>

                        <div class="rating-reviews m-t-20">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pull-left">
                                        <div class="rating rateit-small"></div>
                                    </div>
                                    <div class="pull-left">
                                        <div class="reviews">
                                            <a href="#" class="lnk">(13 Reviews)</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.rating-reviews -->

                        <div class="stock-container info-container m-t-10">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pull-left">
                                        <div class="stock-box">
                                            <span class="label">Availability :</span>
                                        </div>
                                    </div>
                                    <div class="pull-left">
                                        <div class="stock-box">
                                            <span class="value"> <?php if($product_detail->quantity > 0): ?>In Stock <?php else: ?> Out Of Stock <?php endif; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.stock-container -->

                        <div class="description-container m-t-20">
                            <?php echo e($product_detail->short_description); ?>

                        </div><!-- /.description-container -->

                        <div class="price-container info-container m-t-30">
                            <div class="row">


                                <div class="col-sm-6 col-xs-6">
                                    <div class="price-box">
                                        <span class="price">₹<?php echo e($product_detail->sale_price); ?></span>
                                        <span class="price-strike"><?php if($product_detail->price > $product_detail->sale_price): ?> ₹ <?php echo e($product_detail->price); ?> <?php endif; ?></span>
                                        <span class="text text-success" style="font-size: large;">&nbsp;&nbsp;&nbsp;
                                            <?php if($product_detail->discount>0): ?> <b><?php echo e($product_detail->discount); ?>% off </b><?php endif; ?></span>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-6">
                                    <div class="favorite-button m-t-5">
                                        <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                        <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
                                            <i class="fa fa-signal"></i>
                                        </a>
                                        <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>

                            </div><!-- /.row -->
                        </div><!-- /.price-container -->

                        <div class="quantity-container info-container">
                            <div class="row">

                                <div class="qty">
                                    <span class="label">Qty :</span>
                                </div>

                                <div class="qty-count">
                                    <div class="cart-quantity">
                                        <div class="quant-input">
                                            <!-- <div class="arrows">
                                                            <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                            <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                                        </div> -->
                                            <input type="text" class="product_id" value="<?php echo e($product_detail->id); ?>">
                                            <input type="number" id="quantity<?php echo e($product_detail->id); ?>" class="qty-input form-control" value="1" min="1">
                                        </div>
                                    </div>
                                </div>

                                <div class="add-btn">
                                    <button type="submit" class="btn btn-primary icon" onclick="addCart(<?php echo e($product_detail['id']); ?>)"><i class="fa fa-shopping-cart inner-right-vs"></i></button>

                                    <!-- <a href="#" class="add-to-cart-btn btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a> -->
                                </div>


                            </div><!-- /.row -->
                        </div><!-- /.quantity-container -->






                    </div><!-- /.product-info -->
                </div><!-- /.col-sm-7 -->
            </div><!-- /.row -->
        </div>
    </div>

    <div class="product-tabs inner-bottom-xs">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                    <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                    <li><a data-toggle="tab" href="#review">REVIEW</a></li>
                    <li><a data-toggle="tab" href="#tags">TAGS</a></li>
                </ul><!-- /.nav-tabs #product-tabs -->
            </div>
            <div class="col-sm-12 col-md-9 col-lg-9">

                <div class="tab-content">

                    <div id="description" class="tab-pane in active">
                        <div class="product-tab">
                            <?php echo e($product_detail->description); ?>

                        </div>
                    </div><!-- /.tab-pane -->

                    <div id="review" class="tab-pane">
                        <div class="product-tab">

                            <div class="product-reviews">
                                <h4 class="title">Customer Reviews</h4>

                                <div class="reviews">
                                    <div class="review">
                                        <div class="review-title"><span class="summary">We love this product</span><span class="date"><i class="fa fa-calendar"></i><span>1 days ago</span></span></div>
                                        <div class="text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aliquam suscipit."</div>
                                    </div>

                                </div><!-- /.reviews -->
                            </div><!-- /.product-reviews -->



                            <div class="product-add-review">
                                <h4 class="title">Write your own review</h4>
                                <div class="review-table">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="cell-label">&nbsp;</th>
                                                    <th>1 star</th>
                                                    <th>2 stars</th>
                                                    <th>3 stars</th>
                                                    <th>4 stars</th>
                                                    <th>5 stars</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="cell-label">Quality</td>
                                                    <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td class="cell-label">Price</td>
                                                    <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td class="cell-label">Value</td>
                                                    <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                    <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                </tr>
                                            </tbody>
                                        </table><!-- /.table .table-bordered -->
                                    </div><!-- /.table-responsive -->
                                </div><!-- /.review-table -->

                                <div class="review-form">
                                    <div class="form-container">
                                        <form class="cnt-form">

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputName">Your Name <span class="astk">*</span></label>
                                                        <input type="text" class="form-control txt" id="exampleInputName" placeholder="">
                                                    </div><!-- /.form-group -->
                                                    <div class="form-group">
                                                        <label for="exampleInputSummary">Summary <span class="astk">*</span></label>
                                                        <input type="text" class="form-control txt" id="exampleInputSummary" placeholder="">
                                                    </div><!-- /.form-group -->
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputReview">Review <span class="astk">*</span></label>
                                                        <textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder=""></textarea>
                                                    </div><!-- /.form-group -->
                                                </div>
                                            </div><!-- /.row -->

                                            <div class="action text-right">
                                                <button class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
                                            </div><!-- /.action -->

                                        </form><!-- /.cnt-form -->
                                    </div><!-- /.form-container -->
                                </div><!-- /.review-form -->

                            </div><!-- /.product-add-review -->

                        </div><!-- /.product-tab -->
                    </div><!-- /.tab-pane -->

                    <div id="tags" class="tab-pane">
                        <div class="product-tag">

                            <h4 class="title">Product Tags</h4>
                            <form class="form-inline form-cnt">
                                <div class="form-container">

                                    <div class="form-group">
                                        <label for="exampleInputTag">Add Your Tags: </label>
                                        <input type="email" id="exampleInputTag" class="form-control txt">


                                    </div>

                                    <button class="btn btn-upper btn-primary" type="submit">ADD TAGS</button>
                                </div><!-- /.form-container -->
                            </form><!-- /.form-cnt -->

                            <form class="form-inline form-cnt">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
                                </div>
                            </form><!-- /.form-cnt -->

                        </div><!-- /.product-tab -->
                    </div><!-- /.tab-pane -->

                </div><!-- /.tab-content -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.product-tabs -->

    <!-- ============================================== FEATURED PRODUCTS ============================================== -->
    <section class="section new-arriavls">
        <h3 class="section-title">Related Products</h3>
        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            <?php $__currentLoopData = $related_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image">
                                <a href="<?php echo e(route('product-detail', $related_product->slug)); ?>">
                                    <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($related_product->image_url1); ?>" alt="<?php echo e($related_product->title); ?>">
                                    <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($related_product->image_url2); ?>" alt="<?php echo e($related_product->title); ?>" class="hover-image">
                                </a>

                            </div>
                            <!-- /.image -->

                            <!-- <div class="tag new"><span>new</span></div> -->
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a href="<?php echo e(route('product-detail', $related_product->slug)); ?>"><?php echo e(ucfirst($related_product->title)); ?></a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price">
                                <span class="price"> $<?php echo e($related_product->sale_price); ?> </span>
                                <span class="price-before-discount"><?php if($related_product->price > $related_product->sale_price): ?> ₹ <?php echo e($related_product->price); ?> <?php endif; ?></span>
                                <span class="text text-success">&nbsp;&nbsp;&nbsp; <?php if($related_product->discount>0): ?> <b><?php echo e($related_product->discount); ?>% off </b><?php endif; ?></span>
                            </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <input type="hidden" class="product_id" value="<?php echo e($related_product->id); ?>">
                                        <input type="hidden" id="quantity<?php echo e($related_product->id); ?>" class="qty-input form-control" value="1" min="1">
                                        <button type="submit" class="btn btn-primary icon" onclick="addCart(<?php echo e($related_product['id']); ?>)"><i class="fa fa-shopping-cart"></i></button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="#" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
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
    </section>
    <!-- /.section -->
    <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

</div><!-- /.col -->
<div class="clearfix"></div>
</div><!-- /.row -->
<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider">

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
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara-projects\eco_V1\resources\views/product_detail.blade.php ENDPATH**/ ?>