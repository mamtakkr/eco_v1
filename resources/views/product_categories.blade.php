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
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
              @foreach(get_categories() as $cat)
              @if(count(get_child_categories($cat->id))!=0)
              <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i>{{ucfirst($cat->title)}}</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      @foreach(get_child_categories($cat->id) as $child_cat)
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="{{route('product-cat',$child_cat->slug)}}">{{ucfirst($child_cat->title)}}</a></li>
                        </ul>
                      </div>
                      @endforeach
                    </div>
                    <!-- /.row -->
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu -->
              </li>

              @else
              <li class="dropdown menu-item">
                <a href="{{route('product-cat',$cat->slug)}}" class="dropdown-toggle">
                  <i class="icon fa fa-envira"></i>{{ucfirst($cat->title)}}</a>
              </li>
              @endif
              @endforeach


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

            <!-- ============================================== PRICE SILDER============================================== -->
            {{--<div class="sidebar-widget">
              <div class="widget-header">
                <h4 class="widget-title">Price Slider</h4>
              </div>
              <div class="sidebar-widget-body m-t-10">
                <div class="price-range-holder"> <span class="min-max"> <span class="pull-left">$200.00</span> <span class="pull-right">$800.00</span> </span>
                  <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
                  <input type="text" class="price-slider" value="">
                </div>
                <!-- /.price-range-holder -->
                <a href="#" class="lnk btn btn-primary">Show Now</a>
              </div>
              <!-- /.sidebar-widget-body -->
            </div>
            <!-- /.sidebar-widget -->
            <!-- ============================================== PRICE SILDER : END ============================================== -->
            <!-- ============================================== MANUFACTURES============================================== -->
            <div class="sidebar-widget">
              <div class="widget-header">
                <h4 class="widget-title">Manufactures</h4>
              </div>
              <div class="sidebar-widget-body">
                <ul class="list">
                  <li><a href="#">Forever 18</a></li>
                  <li><a href="#">Nike</a></li>
                  <li><a href="#">Dolce & Gabbana</a></li>
                  <li><a href="#">Alluare</a></li>
                  <li><a href="#">Chanel</a></li>
                  <li><a href="#">Other Brand</a></li>
                </ul>
                <!--<a href="#" class="lnk btn btn-primary">Show Now</a>-->
              </div>
              <!-- /.sidebar-widget-body -->
            </div>
            <!-- /.sidebar-widget -->
            <!-- ============================================== MANUFACTURES: END ============================================== -->
            <!-- ============================================== COLOR============================================== -->
            <div class="sidebar-widget">
              <div class="widget-header">
                <h4 class="widget-title">Colors</h4>
              </div>
              <div class="sidebar-widget-body">
                <ul class="list">
                  <li><a href="#">Red</a></li>
                  <li><a href="#">Blue</a></li>
                  <li><a href="#">Yellow</a></li>
                  <li><a href="#">Pink</a></li>
                  <li><a href="#">Brown</a></li>
                  <li><a href="#">Teal</a></li>
                </ul>
              </div>
              <!-- /.sidebar-widget-body -->
            </div>
            <!-- /.sidebar-widget -->
            <!-- ============================================== COLOR: END ============================================== -->
            <!-- ============================================== COMPARE============================================== -->
            <div class="sidebar-widget outer-top-vs">
              <h3 class="section-title">Compare products</h3>
              <div class="sidebar-widget-body">
                <div class="compare-report">
                  <p>You have no <span>item(s)</span> to compare</p>
                </div>
                <!-- /.compare-report -->
              </div>
              <!-- /.sidebar-widget-body -->
            </div>--}}
            <!-- /.sidebar-widget -->
            <!-- ============================================== COMPARE: END ============================================== -->
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
            <!-- /.Testimonials -->
            {{--<div class="sidebar-widget  outer-top-vs ">
              <div id="advertisement" class="advertisement">
                <div class="item">
                  <div class="avatar"><img src="{{URL::to('/')}}/templates/front/assets/images/testimonials/member1.png" alt="Image">
          </div>
          <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer. Sed quia non numquam eius modi tempora incidunt ut labore et dolore.<em>"</em></div>
          <div class="clients_author">John Doe <span>Abc Company</span> </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.item -->

        <div class="item">
          <div class="avatar"><img src="{{URL::to('/')}}/templates/front/assets/images/testimonials/member3.png" alt="Image"></div>
          <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer. Sed quia non numquam eius modi tempora incidunt ut labore et dolore.<em>"</em></div>
          <div class="clients_author">Stephen Doe <span>Xperia Designs</span> </div>
        </div>
        <!-- /.item -->

        <div class="item">
          <div class="avatar"><img src="{{URL::to('/')}}/templates/front/assets/images/testimonials/member2.png" alt="Image"></div>
          <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer. Sed quia non numquam eius modi tempora incidunt ut labore et dolore.<em>"</em></div>
          <div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span> </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.item -->

      </div>
      <!-- /.owl-carousel -->
    </div>

    <!-- ============================================== Testimonials: END ============================================== -->

    <!-- ============================================== NEWSLETTER ============================================== -->
    <div class="sidebar-widget newsletter outer-bottom-small  outer-top-vs">
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
    </div>--}}
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
            <div class="image"> <img src="{{URL::to('/')}}/templates/front/assets/images/banners/cat-banner-1.jpg" alt="" class="img-responsive"> </div>
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

  @if(count($products)>0)
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
                  <option value="priceAsc" {{old('sortBy')=='priceAsc' ? 'selected' : ''}}>Price - Lower To Higher</option>
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
            @foreach($products as $product)
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="item">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image">
                        <a href="{{route('product-detail', $product->slug)}}">
                          <img src="{{URL::to('/')}}/public/images/products/{{$product->image_url1}}" alt="">
                          <img src="{{URL::to('/')}}/public/images/products/{{$product->image_url2}}" alt="" class="hover-image">
                        </a>
                      </div>
                      <!-- /.image -->

                      <div class="tag new"><span>new</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <!-- <h3 class="name">{{--ucfirst(\App\Models\Brand::where('id',$product->brand_id)->value('title'))--}}</h3> -->
                      <h3 class="name"><a href="{{route('product-detail', $product->slug)}}">{{ucfirst($product->title)}}</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price">
                        <span class="price"> ₹{{$product->sale_price}} </span>
                        <span class="price-before-discount">@if($product->price > $product->sale_price) ₹ {{$product->price}} @endif</span>
                        <span class="text text-success">&nbsp;&nbsp;&nbsp; @if($product->discount>0) <b>{{$product->discount}}% off </b>@endif</span>
                      </div>
                      <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <input type="hidden" class="product_id" value="{{$product->id}}">
                            <input type="hidden" id="quantity{{$product->id}}" class="qty-input form-control" value="1" min="1">
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
                        <a href="{{route('product-detail', $product->slug)}}">
                          <img src="{{URL::to('/')}}/public/images/products/{{$product->image_url1}}" alt="" height="253" width="202">
                        </a>
                      </div>

                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col col-sm-9 col-lg-9">
                    <div class="product-info">
                      <h3 class="name"><a href="{{route('product-detail', $product->slug)}}">{{ucfirst($product->title)}}</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price">
                        <span class="price"> ₹{{$product->sale_price}} </span>
                        <span class="price-before-discount">@if($product->price > $product->sale_price) ₹ {{$product->price}} @endif</span>
                        <span class="text text-success">&nbsp;&nbsp;&nbsp; @if($product->discount>0) <b>{{$product->discount}}% off </b>@endif</span>
                      </div>
                      <!-- /.product-price -->
                      <div class="description m-t-10">{{$product->short_description}}</div>
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
                              <input type="hidden" class="product_id" value="{{$product->id}}">
                              <input type="hidden" id="quantity{{$product->id}}" class="qty-input form-control" value="1" min="1">
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
            {{$products->links()}}
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
  @else
  <h1>No Products Found</h1>
  @endif
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

    window.location = "{{url(''.$route.'')}}/{{$categories->slug}}?sort=" + sort;
  });
</script>

@endsection