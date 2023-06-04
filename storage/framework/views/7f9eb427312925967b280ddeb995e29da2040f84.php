<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo e(get_setting('meta_description')); ?>">
  <meta name="author" content="">
  <meta name="keywords" content="<?php echo e(get_setting('meta_description')); ?>">
  <meta name="robots" content="all">
  <title><?php echo e(get_setting('title')); ?></title>

  <link rel="shortcut icon" href="<?php echo e(URL::to('/')); ?>/public/images/general_settings/<?php echo e(get_setting('favicon')); ?>" type="image/x-icon">

  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/templates/front/assets/css/bootstrap.min.css">

  <!-- Customizable CSS -->
  <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/templates/front/assets/css/main.css">
  <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/templates/front/assets/css/blue.css">
  <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/templates/front/assets/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/templates/front/assets/css/owl.transitions.css">
  <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/templates/front/assets/css/animate.min.css">
  <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/templates/front/assets/css/rateit.css">
  <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/templates/front/assets/css/bootstrap-select.min.css">

  <!-- Icons/Glyphs -->
  <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/templates/front/assets/css/font-awesome.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

  <!--Alertify CSS -->
  <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/public/assets/css/alertify.min.css" />

  <!-- autosearch -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="<?php echo e(URL::to('/')); ?>/templates/front/assets/js/jquery-1.11.1.min.js"></script>

  <style>
    .widget.price .ui-slider-handle {
      background-color: #0f99f3;
      border: none;
      border-radius: 0;
      width: 12px;
      height: 12px;
      top: -3px;
      margin-left: -2px;
    }

    .widget.price .ui-slider-range.ui-corner-all.ui-widget-header {
      background-color: #0f99f3;
    }

    .widget.price .ui-slider-horizontal {
      height: 8px;
    }

    .widget.price .range-price {
      font-size: 14px;
      font-weight: 700;
      margin-top: 15px;
      text-transform: capitalize;
    }

    .widget.price .ui-widget.ui-widget-content {
      border: 1px solid #d6e6fb;
    }
  </style>
</head>

<body class="cnt-home">

  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
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
        <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
      </div>
    </div>
  </div>

  <!-- ============================================== HEADER ============================================== -->
  <header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
      <div class="container">
        <div class="header-top-inner">
          <div class="cnt-account">
            <ul class="list-unstyled">
              <!-- <li class="myaccount"><a href="#"><span>My Account</span></a></li> -->
              <li class="wishlist"><a href="<?php echo e(route('wishlist')); ?>"><span>Wishlist</span></a></li>
              <li class="header_cart hidden-xs"><a href="<?php echo e(route('cart')); ?>"><span>My Cart</span></a></li>
              <li class="check"><a href="<?php echo e(route('checkout')); ?>"><span>Checkout</span></a></li>
              <?php if(auth()->guard()->guest()): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
              </li>
              <?php if(Route::has('register')): ?>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
              </li>
              <?php endif; ?>
              <?php else: ?>

              <li class="myaccount"><a href="<?php echo e(route('front-user-account')); ?>"><span>My Account</span></a></li>
              <li class="nav-item dropdown">
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  <?php echo e(__('Logout')); ?>

                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                  <?php echo csrf_field(); ?>
                </form>
              </li>


              <?php endif; ?>
            </ul>
          </div>
          <!-- /.cnt-account -->

          <div class="cnt-block">
            <ul class="list-unstyled list-inline">
              <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">USD</a></li>
                  <li><a href="#">INR</a></li>
                  <li><a href="#">GBP</a></li>
                </ul>
              </li>
              <li class="dropdown dropdown-small lang"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">English</a></li>
                  <li><a href="#">French</a></li>
                  <li><a href="#">German</a></li>
                </ul>
              </li>
            </ul>
            <!-- /.list-unstyled -->
          </div>
          <!-- /.cnt-cart -->
          <div class="clearfix"></div>
        </div>
        <!-- /.header-top-inner -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
            <!-- ============================================================= LOGO ============================================================= -->
            <div class="logo"> <a href="<?php echo e(route('index')); ?>"> <img src="<?php echo e(URL::to('/')); ?>/public/images/general_settings/<?php echo e(get_setting('logo')); ?>" alt="logo" height="50" width="50"> </a> </div>
            <!-- /.logo -->
            <!-- ============================================================= LOGO : END ============================================================= -->
          </div>
          <!-- /.logo-holder -->

          <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder">
            <!-- /.contact-row -->
            <!-- ============================================================= SEARCH AREA ============================================================= -->
            <div class="search-area">
            <form id="search-form" action="<?php echo e(route('searching')); ?>" method="GET"><form>
                <div class="control-group">
                  <ul class="categories-filter animate-dropdown">
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu">
                        <li class="menu-header">Computer</li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>
                      </ul>
                    </li>
                  </ul>   
                  
                    <!-- <?php echo csrf_field(); ?> -->
                    <input type="text" class="search-field" name="search_product" id="search_text" placeholder="Search here..." />
                    <input type="submit" name="searchbtn" class="search-button" value="Search">
                    <!-- <a class="search-button" href="#"></a> -->
                </div>
              </form>
            </div>
            <!-- /.search-area -->
            <!-- ============================================================= SEARCH AREA : END ============================================================= -->
          </div>
          <!-- /.top-search-holder -->

          <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 animate-dropdown top-cart-row">
            <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

            <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                <div class="items-cart-inner">
                  <div class="basket">
                    <div class="basket-item-count"><span class="count">2</span></div>
                    <!-- <div class="total-price-basket"> <span class="lbl">Shopping Cart</span> <span class="value"></span> </div> -->
                  </div>
                </div>
              </a>
              
              <!-- /.dropdown-menu-->
            </div>
            <!-- /.dropdown-cart -->

            <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
          </div>
          <!-- /.top-cart-row -->
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container -->

    </div>
    <!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
      <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
              <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="nav-bg-class">
            <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
              <div class="nav-outer">
                <ul class="nav navbar-nav">
                  <li class="active dropdown"> <a href="<?php echo e(route('index')); ?>">Home</a> </li>
                  <li class="active dropdown"> <a href="<?php echo e(route('shop')); ?>">Shop</a> </li>
                  <?php $__currentLoopData = get_categories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if(count(get_child_categories($cat->id))!=0): ?>
                  <li class="dropdown yamm mega-menu">
                    <a href="#" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown"><?php echo e(ucfirst($cat->title)); ?></a>
                    <ul class="dropdown-menu container">
                      <li>
                        <div class="yamm-content ">
                          <div class="row">
                            <?php $__currentLoopData = get_child_categories($cat->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                              <h2>
                                <ul class="links">
                                  <li><a href="<?php echo e(route('product-cat',$child_cat->slug)); ?>"><?php echo e(ucfirst($child_cat->title)); ?></a></li>
                                </ul>
                              </h2>
                            </div>
                            <!-- /.col -->
                            <?php if(!empty($cat->image_url1)): ?>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                              <img class="img-responsive" src="<?php echo e(URL::to('/')); ?>/public/images/categories/<?php echo e($cat->image_url1); ?>" alt="<?php echo e($cat->image_url1); ?>" style="height: 230px; width: 530px;">
                            </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- /.yamm-content -->
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <?php else: ?>
                  <li class="dropdown"> <a href="<?php echo e(route('product-cat',$cat->slug)); ?>"><?php echo e(ucfirst($cat->title)); ?></a> </li>
                  <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <!-- /.navbar-nav -->
                <div class="clearfix"></div>
              </div>
              <!-- /.nav-outer -->
            </div>
            <!-- /.navbar-collapse -->

          </div>
          <!-- /.nav-bg-class -->
        </div>
        <!-- /.navbar-default -->
      </div>
      <!-- /.container-class -->

    </div>
    <!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->

  </header>

  <?php echo $__env->yieldContent('content'); ?>




  <!-- ============================================================= FOOTER ============================================================= -->
  <footer id="footer" class="footer color-bg">
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="address-block">

              <!-- /.module-heading -->

              <div class="module-body">
                <ul class="toggle-footer" style="">
                  <li class="media">
                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                    <div class="media-body">
                      <p><?php echo e(get_setting('address')); ?></p>
                    </div>
                  </li>
                  <li class="media">
                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                    <div class="media-body">
                      <p>Phone: + <?php echo e(get_setting('phone')); ?> / Fax: + <?php echo e(get_setting('fax')); ?></p>
                    </div>
                  </li>
                  <li class="media">
                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                    <div class="media-body"> <span><a href="#"><?php echo e(get_setting('email')); ?></a></span> </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.module-body -->
          </div>
          <!-- /.col -->

          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="module-heading">
              <h4 class="module-title">Customer Service</h4>
            </div>
            <!-- /.module-heading -->

            <div class="module-body">
              <ul class='list-unstyled'>
                <li class="first"><a href="#" title="Contact us">My Account</a></li>
                <li><a href="#" title="About us">Order History</a></li>
                <li><a href="#" title="faq">FAQ</a></li>
                <li><a href="#" title="Popular Searches">Specials</a></li>
                <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>
              </ul>
            </div>
            <!-- /.module-body -->
          </div>
          <!-- /.col -->

          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="module-heading">
              <h4 class="module-title">Corporation</h4>
            </div>
            <!-- /.module-heading -->

            <div class="module-body">
              <ul class='list-unstyled'>
                <li class="first"><a title="Your Account" href="#">About us</a></li>
                <li><a title="Information" href="#">Customer Service</a></li>
                <li><a title="Addresses" href="#">Company</a></li>
                <li><a title="Addresses" href="#">Investor Relations</a></li>
                <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
              </ul>
            </div>
            <!-- /.module-body -->
          </div>
          <!-- /.col -->

          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="module-heading">
              <h4 class="module-title">Why Choose Us</h4>
            </div>
            <!-- /.module-heading -->

            <div class="module-body">
              <ul class='list-unstyled'>
                <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                <li><a href="#" title="Blog">Blog</a></li>
                <li><a href="#" title="Company">Company</a></li>
                <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
              </ul>
            </div>
            <!-- /.module-body -->
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-bar">
      <div class="container">
        <div class="col-xs-12 col-sm-4 no-padding social">
          <ul class="link">
            <li class="fb pull-left"><a target="_blank" rel="nofollow" href="<?php echo e(get_setting('facebook_url')); ?>" title="Facebook"></a></li>
            <li class="tw pull-left"><a target="_blank" rel="nofollow" href="<?php echo e(get_setting('twitter_url')); ?>" title="Twitter"></a></li>
            <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="<?php echo e(get_setting('pinterest_url')); ?>" title="PInterest"></a></li>
            <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="<?php echo e(get_setting('linkedin_url')); ?>" title="Linkedin"></a></li>
            <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="<?php echo e(get_setting('youtube_url')); ?>" title="Youtube"></a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 no-padding copyright"><a target="_blank" href="<?php echo e(get_setting('footer_url')); ?>"><?php echo e(get_setting('footer')); ?></a> </div>
        <div class="col-xs-12 col-sm-4 no-padding">
          <div class="clearfix payment-methods">
            <ul>
              <li><img src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/payments/1.png" alt=""></li>
              <li><img src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/payments/2.png" alt=""></li>
              <li><img src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/payments/3.png" alt=""></li>
              <li><img src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/payments/4.png" alt=""></li>
              <li><img src="<?php echo e(URL::to('/')); ?>/templates/front/assets/images/payments/5.png" alt=""></li>
            </ul>
          </div>
          <!-- /.payment-methods -->
        </div>
      </div>
    </div>
  </footer>


  <!-- ============================================================= FOOTER : END============================================================= -->

  <!-- For demo purposes – can be removed on production -->

  <!-- For demo purposes – can be removed on production : End -->

  <!-- JavaScripts placed at the end of the document so the pages load faster -->
  <script src="<?php echo e(URL::to('/')); ?>/templates/front/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo e(URL::to('/')); ?>/templates/front/assets/js/bootstrap-hover-dropdown.min.js"></script>
  <script src="<?php echo e(URL::to('/')); ?>/templates/front/assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo e(URL::to('/')); ?>/templates/front/assets/js/echo.min.js"></script>
  <script src="<?php echo e(URL::to('/')); ?>/templates/front/assets/js/jquery.easing-1.3.min.js"></script>
  <script src="<?php echo e(URL::to('/')); ?>/templates/front/assets/js/bootstrap-slider.min.js"></script>
  <script src="<?php echo e(URL::to('/')); ?>/templates/front/assets/js/jquery.rateit.min.js"></script>
  <script src="<?php echo e(URL::to('/')); ?>/templates/front/assets/js/lightbox.min.js"></script>
  <script src="<?php echo e(URL::to('/')); ?>/templates/front/assets/js/bootstrap-select.min.js"></script>
  <script src="<?php echo e(URL::to('/')); ?>/templates/front/assets/js/wow.min.js"></script>
  <script src="<?php echo e(URL::to('/')); ?>/templates/front/assets/js/scripts.js"></script>
  <!-- <script src="<?php echo e(URL::to('/')); ?>/templates/front/assets/js/jquery-ui.min.js"></script> -->

  <!-- autosearch -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script src="<?php echo e(URL::to('/')); ?>/public/assets/js/sweetalert.min.js"></script>
  <!--Alertify JavaScript -->
  <script src="<?php echo e(URL::to('/')); ?>/public/assets/js/alertify.min.js"></script>

  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <script>
    $(document).ready(function() {
      var path = "<?php echo e(route('autosearch')); ?>";
      $('#search_text').autocomplete({
        source: function(request, response) {
          $.ajax({
            url: path,
            dataType: "JSON",
            data: {
              term: request.term
            },
            success: function(data) {
              response(data);
            }
          });
        },
        minLength: 1,
      });
      $(document).on('click', '.ui-menu-item', function(){
        $('#search-form').submit();
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      cartload();
    });

    function cartload() {
      var _token = "<?php echo e(csrf_token()); ?>";

      $.ajax({
        url: "<?php echo e(route('ajax-load-cart-data')); ?>",
        method: "GET",
        success: function(response) {
          $('.basket-item-count').html('');
          var parsed = jQuery.parseJSON(response)
          var value = parsed; //Single Data Viewing
          $('.basket-item-count').append($('<span class="count">' + value['totalcart'] + '</span>'));
        }
      });
    }


    function addCart(id) {
      // alert(id);
      var _token = "<?php echo e(csrf_token()); ?>";
      var quantity = document.getElementById('quantity' + id).value;
      var qs = {
        id: id,
        quantity: quantity,
        _token: _token
      };
      //  alert(JSON.stringify(qs));
      $.ajax({
        url: "<?php echo e(route('ajax-add-to-cart')); ?>",
        method: "POST",
        data: qs,
        success: function(response) {
          alertify.set('notifier', 'position', 'top-right');
          alertify.success(response.status);
          cartload();
        },
        error: function(request, status, error) {
          console.log('Error is' + request.responseText);
        }
      });
    }


    function updateQuantity(id) {
      // alert(id);
      var _token = "<?php echo e(csrf_token()); ?>";

      var quantity = document.getElementById('quantity' + id).value;
      var price = document.getElementById('salePrice' + id).value;
      var qs = {
        id: id,
        quantity: quantity,
        _token: _token
      };
      //  alert(JSON.stringify(qs));
      $.ajax({
        url: "<?php echo e(route('ajax-update-cart')); ?>",
        method: "POST",
        data: qs,
        success: function(result) {
          // alert(JSON.stringify(result));    
          alertify.set('notifier', 'position', 'top-right');
          alertify.success(result.status);

          document.getElementById('amount' + id).innerHTML = '₹' + quantity * price;
          $('#total').load(location.href + ' #total');
        },
        error: function(request, status, error) {
          console.log('Error is' + request.responseText);
        }
      });
    }


    function deleteCart(id) {
      // alert(id);
      var _token = "<?php echo e(csrf_token()); ?>";
      var qs = {
        id: id,
        _token: _token
      };
      //  alert(JSON.stringify(qs));
      $.ajax({
        url: "<?php echo e(route('ajax-delete-cart')); ?>",
        method: "DELETE",
        data: qs,
        success: function(result) {
          // alert(JSON.stringify(result));  
          // window.location.reload();  
          document.getElementById('cartpage').remove()
          $('#total').load(location.href + ' #total');

          alertify.set('notifier', 'position', 'top-right');
          alertify.success(result.status);
        },
        error: function(request, status, error) {
          console.log('Error is' + request.responseText);
        }
      });
    }

    function clearCart(id) {
      var _token = "<?php echo e(csrf_token()); ?>";
      var qs = {
        id: id,
        _token: _token
      };
      $.ajax({
        url: "<?php echo e(route('ajax-clear-cart')); ?>",
        type: 'GET',
        data: qs,
        success: function(response) {
          window.location.reload();
          alertify.set('notifier', 'position', 'top-right');
          alertify.success(response.status);
        }
      });
    }
  </script>
  <script>
    $('.slider-range-price').each(function() {
      var min = $(this).data('min'),
        max = $(this).data('max');
      unit = $(this).data('unit'),
        value_min = $(this).data('value-min'),
        value_max = $(this).data('value-max'),
        label_result = $(this).data('label-result'),
        t = $(this);
      $(this).slider({
        range: true,
        min: min,
        max: max,
        values: [value_min, value_max],
        slide: function(event, ui) {
          var result = label_result + " " + unit + ui.values[0] + ' - ' + unit + ui.values[1];
          t.closest('.slider-range').find('.range-price').html(result);
        }
      });
    });
  </script>


</body>

</html><?php /**PATH C:\xampp\htdocs\eco_V1\resources\views/layouts/front.blade.php ENDPATH**/ ?>