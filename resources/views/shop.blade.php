@extends('layouts.front')
@section('content')

<!-- ============================================== HEADER : END ============================================== -->

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="{{route('index')}}">Home</a></li>
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
        {{--<div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i>Clothing</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Dresses</a></li>
                          <li><a href="#">Shoes </a></li>
                          <li><a href="#">Jackets</a></li>
                          <li><a href="#">Sunglasses</a></li>
                          <li><a href="#">Sport Wear</a></li>
                          <li><a href="#">Blazers</a></li>
                          <li><a href="#">Shirts</a></li>
                          <li><a href="#">Shorts</a></li>
                        </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Handbags</a></li>
                          <li><a href="#">Jwellery</a></li>
                          <li><a href="#">Swimwear </a></li>
                          <li><a href="#">Tops</a></li>
                          <li><a href="#">Flats</a></li>
                          <li><a href="#">Shoes</a></li>
                          <li><a href="#">Winter Wear</a></li>
                          <li><a href="#">Night Suits</a></li>
                        </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Toys &amp; Games</a></li>
                          <li><a href="#">Jeans</a></li>
                          <li><a href="#">Shirts</a></li>
                          <li><a href="#">Shoes</a></li>
                          <li><a href="#">School Bags</a></li>
                          <li><a href="#">Lunch Box</a></li>
                          <li><a href="#">Footwear</a></li>
                          <li><a href="#">Wipes</a></li>
                        </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Sandals </a></li>
                          <li><a href="#">Shorts</a></li>
                          <li><a href="#">Dresses</a></li>
                          <li><a href="#">Jwellery</a></li>
                          <li><a href="#">Bags</a></li>
                          <li><a href="#">Night Dress</a></li>
                          <li><a href="#">Swim Wear</a></li>
                          <li><a href="#">Toys</a></li>
                        </ul>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu -->
              </li>
              <!-- /.menu-item -->

              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-laptop" aria-hidden="true"></i>Electronics</a>
                <!-- ================================== MEGAMENU VERTICAL ================================== -->
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <ul>
                          <li><a href="#">Gaming</a></li>
                          <li><a href="#">Laptop Skins</a></li>
                          <li><a href="#">Apple</a></li>
                          <li><a href="#">Dell</a></li>
                          <li><a href="#">Lenovo</a></li>
                          <li><a href="#">Microsoft</a></li>
                          <li><a href="#">Asus</a></li>
                          <li><a href="#">Adapters</a></li>
                          <li><a href="#">Batteries</a></li>
                          <li><a href="#">Cooling Pads</a></li>
                        </ul>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <ul>
                          <li><a href="#">Routers &amp; Modems</a></li>
                          <li><a href="#">CPUs, Processors</a></li>
                          <li><a href="#">PC Gaming Store</a></li>
                          <li><a href="#">Graphics Cards</a></li>
                          <li><a href="#">Components</a></li>
                          <li><a href="#">Webcam</a></li>
                          <li><a href="#">Memory (RAM)</a></li>
                          <li><a href="#">Motherboards</a></li>
                          <li><a href="#">Keyboards</a></li>
                          <li><a href="#">Headphones</a></li>
                        </ul>
                      </div>
                      <div class="dropdown-banner-holder"> <a href="#"><img alt="" src="{{URL::to('/')}}/templates/front/assets/images/banners/banner-side.png" /></a> </div>
                    </div>
                    <!-- /.row -->
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu -->
                <!-- ================================== MEGAMENU VERTICAL ================================== -->
              </li>
              <!-- /.menu-item -->

              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-paw" aria-hidden="true"></i>Shoes</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Dresses</a></li>
                          <li><a href="#">Shoes </a></li>
                          <li><a href="#">Jackets</a></li>
                          <li><a href="#">Sunglasses</a></li>
                          <li><a href="#">Sport Wear</a></li>
                          <li><a href="#">Blazers</a></li>
                          <li><a href="#">Shirts</a></li>
                          <li><a href="#">Shorts</a></li>
                        </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Handbags</a></li>
                          <li><a href="#">Jwellery</a></li>
                          <li><a href="#">Swimwear </a></li>
                          <li><a href="#">Tops</a></li>
                          <li><a href="#">Flats</a></li>
                          <li><a href="#">Shoes</a></li>
                          <li><a href="#">Winter Wear</a></li>
                          <li><a href="#">Night Suits</a></li>
                        </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Toys &amp; Games</a></li>
                          <li><a href="#">Jeans</a></li>
                          <li><a href="#">Shirts</a></li>
                          <li><a href="#">Shoes</a></li>
                          <li><a href="#">School Bags</a></li>
                          <li><a href="#">Lunch Box</a></li>
                          <li><a href="#">Footwear</a></li>
                          <li><a href="#">Wipes</a></li>
                        </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Sandals </a></li>
                          <li><a href="#">Shorts</a></li>
                          <li><a href="#">Dresses</a></li>
                          <li><a href="#">Jwellery</a></li>
                          <li><a href="#">Bags</a></li>
                          <li><a href="#">Night Dress</a></li>
                          <li><a href="#">Swim Wear</a></li>
                          <li><a href="#">Toys</a></li>
                        </ul>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu -->
              </li>
              <!-- /.menu-item -->

              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-clock-o"></i>Watches</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <ul>
                          <li><a href="#">Gaming</a></li>
                          <li><a href="#">Laptop Skins</a></li>
                          <li><a href="#">Apple</a></li>
                          <li><a href="#">Dell</a></li>
                          <li><a href="#">Lenovo</a></li>
                          <li><a href="#">Microsoft</a></li>
                          <li><a href="#">Asus</a></li>
                          <li><a href="#">Adapters</a></li>
                          <li><a href="#">Batteries</a></li>
                          <li><a href="#">Cooling Pads</a></li>
                        </ul>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <ul>
                          <li><a href="#">Routers &amp; Modems</a></li>
                          <li><a href="#">CPUs, Processors</a></li>
                          <li><a href="#">PC Gaming Store</a></li>
                          <li><a href="#">Graphics Cards</a></li>
                          <li><a href="#">Components</a></li>
                          <li><a href="#">Webcam</a></li>
                          <li><a href="#">Memory (RAM)</a></li>
                          <li><a href="#">Motherboards</a></li>
                          <li><a href="#">Keyboards</a></li>
                          <li><a href="#">Headphones</a></li>
                        </ul>
                      </div>
                      <div class="dropdown-banner-holder"> <a href="#"><img alt="" src="{{URL::to('/')}}/templates/front/assets/images/banners/banner-side.png" /></a> </div>
                    </div>
                    <!-- /.row -->
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu -->
              </li>
              <!-- /.menu-item -->

              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-diamond"></i>Jewellery</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Dresses</a></li>
                          <li><a href="#">Shoes </a></li>
                          <li><a href="#">Jackets</a></li>
                          <li><a href="#">Sunglasses</a></li>
                          <li><a href="#">Sport Wear</a></li>
                          <li><a href="#">Blazers</a></li>
                          <li><a href="#">Shirts</a></li>
                          <li><a href="#">Shorts</a></li>
                        </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Handbags</a></li>
                          <li><a href="#">Jwellery</a></li>
                          <li><a href="#">Swimwear </a></li>
                          <li><a href="#">Tops</a></li>
                          <li><a href="#">Flats</a></li>
                          <li><a href="#">Shoes</a></li>
                          <li><a href="#">Winter Wear</a></li>
                          <li><a href="#">Night Suits</a></li>
                        </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Toys &amp; Games</a></li>
                          <li><a href="#">Jeans</a></li>
                          <li><a href="#">Shirts</a></li>
                          <li><a href="#">Shoes</a></li>
                          <li><a href="#">School Bags</a></li>
                          <li><a href="#">Lunch Box</a></li>
                          <li><a href="#">Footwear</a></li>
                          <li><a href="#">Wipes</a></li>
                        </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Sandals </a></li>
                          <li><a href="#">Shorts</a></li>
                          <li><a href="#">Dresses</a></li>
                          <li><a href="#">Jwellery</a></li>
                          <li><a href="#">Bags</a></li>
                          <li><a href="#">Night Dress</a></li>
                          <li><a href="#">Swim Wear</a></li>
                          <li><a href="#">Toys</a></li>
                        </ul>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu -->
              </li>
              <!-- /.menu-item -->

              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-heartbeat"></i>Health and Beauty</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <ul>
                          <li><a href="#">Gaming</a></li>
                          <li><a href="#">Laptop Skins</a></li>
                          <li><a href="#">Apple</a></li>
                          <li><a href="#">Dell</a></li>
                          <li><a href="#">Lenovo</a></li>
                          <li><a href="#">Microsoft</a></li>
                          <li><a href="#">Asus</a></li>
                          <li><a href="#">Adapters</a></li>
                          <li><a href="#">Batteries</a></li>
                          <li><a href="#">Cooling Pads</a></li>
                        </ul>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <ul>
                          <li><a href="#">Routers &amp; Modems</a></li>
                          <li><a href="#">CPUs, Processors</a></li>
                          <li><a href="#">PC Gaming Store</a></li>
                          <li><a href="#">Graphics Cards</a></li>
                          <li><a href="#">Components</a></li>
                          <li><a href="#">Webcam</a></li>
                          <li><a href="#">Memory (RAM)</a></li>
                          <li><a href="#">Motherboards</a></li>
                          <li><a href="#">Keyboards</a></li>
                          <li><a href="#">Headphones</a></li>
                        </ul>
                      </div>
                      <div class="dropdown-banner-holder"> <a href="#"><img alt="" src="{{URL::to('/')}}/templates/front/assets/images/banners/banner-side.png" /></a> </div>
                    </div>
                    <!-- /.row -->
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu -->
              </li>
              <!-- /.menu-item -->

              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-paper-plane"></i>Kids and Babies</a>
                <!-- /.dropdown-menu -->
              </li>
              <!-- /.menu-item -->

              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-futbol-o"></i>Sports</a>
                <!-- ================================== MEGAMENU VERTICAL ================================== -->
                <!-- /.dropdown-menu -->
                <!-- ================================== MEGAMENU VERTICAL ================================== -->
              </li>
              <!-- /.menu-item -->

              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-envira"></i>Home and Garden</a>
                <!-- /.dropdown-menu -->
              </li>
              <!-- /.menu-item -->

            </ul>
            <!-- /.nav -->
          </nav>
          <!-- /.megamenu-horizontal -->
        </div>--}}
        <!-- /.side-menu -->
        <!-- ================================== TOP NAVIGATION : END ================================== -->
        <form action="{{route('shop-filter')}}" method="post">
          @csrf
          <div class="sidebar-module-container">
            <div class="sidebar-filter">
              <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
              <div class="sidebar-widget">
                @if(count(get_categories())>0)
                <h3 class="section-title">Filter By Category</h3>
                <div class="sidebar-widget-body">
                  <div class="accordion">
                    @if(!empty($_GET['category']))
                    @php
                    $filter_cats = explode(',',$_GET['category']);
                    @endphp
                    @endif
                    @foreach(get_categories() as $cat)
                    <div class="col-sm-12">
                      <input type="checkbox" @if(!empty($filter_cats) && in_array($cat->slug, $filter_cats)) checked @endif class="custom-control-input" id="{{$cat->slug}}" name="category[]" onchange="this.form.submit();" value="{{$cat->slug}}">
                      <label for="{{$cat->slug}}" class="custom-control-label">&nbsp;&nbsp;&nbsp; {{ucfirst($cat->title)}} <span class="text-muted">({{count($cat->relProduct)}})</span></label>
                    </div>

                    @endforeach
                  </div>
                  <!-- /.accordion -->
                </div>
                <!-- /.sidebar-widget-body -->
                @endif
              </div>


              <div class="sidebar-widget">
                <h3 class="section-title">Sub Category</h3>
                <div class="sidebar-widget-body">
                  <div class="accordion">
                    @foreach(get_categories() as $cat)
                    @if(count(get_child_categories($cat->id))!=0)
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a href="#collapse{{$cat->id}}" data-toggle="collapse" class="accordion-toggle collapsed"> {{ucfirst($cat->title)}} </a>
                      </div>
                      <!-- /.accordion-heading -->
                      <div class="accordion-body collapse" id="collapse{{$cat->id}}" style="height: 0px;">
                        <div class="accordion-inner">
                          <ul>
                            @foreach(get_child_categories($cat->id) as $child_cat)
                            <li><a href="{{route('product-cat',$child_cat->slug)}}">{{ucfirst($child_cat->title)}}</a></li>
                            @endforeach
                          </ul>
                        </div>
                        <!-- /.accordion-inner -->
                      </div>
                      <!-- /.accordion-body -->
                    </div>

                    @endif
                    @endforeach
                    <!-- /.accordion-group -->

                  </div>
                  <!-- /.accordion -->
                </div>
                <!-- /.sidebar-widget-body -->
              </div>
              <!-- /.sidebar-widget -->
              <!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->
              <div class="sidebar-widget">
               {{--@if(count(get_brands())>0)
                <h3 class="section-title">Filter By Brand</h3>
                <div class="sidebar-widget-body">
                  <div class="accordion">
                    @if(!empty($_GET['brand']))
                    @php
                    $filter_brands = explode(',',$_GET['brand']);
                    @endphp
                    @endif
                    @foreach(get_brands() as $brand)
                    <div class="col-sm-12">
                      <input type="checkbox" @if(!empty($filter_brands) && in_array($brand->slug, $filter_brands)) checked @endif class="custom-control-input" id="{{$brand->slug}}" name="brand[]" onchange="this.form.submit();" value="{{$brand->slug}}">
                      <label for="{{$brand->slug}}" class="custom-control-label">&nbsp;&nbsp;&nbsp; {{ucfirst($brand->title)}}<span class="text-muted">({{count($brand->relProduct)}})</span></label>
                    </div>

                    @endforeach
                  </div>
                  <!-- /.accordion -->
                </div>
                <!-- /.sidebar-widget-body -->
                @endif--}}
              </div>


              <div class="sidebar-widget">
               {{--<h3 class="section-title">Filter By Size</h3>
                <div class="sidebar-widget-body">
                  <div class="accordion">
                    <div class="col-sm-12">
                      <input type="checkbox" <?php if(!empty($_GET['size']) && $_GET['size']=='S'){echo 'checked';} ?> name="size" class="custom-control-input" id="customCheck11" onchange="this.form.submit();" value="S">
                      <label for="customCheck11" class="custom-control-label">&nbsp;&nbsp;&nbsp; Small<span class="text-muted">({{\App\Models\Product::where(['status'=>'show', 'size'=>'S'])->where('is_deleted',0)->count() }})</span></label>
                    </div>
                    <div class="col-sm-12">
                      <input type="checkbox" <?php if(!empty($_GET['size']) && $_GET['size']=='M'){echo 'checked';} ?> name="size" class="custom-control-input" id="customCheck12" onchange="this.form.submit();" value="M">
                      <label for="customCheck12" class="custom-control-label">&nbsp;&nbsp;&nbsp; Medium<span class="text-muted">({{\App\Models\Product::where(['status'=>'show', 'size'=>'M'])->where('is_deleted',0)->count() }})</span></label>
                    </div>
                    <div class="col-sm-12">
                      <input type="checkbox" <?php if(!empty($_GET['size']) && $_GET['size']=='L'){echo 'checked';} ?> name="size" class="custom-control-input" id="customCheck13" onchange="this.form.submit();" value="L">
                      <label for="customCheck13" class="custom-control-label">&nbsp;&nbsp;&nbsp; Large<span class="text-muted">({{\App\Models\Product::where(['status'=>'show', 'size'=>'L'])->where('is_deleted',0)->count() }})</span></label>
                    </div>
                    <div class="col-sm-12">
                      <input type="checkbox" <?php if(!empty($_GET['size']) && $_GET['size']=='XL'){echo 'checked';} ?> name="size" class="custom-control-input" id="customCheck14" onchange="this.form.submit();" value="XL">
                      <label for="customCheck14" class="custom-control-label">&nbsp;&nbsp;&nbsp; Extra Large<span class="text-muted">({{\App\Models\Product::where(['status'=>'show', 'size'=>'XL'])->where('is_deleted',0)->count() }})</span></label>
                    </div>
                  </div>
                  <!-- /.accordion -->
                </div>--}}
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
                      <div id="slider-range" data-min="{{min_price()}}" data-max="{{max_price()}}" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="{{min_price()}}" data-value-max="{{max_price()}}" data-label-result="Price:">
                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                        <span class="min-max">
                          <span class="ui-slider-handle ui-state-default ui-corner-all pull-left" tabindex="0"></span>
                          <span class="ui-slider-handle ui-state-default ui-corner-all pull-right" tabindex="0"></span>
                        </span>
                      </div class="d-flex mt-2">
                      @if(!empty($_GET['price']))
                      @php
                      $price = explode('-',$_GET['price'])
                      @endphp
                      @endif
                      <input type="hidden" id="price_range" value="@if(!empty($_GET['price'])) {{$_GET['price']}} @endif" name="price_range">
                      <input style="border: 0; width:50%;" type="text" readonly id="amount" value="₹<?php if (!empty($_GET['price'])) {
                                                                                                      echo $price[0];
                                                                                                    } else {
                                                                                                      echo min_price();
                                                                                                    } ?> - ₹<?php if (!empty($_GET['price'])) {
                                                                                                              echo $price[1];
                                                                                                            } else {
                                                                                                              echo max_price();
                                                                                                            } ?>">
                      <!-- <div class="range-price">Price: ₹{{--min_price()--}} - ₹{{--max_price()--}}</div> -->
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
                    @foreach(get_categories() as $product_cat)
                    <a class="item" href="{{route('product-cat',$product_cat->slug)}}">{{$product_cat->title}}</a>
                    @endforeach
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

        {{--<div id="category" class="category-carousel hidden-xs">
          <div class="item">
            <div class="image"> <img src="{{URL::to('/')}}/templates/front/assets/images/banners/cat-banner-1.jpg" alt="" class="img-responsive">
      </div>
      <div class="container-fluid">
        <div class="caption vertical-top text-left">
          <div class="big-text"> Big Sale </div>
          <div class="excerpt hidden-sm hidden-md"> Save up to 49% off </div>
          <div class="excerpt-normal hidden-sm hidden-md"> Lorem ipsum dolor sit amet, consectetur adipiscing elit </div>
          <div class="buy-btn"><a href="#" class="lnk btn btn-primary">Show Now</a></div>
        </div>
        <!-- /.caption -->
      </div>
      <!-- /.container-fluid -->
    </div>
  </div>--}}


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
                  <option value="priceAsc" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='priceAsc' ) selected @endif>Price - Lower To Higher</option>
                  <option value="priceDesc" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='priceDesc' ) selected @endif>Price - Higher To Lower</option>
                  <option value="titleAsc" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='titleAsc' ) selected @endif>A To Z Ascending</option>
                  <option value="titleDesc" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='titleDesc' ) selected @endif>Z To A Descending</option>
                  <option value="discAsc" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='discAsc' ) selected @endif>Discount - Lower To Higher</option>
                  <option value="discDesc" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='discDesc' ) selected @endif>Discount - Higher To Lower</option>
                </select>
              </div>
            </div>
            <!-- /.fld -->
          </div>
          <!-- /.lbl-cnt -->
        </div>

        </form>
        <!-- /.col -->
        {{--<div class="col col-sm-6 col-md-6 no-padding hidden-sm hidden-md">
                <div class="lbl-cnt"> <span class="lbl">Show</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> 1 <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">1</a></li>
                        <li role="presentation"><a href="#">2</a></li>
                        <li role="presentation"><a href="#">3</a></li>
                        <li role="presentation"><a href="#">4</a></li>
                        <li role="presentation"><a href="#">5</a></li>
                        <li role="presentation"><a href="#">6</a></li>
                        <li role="presentation"><a href="#">7</a></li>
                        <li role="presentation"><a href="#">8</a></li>
                        <li role="presentation"><a href="#">9</a></li>
                        <li role="presentation"><a href="#">10</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld -->
                </div>
                <!-- /.lbl-cnt -->
              </div>--}}
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
            <h4>Total Product: {{count($products)}}</h4>
            @foreach($products as $product)
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="item">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image">
                        <a href="{{route('product-detail', $product['slug'])}}">
                          <img src="{{URL::to('/')}}/public/images/products/{{$product['image_url1']}}" alt="">
                          <img src="{{URL::to('/')}}/public/images/products/{{$product['image_url2']}}" alt="" class="hover-image">
                        </a>
                      </div>
                    </div>
                    <div class="product-info text-left">
                      <h3 class="name"><a href="{{route('product-detail', $product['slug'])}}">{{ucfirst($product['title'])}}</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price">
                        <span class="price"> ₹{{$product['sale_price']}} </span>
                        <span class="price-before-discount">@if($product['price'] > $product['sale_price']) ₹ {{$product['price']}} @endif</span>
                        <span class="text text-success">&nbsp;&nbsp;&nbsp; @if($product['discount']>0) <b>{{$product['discount']}}% off </b>@endif</span>
                      </div>
                      <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <input type="hidden" class="product_id" value="{{$product['id']}}">
                            <input type="hidden" id="quantity{{$product['id']}}" class="qty-input form-control" value="1" min="1">
                            <button type="submit" class="btn btn-primary icon" onclick="addCart({{$product['id']}})"><i class="fa fa-shopping-cart"></i></button>
                          </li>
                          <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                          <li class="lnk"> <a class="add-to-cart" href="#" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
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
            @endforeach



          </div>
          <!-- /.category-product -->
        </div>
        <!-- /.tab-pane #list-container -->
      </div>

      <div class="tab-pane " id="list-container">
        <div class="category-product">
          @foreach($products as $product)
          <div class="category-product-inner">
            <div class="products">
              <div class="product-list product">
                <div class="row product-list-row">
                  <div class="col col-sm-3 col-lg-3">
                    <div class="product-image">
                      <div class="image">
                        <a href="{{route('product-detail', $product['slug'])}}">
                          <img src="{{URL::to('/')}}/public/images/products/{{$product['image_url1']}}" alt="" height="253" width="202">
                        </a>
                      </div>

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-sm-9 col-lg-9">
                    <div class="product-info">
                      <h3 class="name"><a href="{{route('product-detail', $product['slug'])}}">{{ucfirst($product['title'])}}</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price">
                        <span class="price"> ₹{{$product['sale_price']}} </span>
                        <span class="price-before-discount">@if($product['price'] > $product['sale_price']) ₹ {{$product['price']}} @endif</span>
                        <span class="text text-success">&nbsp;&nbsp;&nbsp; @if($product['discount']>0) <b>{{$product['discount']}}% off </b>@endif</span>
                      </div>
                      <!-- /.product-price -->
                      <div class="description m-t-10">{{$product['short_description']}}</div>
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
                              <input type="hidden" class="product_id" value="{{$product['id']}}">
                              <input type="hidden" id="quantity{{$product['id']}}" class="qty-input form-control" value="1" min="1">
                              <button type="submit" class="btn btn-primary icon" onclick="addCart({{$product['id']}})"><i class="fa fa-shopping-cart"></i></button>
                            </li>
                            <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            <li class="lnk"> <a class="add-to-cart" href="#" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
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
          @endforeach
          <!-- /.category-product-inner -->

        </div>
        <!-- /.category-product -->
      </div>

      <!-- /.tab-content -->
      <div class="clearfix filters-container bottom-row">
        <div class="text-right">
          <div class="pagination-container">
            {{--$products->appends($_GET)->links()--}}
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

@endsection