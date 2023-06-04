
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
        
        <!-- /.side-menu -->
        <!-- ================================== TOP NAVIGATION : END ================================== -->
        <form action="<?php echo e(route('shop-filter')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="sidebar-module-container">
            <div class="sidebar-filter">
              <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
              <div class="sidebar-widget">
                <?php if(count(get_categories())>0): ?>
                <h3 class="section-title">Filter By Category</h3>
                <div class="sidebar-widget-body">
                  <div class="accordion">
                    <?php if(!empty($_GET['category'])): ?>
                    <?php
                    $filter_cats = explode(',',$_GET['category']);
                    ?>
                    <?php endif; ?>
                    <?php $__currentLoopData = get_categories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-12">
                      <input type="checkbox" <?php if(!empty($filter_cats) && in_array($cat->slug, $filter_cats)): ?> checked <?php endif; ?> class="custom-control-input" id="<?php echo e($cat->slug); ?>" name="category[]" onchange="this.form.submit();" value="<?php echo e($cat->slug); ?>">
                      <label for="<?php echo e($cat->slug); ?>" class="custom-control-label">&nbsp;&nbsp;&nbsp; <?php echo e(ucfirst($cat->title)); ?> <span class="text-muted">(<?php echo e(count($cat->relProduct)); ?>)</span></label>
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                  <!-- /.accordion -->
                </div>
                <!-- /.sidebar-widget-body -->
                <?php endif; ?>
              </div>


              <div class="sidebar-widget">
                <h3 class="section-title">Sub Category</h3>
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
              <div class="sidebar-widget">
                <?php if(count(get_brands())>0): ?>
                <h3 class="section-title">Filter By Brand</h3>
                <div class="sidebar-widget-body">
                  <div class="accordion">
                    <?php if(!empty($_GET['brand'])): ?>
                    <?php
                    $filter_brands = explode(',',$_GET['brand']);
                    ?>
                    <?php endif; ?>
                    <?php $__currentLoopData = get_brands(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-12">
                      <input type="checkbox" <?php if(!empty($filter_brands) && in_array($brand->slug, $filter_brands)): ?> checked <?php endif; ?> class="custom-control-input" id="<?php echo e($brand->slug); ?>" name="brand[]" onchange="this.form.submit();" value="<?php echo e($brand->slug); ?>">
                      <label for="<?php echo e($brand->slug); ?>" class="custom-control-label">&nbsp;&nbsp;&nbsp; <?php echo e(ucfirst($brand->title)); ?><span class="text-muted">(<?php echo e(count($brand->relProduct)); ?>)</span></label>
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                  <!-- /.accordion -->
                </div>
                <!-- /.sidebar-widget-body -->
                <?php endif; ?>
              </div>


              <div class="sidebar-widget">
                <h3 class="section-title">Filter By Size</h3>
                <div class="sidebar-widget-body">
                  <div class="accordion">
                    <div class="col-sm-12">
                      <input type="checkbox" <?php if(!empty($_GET['size']) && $_GET['size']=='S'){echo 'checked';} ?> name="size" class="custom-control-input" id="customCheck11" onchange="this.form.submit();" value="S">
                      <label for="customCheck11" class="custom-control-label">&nbsp;&nbsp;&nbsp; Small<span class="text-muted">(<?php echo e(\App\Models\Product::where(['status'=>'show', 'size'=>'S'])->where('is_deleted',0)->count()); ?>)</span></label>
                    </div>
                    <div class="col-sm-12">
                      <input type="checkbox" <?php if(!empty($_GET['size']) && $_GET['size']=='M'){echo 'checked';} ?> name="size" class="custom-control-input" id="customCheck12" onchange="this.form.submit();" value="M">
                      <label for="customCheck12" class="custom-control-label">&nbsp;&nbsp;&nbsp; Medium<span class="text-muted">(<?php echo e(\App\Models\Product::where(['status'=>'show', 'size'=>'M'])->where('is_deleted',0)->count()); ?>)</span></label>
                    </div>
                    <div class="col-sm-12">
                      <input type="checkbox" <?php if(!empty($_GET['size']) && $_GET['size']=='L'){echo 'checked';} ?> name="size" class="custom-control-input" id="customCheck13" onchange="this.form.submit();" value="L">
                      <label for="customCheck13" class="custom-control-label">&nbsp;&nbsp;&nbsp; Large<span class="text-muted">(<?php echo e(\App\Models\Product::where(['status'=>'show', 'size'=>'L'])->where('is_deleted',0)->count()); ?>)</span></label>
                    </div>
                    <div class="col-sm-12">
                      <input type="checkbox" <?php if(!empty($_GET['size']) && $_GET['size']=='XL'){echo 'checked';} ?> name="size" class="custom-control-input" id="customCheck14" onchange="this.form.submit();" value="XL">
                      <label for="customCheck14" class="custom-control-label">&nbsp;&nbsp;&nbsp; Extra Large<span class="text-muted">(<?php echo e(\App\Models\Product::where(['status'=>'show', 'size'=>'XL'])->where('is_deleted',0)->count()); ?>)</span></label>
                    </div>
                  </div>
                  <!-- /.accordion -->
                </div>
                <!-- /.sidebar-widget-body -->
              </div>


              <!-- ============================================== PRICE SILDER============================================== -->
              <div class="sidebar-widget">
                <div class="widget-header">
                  <h4 class="widget-title section-title">Price Slider</h4>
                </div>
                <div class="widget price mb-30">
                  <h6 class="widget-title">Filter by Price</h6>
                  <div class="widget-desc">
                    <div class="slider-range price-range-holder">
                      <div id="slider-range" data-min="<?php echo e(min_price()); ?>" data-max="<?php echo e(max_price()); ?>" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="<?php echo e(min_price()); ?>" data-value-max="<?php echo e(max_price()); ?>" data-label-result="Price:">
                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                        <span class="min-max">
                          <span class="ui-slider-handle ui-state-default ui-corner-all pull-left" tabindex="0"></span>
                          <span class="ui-slider-handle ui-state-default ui-corner-all pull-right" tabindex="0"></span>
                        </span>
                      </div class="d-flex mt-2">
                      <?php if(!empty($_GET['price'])): ?>
                      <?php
                      $price = explode('-',$_GET['price'])
                      ?>
                      <?php endif; ?>
                      <input type="hidden" id="price_range" value="<?php if(!empty($_GET['price'])): ?> <?php echo e($_GET['price']); ?> <?php endif; ?>" name="price_range">
                      <input style="border: 0; width:50%;" type="text" readonly id="amount" value="₹<?php if (!empty($_GET['price'])) {
                                                                                                      echo $price[0];
                                                                                                    } else {
                                                                                                      echo min_price();
                                                                                                    } ?> - ₹<?php if (!empty($_GET['price'])) {
                                                                                                              echo $price[1];
                                                                                                            } else {
                                                                                                              echo max_price();
                                                                                                            } ?>">
                      <!-- <div class="range-price">Price: ₹ - ₹</div> -->
                      <button type="submit" class="btn btn-sm btn-primary" style="margin: 12px 0px 12px 0px; height: 30px; line-height: 22px;">Filter</button>
                    </div>
                  </div>
                </div>
                <!-- /.sidebar-widget-body -->
              </div>
              <!-- /.sidebar-widget -->
              <!-- ============================================== PRICE SILDER : END ============================================== -->



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

            </div>
            <!-- /.sidebar-filter -->
          </div>


          <!-- /.sidebar-module-container -->
      </div>
      <!-- /.sidebar -->
      <div class="col-xs-12 col-sm-12 col-md-9 rht-col">
        <!-- ========================================== SECTION – HERO ========================================= -->

        


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
                <select name="sortBy" class="btn dropdown-toggle" onchange="this.form.submit();">
                  <option value=" ">Default Sort</option>
                  <option value="priceAsc" <?php if(!empty($_GET['sortBy']) && $_GET['sortBy']=='priceAsc' ): ?> selected <?php endif; ?>>Price - Lower To Higher</option>
                  <option value="priceDesc" <?php if(!empty($_GET['sortBy']) && $_GET['sortBy']=='priceDesc' ): ?> selected <?php endif; ?>>Price - Higher To Lower</option>
                  <option value="titleAsc" <?php if(!empty($_GET['sortBy']) && $_GET['sortBy']=='titleAsc' ): ?> selected <?php endif; ?>>A To Z Ascending</option>
                  <option value="titleDesc" <?php if(!empty($_GET['sortBy']) && $_GET['sortBy']=='titleDesc' ): ?> selected <?php endif; ?>>Z To A Descending</option>
                  <option value="discAsc" <?php if(!empty($_GET['sortBy']) && $_GET['sortBy']=='discAsc' ): ?> selected <?php endif; ?>>Discount - Lower To Higher</option>
                  <option value="discDesc" <?php if(!empty($_GET['sortBy']) && $_GET['sortBy']=='discDesc' ): ?> selected <?php endif; ?>>Discount - Higher To Lower</option>
                </select>
              </div>
            </div>
            <!-- /.fld -->
          </div>
          <!-- /.lbl-cnt -->
        </div>

        </form>
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
            <h4>Total Product: <?php echo e(count($products)); ?></h4>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="item">
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
                        <a href="<?php echo e(route('product-detail', $product['slug'])); ?>">
                          <img src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($product['image_url1']); ?>" alt="" height="253" width="202">
                        </a>
                      </div>

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-sm-9 col-lg-9">
                    <div class="product-info">
                      <h3 class="name"><a href="<?php echo e(route('product-detail', $product['slug'])); ?>"><?php echo e(ucfirst($product['title'])); ?></a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price">
                        <span class="price"> ₹<?php echo e($product['sale_price']); ?> </span>
                        <span class="price-before-discount"><?php if($product['price'] > $product['sale_price']): ?> ₹ <?php echo e($product['price']); ?> <?php endif; ?></span>
                        <span class="text text-success">&nbsp;&nbsp;&nbsp; <?php if($product['discount']>0): ?> <b><?php echo e($product['discount']); ?>% off </b><?php endif; ?></span>
                      </div>
                      <!-- /.product-price -->
                      <div class="description m-t-10"><?php echo e($product['short_description']); ?></div>
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
  $(document).ready(function() {
    if ($('#slider-range').length > 0) {
      const max_value = parseInt($('#slider-range').data('max'));
      const min_value = parseInt($('#slider-range').data('min'));
      let price_range = min_value + '-' + max_value;

      if ($('#price_range').length > 0 && $('#price_range').val()) {
        price_range = $('#price_range').val().trim();
      }
      let price = price_range.split('-');

      $('#slider-range').slider({
        range: true,
        min: min_value,
        max: max_value,
        values: price,
        slide: function(event, ui) {
          $('#amount').val('₹' + ui.values[0] + "-" + '₹' + ui.values[1]);
          $('#price_range').val(ui.values[0] + "-" + ui.values[1]);
        }
      })
    }
  });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eco_V1\resources\views/shop.blade.php ENDPATH**/ ?>