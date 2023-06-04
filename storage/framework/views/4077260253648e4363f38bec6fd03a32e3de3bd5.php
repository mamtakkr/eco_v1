
<?php $__env->startSection('content'); ?>

<!-- ============================================== HEADER : END ============================================== -->

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
        <li class='active'>Handbags</li>
      </ul>
    </div>
    <!-- /.breadcrumb-inner -->
  </div>
  <!-- /.container -->
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
      <div class='col-xs-12 col-sm-12 col-md-3 sidebar'>
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
              <?php $__currentLoopData = get_categories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if(count(get_child_categories($cat->id))!=0): ?>
              <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i><?php echo e(ucfirst($cat->title)); ?></a>
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
        <div class="sidebar-module-container">
          <div class="sidebar-filter">

            <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
            <div class="sidebar-widget">
              <h3 class="section-title">Sub Category</h3>
              <div class="widget-header">
                <!-- <h4 class="widget-title">Sub Category</h4> -->
              </div>
              <div class="sidebar-widget-body">
                <div class="accordion">
                  <?php $__currentLoopData = get_categories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if(count(get_child_categories($cat->id))!=0): ?>
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a href="#collapse<?php echo e($cat->id); ?>" data-toggle="collapse" class="accordion-toggle collapsed"> <?php echo e(ucfirst($cat->title)); ?> </a>
                    </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapse<?php echo e($cat->id); ?>" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                          <?php $__currentLoopData = get_child_categories($cat->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li><a href="<?php echo e(route('product-cat',$child_cat->slug)); ?>"><?php echo e(ucfirst($child_cat->title)); ?></a></li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                      </div>
                      <!-- /.accordion-inner -->
                    </div>
                    <!-- /.accordion-body -->
                  </div>

                  <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <!-- /.accordion-group -->

                </div>
                <!-- /.accordion -->
              </div>
              <!-- /.sidebar-widget-body -->
            </div>
            <!-- /.sidebar-widget -->
            <!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->

            <!-- ============================================== PRICE SILDER============================================== -->
            
            <!-- /.sidebar-widget -->
            <!-- ============================================== COMPARE: END ============================================== -->
            <!-- ============================================== PRODUCT TAGS ============================================== -->
            <div class="sidebar-widget product-tag outer-top-vs">
              <h3 class="section-title">Product tags</h3>
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
            <!-- /.Testimonials -->
            
    <!-- /.sidebar-widget -->
    <!-- ============================================== NEWSLETTER: END ============================================== -->


  </div>
  <!-- /.sidebar-filter -->
</div>


<!-- /.sidebar-module-container -->
</div>
<!-- /.sidebar -->
<div class="col-xs-12 col-sm-12 col-md-9 rht-col">
  <!-- ========================================== SECTION – HERO ========================================= -->

  <!-- <div id="category" class="category-carousel hidden-xs">
          <div class="item">
            <div class="image"> <img src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/banners/cat-banner-1.jpg" alt="" class="img-responsive"> </div>
            <div class="container-fluid">
              <div class="caption vertical-top text-left">
                <div class="big-text"> Big Sale </div>
                <div class="excerpt hidden-sm hidden-md"> Save up to 49% off </div>
                <div class="excerpt-normal hidden-sm hidden-md"> Lorem ipsum dolor sit amet, consectetur adipiscing elit </div>
                <div class="buy-btn"><a href="#" class="lnk btn btn-primary">Show Now</a></div>
              </div>
               /.caption -->
  <!-- </div> -->
  <!-- /.container-fluid -->
  <!-- </div>
        </div> -->

  <?php if(count($products)>0): ?>
  <div class="clearfix filters-container m-t-10">

    <div class="row">
      <div class="col col-sm-6 col-md-3 col-lg-3 col-xs-6">
        <div class="filter-tabs">
          <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
            <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
            <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-bars"></i>List</a></li>
          </ul>
        </div>
        <!-- /.filter-tabs -->
      </div>
      <!-- /.col -->
      <div class="col col-sm-12 col-md-5 col-lg-5 hidden-sm">
        <div class="col col-sm-6 col-md-6 no-padding">
          <div class="lbl-cnt"> <span class="lbl">Sort by</span>
            <div class="fld inline">
              <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                <select name="" id="sortBy" class="btn dropdown-toggle">
                  <option>Default Sort</option>
                  <option value="priceAsc" <?php echo e(old('sortBy')=='priceAsc' ? 'selected' : ''); ?>>Price - Lower To Higher</option>
                  <option value="priceDesc">Price - Higher To Lower</option>
                  <option value="titleAsc">A To Z Ascending</option>
                  <option value="titleDesc">Z To A Descending</option>
                  <option value="discAsc">Discount - Lower To Higher</option>
                  <option value="discDesc">Discount - Higher To Lower</option>
                </select>
              </div>
            </div>
            <!-- /.fld -->
          </div>
          <!-- /.lbl-cnt -->
        </div>
        <!-- /.col -->
        
        <!-- /.col -->
      </div>
      <!-- /.col -->
      <div class="col col-sm-6 col-md-4 col-xs-6 col-lg-4 text-right">
        <div class="pagination-container">
          <ul class="list-inline list-unstyled">
            <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
          </ul>
          <!-- /.list-inline -->
        </div>
        <!-- /.pagination-container -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <div class="search-result-container ">

    <div id="myTabContent" class="tab-content category-list">
      <div class="tab-pane active " id="grid-container">
        <div class="category-product">
          <div class="row">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="item">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image">
                        <a href="<?php echo e(route('product-detail', $product->slug)); ?>">
                          <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product->image_url1); ?>" alt="">
                          <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product->image_url2); ?>" alt="" class="hover-image">
                        </a>
                      </div>
                      <!-- /.image -->

                      <div class="tag new"><span>new</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name"><?php echo e(ucfirst(\App\Models\Brand::where('id',$product->brand_id)->value('title'))); ?></h3>
                      <h3 class="name"><a href="<?php echo e(route('product-detail', $product->slug)); ?>"><?php echo e(ucfirst($product->title)); ?></a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price">
                        <span class="price"> ₹<?php echo e($product->sale_price); ?> </span>
                        <span class="price-before-discount"><?php if($product->price > $product->sale_price): ?> ₹ <?php echo e($product->price); ?> <?php endif; ?></span>
                        <span class="text text-success">&nbsp;&nbsp;&nbsp; <?php if($product->discount>0): ?> <b><?php echo e($product->discount); ?>% off </b><?php endif; ?></span>
                      </div>
                      <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <input type="hidden" class="product_id" value="<?php echo e($product->id); ?>">
                            <input type="hidden" id="quantity<?php echo e($product->id); ?>" class="qty-input form-control" value="1" min="1">
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
            </div>
            <!-- /.item -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



          </div>
          <!-- /.category-product -->
        </div>
        <!-- /.tab-pane #list-container -->
      </div>



      <div class="tab-pane " id="list-container">
        <div class="category-product">
          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="category-product-inner">
            <div class="products">
              <div class="product-list product">
                <div class="row product-list-row">
                  <div class="col col-sm-3 col-lg-3">
                    <div class="product-image">
                      <div class="image">
                        <a href="<?php echo e(route('product-detail', $product->slug)); ?>">
                          <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product->image_url1); ?>" alt="" height="253" width="202">
                        </a>
                      </div>

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-sm-9 col-lg-9">
                    <div class="product-info">
                      <h3 class="name"><a href="<?php echo e(route('product-detail', $product->slug)); ?>"><?php echo e(ucfirst($product->title)); ?></a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price">
                        <span class="price"> ₹<?php echo e($product->sale_price); ?> </span>
                        <span class="price-before-discount"><?php if($product->price > $product->sale_price): ?> ₹ <?php echo e($product->price); ?> <?php endif; ?></span>
                        <span class="text text-success">&nbsp;&nbsp;&nbsp; <?php if($product->discount>0): ?> <b><?php echo e($product->discount); ?>% off </b><?php endif; ?></span>
                      </div>
                      <!-- /.product-price -->
                      <div class="description m-t-10"><?php echo e($product->short_description); ?></div>
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
                              <input type="hidden" class="product_id" value="<?php echo e($product->id); ?>">
                              <input type="hidden" id="quantity<?php echo e($product->id); ?>" class="qty-input form-control" value="1" min="1">
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
                    <!-- /.product-info -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-list-row -->
                <!-- <div class="tag new"><span>new</span></div> -->
              </div>
              <!-- /.product-list -->
            </div>
            <!-- /.products -->
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <!-- /.category-product-inner -->

        </div>
        <!-- /.category-product -->
      </div>
      <!-- /.tab-content -->
      <div class="clearfix filters-container bottom-row">
        <div class="text-right">
          <div class="pagination-container">
            <?php echo e($products->links()); ?>

            <!-- <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul> -->
            <!-- /.list-inline -->
          </div>
          <!-- /.pagination-container -->
        </div>
        <!-- /.text-right -->

      </div>
      <!-- /.filters-container -->

    </div>
    <!-- /.search-result-container -->

  </div>
  <?php else: ?>
  <h1>No Products Found</h1>
  <?php endif; ?>
  <!-- /.col -->
</div>
<!-- /.row -->

</div>
<!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
</div>
<!-- /.container -->

</div>
<!-- /.body-content -->
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


<script>
  $('#sortBy').change(function() {
    var sort = $('#sortBy').val();

    window.location = "<?php echo e(url(''.$route.'')); ?>/<?php echo e($categories->slug); ?>?sort=" + sort;
  });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eco_V1\resources\views/product_categories.blade.php ENDPATH**/ ?>