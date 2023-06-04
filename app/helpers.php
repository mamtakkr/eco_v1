<?php

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

if(!function_exists('get_setting')){
    function get_setting($key){
        return \App\Models\GeneralSetting::value($key);
    }
}


if(!function_exists('cart_show')){
    function cart_show(){
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        // return $cart_data;
        if (Auth::check()) {
            if (!empty($cart_data)) {
                foreach ($cart_data as $row) {
                    $cart = Cart::where(['pro_id' => $row['item_id'], 'user_id' => Auth::user()->id])->first();
                    if (!empty($cart->pro_id)) {
                        Cart::where(['pro_id' => $cart->pro_id, 'user_id' => Auth::user()->id])->update(['updated_at' => date('Y-m-d')]);
                    } else {
                        $cart_data = new Cart([
                            'user_id' => Auth::user()->id,
                            'pro_id' => $row['item_id'],
                            'quantity' => $row['item_quantity'],
                            'mode' => 'cart',
                            'created_at' => date('Y-m-d'),
                            'updated_at' => date('Y-m-d'),
                        ]);
                        $cart_data->save();
                    }
                }
            }
            Cookie::queue(Cookie::forget('shopping_cart'));
            $carts = Cart::join('products', 'products.id', '=', 'carts.pro_id')
                ->select(
                    'carts.*',
                    'products.title as pro_title',
                    'products.quantity as pro_quantity',
                    'products.sale_price as pro_sale_price',
                    'products.image_url1 as pro_image_url1'
                )->where('user_id', Auth::user()->id)->get()->toArray();
            return $carts;
        }
        return $cart_data;
    }
}


if(!function_exists('get_categories')){
    function get_categories(){
        return \App\Models\Category::with('relProduct')->where(['is_deleted'=>0, 'is_parent'=> 1])->where('status','active')->orderBy('title','ASC')->get();
    }
}


if(!function_exists('get_child_categories')){
    function get_child_categories($cat_id){
            return Category::where(['parent_id'=>$cat_id, 'status'=>'active'])->where('is_deleted',0)->get();
    }
}

if(!function_exists('get_brands')){
    function get_brands(){
        return \App\Models\Brand::with('relProduct')->where(['is_deleted'=>0,'status'=>'active'])->orderBy('title','ASC')->get();
    }
}

if(!function_exists('min_price')){
    function min_price(){
            return floor(\App\Models\Product::min('sale_price'));
    }
}


if(!function_exists('max_price')){
    function max_price(){
        return floor(\App\Models\Product::max('sale_price'));
    }
}


?>