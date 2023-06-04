<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/paypal',function(){
    return view('myOrder');
});


Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth','userRedirect','adminRedirect'])->name('dashboard');

// route for processing payment
Route::post('/paypal', [App\Http\Controllers\PaymentController::class, 'payWithpaypal'])->name('paypal');

// route for check status of the payment
Route::get('/status', [App\Http\Controllers\PaymentController::class, 'getPaymentStatus'])->name('status');




Route::get('/',[App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('shop',[App\Http\Controllers\IndexController::class, 'shop'])->name('shop');
Route::post('shop-filter',[App\Http\Controllers\IndexController::class, 'shop_filter'])->name('shop-filter');
Route::get('product-detail/{slug}',[App\Http\Controllers\IndexController::class, 'product_detail'])->name('product-detail');

//search product & autosearch product
Route::get('autosearch',[App\Http\Controllers\IndexController::class, 'autoSearch'])->name('autosearch');
Route::get('searching',[App\Http\Controllers\IndexController::class, 'search'])->name('searching');


Route::get('product-cat/{slug}',[App\Http\Controllers\IndexController::class, 'product_cat'])->name('product-cat');

Route::get('wishlist',[App\Http\Controllers\CartController::class, 'wishlist'])->name('wishlist');

Route::get('cart',[App\Http\Controllers\CartController::class, 'cart'])->name('cart');
Route::post('update-cart',[App\Http\Controllers\CartController::class, 'update_cart'])->name('ajax-update-cart');
Route::post('add-to-cart',[App\Http\Controllers\CartController::class, 'addtocart'])->name('ajax-add-to-cart');
Route::get('load-cart-data',[App\Http\Controllers\CartController::class, 'cartloadbyajax'])->name('ajax-load-cart-data');
Route::delete('delete-cart',[App\Http\Controllers\CartController::class, 'delete_cart'])->name('ajax-delete-cart');
Route::get('clear-cart',[App\Http\Controllers\CartController::class, 'clear_cart'])->name('ajax-clear-cart');

Route::get('checkout',[App\Http\Controllers\CheckoutController::class, 'checkout'])->name('checkout');
Route::post('shipping-address-store',[App\Http\Controllers\CheckoutController::class, 'shipping_address_store'])->name('front-shipping-address-store');
Route::patch('shipping-address-update',[App\Http\Controllers\CheckoutController::class, 'shipping_address_update'])->name('front-shipping-address-update');
Route::post('apply-coupon-code', [\App\Http\Controllers\CheckoutController::class, 'apply_coupon_code'])->name('ajax-front-apply-coupon-code');

//paypal section
Route::get('paypal/payment/cancel',[App\Http\Controllers\PaypalController::class, 'getCancel']);
Route::get('paypal/payment/done',[App\Http\Controllers\PaypalController::class, 'getDone']);



Route::post('place-order',[App\Http\Controllers\OrderController::class, 'place_order'])->name('front-place-order');
Route::get('thank-you',[App\Http\Controllers\OrderController::class, 'thank_you'])->name('thank-you');
//Route::post('confirm-razorpay-payment',[App\Http\Controllers\OrderController::class, 'razorpay_payment'])->name('ajax-confirm-razorpay-payment');


Route::get('user-account',[App\Http\Controllers\UserController::class, 'user_account'])->name('front-user-account');
Route::get('user-orders-show',[App\Http\Controllers\UserController::class, 'user_orders_show'])->name('front-user-orders-show');
Route::get('user-order-view/{id}', [\App\Http\Controllers\UserController::class, 'user_order_view'])->name('front-order-view');
Route::get('user-order-edit/{id}', [\App\Http\Controllers\UserController::class, 'user_order_edit'])->name('front-order-edit');
Route::patch('user-order-cancel-order', [\App\Http\Controllers\UserController::class, 'user_order_cancel_order'])->name('front-order-cancel-order');


Route::get('execelupdate',[App\Http\Controllers\UserController::class, 'execelupdate']);


///////////////ADMIN ROUTES/////////////////////
Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard', [\App\Http\Controllers\admin\IndexController::class, 'index'])->name('admin-index');

    Route::get('users-show', [\App\Http\Controllers\admin\UserController::class, 'user_show'])->name('users-show');
    Route::get('vendors-show', [\App\Http\Controllers\admin\UserController::class, 'vendor_show'])->name('vendors-show');
    Route::post('ajax-vendor-status-update', [\App\Http\Controllers\admin\UserController::class, 'vendor_status_update'])->name('ajax-vendor-status-update');
    
    Route::get('categories-show', [\App\Http\Controllers\admin\CategoryController::class, 'categories_show'])->name('categories-show');
    Route::get('category-create', [\App\Http\Controllers\admin\CategoryController::class, 'category_create'])->name('category-create');
    Route::post('category-create-action', [\App\Http\Controllers\admin\CategoryController::class, 'category_create_action'])->name('category-create-action');
    Route::get('category-edit/{id}', [\App\Http\Controllers\admin\CategoryController::class, 'category_edit'])->name('category-edit');
    Route::patch('category-update-action', [\App\Http\Controllers\admin\CategoryController::class, 'category_update_action'])->name('category-update-action');
    Route::delete('category-delete/{id}', [\App\Http\Controllers\admin\CategoryController::class, 'category_delete'])->name('category-delete');
    Route::post('ajax-category-status-update', [\App\Http\Controllers\admin\CategoryController::class, 'category_status_update'])->name('ajax-category-status-update');
    
    Route::post('ajax-category-get-child', [\App\Http\Controllers\admin\CategoryController::class, 'get_child_by_parent_id'])->name('ajax-category-get-child');

    Route::get('products-show', [\App\Http\Controllers\admin\ProductController::class, 'products_show'])->name('products-show');
    Route::get('product-create', [\App\Http\Controllers\admin\ProductController::class, 'product_create'])->name('product-create');
    Route::post('product-create-action', [\App\Http\Controllers\admin\ProductController::class, 'product_create_action'])->name('product-create-action');
    Route::get('product-edit/{id}', [\App\Http\Controllers\admin\ProductController::class, 'product_edit'])->name('product-edit');
    Route::patch('product-update-action', [\App\Http\Controllers\admin\ProductController::class, 'product_update_action'])->name('product-update-action');
    Route::delete('product-delete/{id}', [\App\Http\Controllers\admin\ProductController::class, 'product_delete'])->name('product-delete');
    Route::post('ajax-product-status-update', [\App\Http\Controllers\admin\ProductController::class, 'product_status_update'])->name('ajax-product-status-update');
    
    Route::get('orders-show', [\App\Http\Controllers\admin\OrderController::class, 'orders_show'])->name('orders-show');
    Route::get('order-view/{id}', [\App\Http\Controllers\admin\OrderController::class, 'order_view'])->name('order-view');
    Route::get('order-edit/{id}', [\App\Http\Controllers\admin\OrderController::class, 'order_edit'])->name('order-edit');
    Route::patch('order-update-tracking-status', [\App\Http\Controllers\admin\OrderController::class, 'order_update_tracking_status'])->name('order-update-tracking-status');
    Route::patch('order-cancel-order', [\App\Http\Controllers\admin\OrderController::class, 'order_cancel_order'])->name('order-cancel-order');
    Route::patch('order-complete-order', [\App\Http\Controllers\admin\OrderController::class, 'order_complete_order'])->name('order-complete-order');
    
    Route::get('generate-invoice/{id}', [\App\Http\Controllers\admin\OrderController::class, 'generate_invoice'])->name('generate-invoice');
    
    Route::get('coupons-show', [\App\Http\Controllers\admin\CouponController::class, 'coupons_show'])->name('coupons-show');
    Route::get('coupon-create', [\App\Http\Controllers\admin\CouponController::class, 'coupon_create'])->name('coupon-create');
    Route::post('coupon-create-action', [\App\Http\Controllers\admin\CouponController::class, 'coupon_create_action'])->name('coupon-create-action');
    Route::get('coupon-edit/{id}', [\App\Http\Controllers\admin\CouponController::class, 'coupon_edit'])->name('coupon-edit');
    Route::patch('coupon-update-action', [\App\Http\Controllers\admin\CouponController::class, 'coupon_update_action'])->name('coupon-update-action');
    Route::post('ajax-coupon-visibility-status-update', [\App\Http\Controllers\admin\CouponController::class, 'coupon_visibility_status_update'])->name('ajax-coupon-visibility-status-update');
    
    Route::get('banners-show', [\App\Http\Controllers\admin\BannerController::class, 'banners_show'])->name('banners-show');
    Route::get('banner-create', [\App\Http\Controllers\admin\BannerController::class, 'banner_create'])->name('banner-create');
    Route::post('banner-create-action', [\App\Http\Controllers\admin\BannerController::class, 'banner_create_action'])->name('banner-create-action');
    Route::get('banner-edit/{id}', [\App\Http\Controllers\admin\BannerController::class, 'banner_edit'])->name('banner-edit');
    Route::patch('banner-update-action', [\App\Http\Controllers\admin\BannerController::class, 'banner_update_action'])->name('banner-update-action');
    Route::delete('banner-delete/{id}', [\App\Http\Controllers\admin\BannerController::class, 'banner_delete'])->name('banner-delete');
    Route::post('ajax-banner-status-update', [\App\Http\Controllers\admin\BannerController::class, 'banner_status_update'])->name('ajax-banner-status-update');
    
    Route::get('blogs-show', [\App\Http\Controllers\admin\BlogController::class, 'blogs_show'])->name('blogs-show');
    Route::get('blog-create', [\App\Http\Controllers\admin\BlogController::class, 'blog_create'])->name('blog-create');
    Route::post('blog-create-action', [\App\Http\Controllers\admin\BlogController::class, 'blog_create_action'])->name('blog-create-action');
    Route::get('blog-edit/{id}', [\App\Http\Controllers\admin\BlogController::class, 'blog_edit'])->name('blog-edit');
    Route::patch('blog-update-action', [\App\Http\Controllers\admin\BlogController::class, 'blog_update_action'])->name('blog-update-action');
    Route::delete('blog-delete/{id}', [\App\Http\Controllers\admin\BlogController::class, 'blog_delete'])->name('blog-delete');
    Route::post('ajax-blog-status-update', [\App\Http\Controllers\admin\BlogController::class, 'blog_status_update'])->name('ajax-blog-status-update');
    
    Route::get('sliders-show', [\App\Http\Controllers\admin\SliderController::class, 'sliders_show'])->name('sliders-show');
    Route::get('slider-create', [\App\Http\Controllers\admin\SliderController::class, 'slider_create'])->name('slider-create');
    Route::post('slider-create-action', [\App\Http\Controllers\admin\SliderController::class, 'slider_create_action'])->name('slider-create-action');
    Route::get('slider-edit/{id}', [\App\Http\Controllers\admin\SliderController::class, 'slider_edit'])->name('slider-edit');
    Route::patch('slider-update-action', [\App\Http\Controllers\admin\SliderController::class, 'slider_update_action'])->name('slider-update-action');
    Route::delete('slider-delete/{id}', [\App\Http\Controllers\admin\SliderController::class, 'slider_delete'])->name('slider-delete');
    Route::post('ajax-slider-status-update', [\App\Http\Controllers\admin\SliderController::class, 'slider_status_update'])->name('ajax-slider-status-update');
    
    Route::get('brands-show', [\App\Http\Controllers\admin\BrandController::class, 'brands_show'])->name('brands-show');
    Route::get('brand-create', [\App\Http\Controllers\admin\BrandController::class, 'brand_create'])->name('brand-create');
    Route::post('brand-create-action', [\App\Http\Controllers\admin\BrandController::class, 'brand_create_action'])->name('brand-create-action');
    Route::get('brand-edit/{id}', [\App\Http\Controllers\admin\BrandController::class, 'brand_edit'])->name('brand-edit');
    Route::patch('brand-update-action', [\App\Http\Controllers\admin\BrandController::class, 'brand_update_action'])->name('brand-update-action');
    Route::delete('brand-delete/{id}', [\App\Http\Controllers\admin\BrandController::class, 'brand_delete'])->name('brand-delete');
    Route::post('ajax-brand-status-update', [\App\Http\Controllers\admin\BrandController::class, 'brand_status_update'])->name('ajax-brand-status-update');
    
    Route::get('deal-of-days-show', [\App\Http\Controllers\admin\DealOfDayController::class, 'deal_of_days_show'])->name('deal-of-days-show');
    Route::get('deal-of-day-create', [\App\Http\Controllers\admin\DealOfDayController::class, 'deal_of_day_create'])->name('deal-of-day-create');
    Route::post('deal-of-day-create-action', [\App\Http\Controllers\admin\DealOfDayController::class, 'deal_of_day_create_action'])->name('deal-of-day-create-action');
    Route::get('deal-of-day-edit/{id}', [\App\Http\Controllers\admin\DealOfDayController::class, 'deal_of_day_edit'])->name('deal-of-day-edit');
    Route::patch('deal-of-day-update-action', [\App\Http\Controllers\admin\DealOfDayController::class, 'deal_of_day_update_action'])->name('deal-of-day-update-action');
    Route::delete('deal-of-day-delete/{id}', [\App\Http\Controllers\admin\DealOfDayController::class, 'deal_of_day_delete'])->name('deal-of-day-delete');
    Route::post('ajax-deal-of-day-status-update', [\App\Http\Controllers\admin\DealOfDayController::class, 'deal_of_day_status_update'])->name('ajax-deal-of-day-status-update');

    Route::get('featured-products-show', [\App\Http\Controllers\admin\FeaturedProductController::class, 'featured_products_show'])->name('featured-products-show');
    Route::get('featured-product-create', [\App\Http\Controllers\admin\FeaturedProductController::class, 'featured_product_create'])->name('featured-product-create');
    Route::post('featured-product-create-action', [\App\Http\Controllers\admin\FeaturedProductController::class, 'featured_product_create_action'])->name('featured-product-create-action');
    Route::get('featured-product-edit/{id}', [\App\Http\Controllers\admin\FeaturedProductController::class, 'featured_product_edit'])->name('featured-product-edit');
    Route::patch('featured-product-update-action', [\App\Http\Controllers\admin\FeaturedProductController::class, 'featured_product_update_action'])->name('featured-product-update-action');
    Route::delete('featured-product-delete/{id}', [\App\Http\Controllers\admin\FeaturedProductController::class, 'featured_product_delete'])->name('featured-product-delete');
    Route::post('ajax-featured-product-status-update', [\App\Http\Controllers\admin\FeaturedProductController::class, 'featured_product_status_update'])->name('ajax-featured-product-status-update');
    
    Route::get('popular-products-show', [\App\Http\Controllers\admin\PopularProductController::class, 'popular_products_show'])->name('popular-products-show');
    Route::get('popular-product-create', [\App\Http\Controllers\admin\PopularProductController::class, 'popular_product_create'])->name('popular-product-create');
    Route::post('popular-product-create-action', [\App\Http\Controllers\admin\PopularProductController::class, 'popular_product_create_action'])->name('popular-product-create-action');
    Route::get('popular-product-edit/{id}', [\App\Http\Controllers\admin\PopularProductController::class, 'popular_product_edit'])->name('popular-product-edit');
    Route::patch('popular-product-update-action', [\App\Http\Controllers\admin\PopularProductController::class, 'popular_product_update_action'])->name('popular-product-update-action');
    Route::delete('popular-product-delete/{id}', [\App\Http\Controllers\admin\PopularProductController::class, 'popular_product_delete'])->name('popular-product-delete');
    Route::post('ajax-popular-product-status-update', [\App\Http\Controllers\admin\PopularProductController::class, 'popular_product_status_update'])->name('ajax-popular-product-status-update');
    
    Route::get('general-settings-show', [\App\Http\Controllers\admin\GeneralSettingController::class, 'general_settings_show'])->name('general-settings-show');
    Route::get('general-setting-edit/{id}', [\App\Http\Controllers\admin\GeneralSettingController::class, 'general_setting_edit'])->name('general-setting-edit');
    Route::patch('general-setting-update-action', [\App\Http\Controllers\admin\GeneralSettingController::class, 'general_setting_update_action'])->name('general-setting-update-action');
    

});



require __DIR__.'/auth.php';
