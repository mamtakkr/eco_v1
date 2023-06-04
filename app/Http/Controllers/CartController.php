<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function cart()
    {
        $cart_data = cart_show();
        if (Auth::check()) {
            $carts = cart_show();
            return view('cart', compact('carts'));
        }
        return view('cart', compact('cart_data'));
    }

    public function addtocart(Request $request)
    {
        if (Auth::check()) {
            $pro_id = $request->id;
            $quantity = $request->quantity;

            // Cart::where('pro_id', $pro_id)->update(['quantity' => $quantity]);
            $cart = Cart::join('products', 'products.id', '=', 'carts.pro_id')->where('user_id', Auth::user()->id)->select('carts.*', 'products.title as pro_title')->get()->toArray();
            $item_id_list = array_column($cart, 'pro_id');
            $prod_id_is_there = $pro_id;

            if (in_array($prod_id_is_there, $item_id_list)) {
                foreach ($cart as $keys => $values) {
                    if ($cart[$keys]["pro_id"] == $pro_id) {
                        $cart[$keys]["quantity"] = $quantity;
                        $item_data = json_encode($cart);
                        return response()->json(['status' => '"' . $cart[$keys]["pro_title"] . '" Already Added to Cart']);
                    }
                }
            } else {

                $product = Product::find($pro_id);
                $prod_name = $product->title;
                $prod_image = $product->image_url1;
                $prod_price = $product->sale_price;

                if ($product) {
                    $carts = new Cart([
                        'user_id' => Auth::user()->id,
                        'pro_id' => $pro_id,
                        'quantity' => $quantity,
                        'mode' => 'cart',
                        'created_at' => date('Y-m-d'),
                        'updated_at' => date('Y-m-d'),
                    ]);
                    $carts->save();
                    return response()->json(['status' => '"' . $prod_name . '" Added to Cart']);
                }
            }
        } else {
            $pro_id = $request->id;
            $quantity = $request->quantity;
            // dd($pro_id);
            if (Cookie::get('shopping_cart')) {
                $cookie_data = stripslashes(Cookie::get('shopping_cart'));
                $cart_data = json_decode($cookie_data, true);
                // dd($cart_data);
            } else {
                $cart_data = array();
            }

            $item_id_list = array_column($cart_data, 'item_id');
            $prod_id_is_there = $pro_id;
            // dd($prod_id_is_there);

            if (in_array($prod_id_is_there, $item_id_list)) {
                foreach ($cart_data as $keys => $values) {
                    if ($cart_data[$keys]["item_id"] == $pro_id) {
                        $cart_data[$keys]["item_quantity"] = $request->input('quantity');
                        $item_data = json_encode($cart_data);
                        $minutes = 60;
                        Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                        return response()->json(['status' => '"' . $cart_data[$keys]["item_name"] . '" Already Added to Cart']);
                    }
                }
            } else {

                $product = Product::find($pro_id);
                // dd($products);
                $prod_name = $product->title;
                $prod_image = $product->image_url1;
                $prod_price = $product->sale_price;

                if ($product) { //dd("here");
                    $item_array = array(
                        'item_id' => $pro_id,
                        'item_name' => $prod_name,
                        'item_quantity' => $quantity,
                        'item_price' => $prod_price,
                        'item_image' => $prod_image
                    );
                    $cart_data[] = $item_array;

                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['status' => '"' . $prod_name . '" Added to Cart']);
                }
            }
        }
    }

    public function cartloadbyajax()
    {
        if (Auth::check()) {
            $cart_data = Cart::where('user_id', Auth::user()->id)->get();
            $totalcart = count($cart_data);
            echo json_encode(array('totalcart' => $totalcart));
            die;
            return;
        } else {
            if (Cookie::get('shopping_cart')) {
                $cookie_data = stripslashes(Cookie::get('shopping_cart'));
                $cart_data = json_decode($cookie_data, true);
                $totalcart = count($cart_data);

                echo json_encode(array('totalcart' => $totalcart));
                die;
                return;
            } else {
                $totalcart = "0";
                echo json_encode(array('totalcart' => $totalcart));
                die;
                return;
            }
        }
    }

    public function update_cart(Request $request)
    {
        if (Auth::check()) {
            $pro_id = $request->id;
            $quantity = $request->quantity;

            Cart::where('pro_id', $pro_id)->update(['quantity' => $quantity]);
            $cart = Cart::join('products', 'products.id', '=', 'carts.pro_id')->where('user_id', Auth::user()->id)->select('carts.*', 'products.title as pro_title')->get()->toArray();
            $item_id_list = array_column($cart, 'pro_id');
            $prod_id_is_there = $pro_id;

            if (in_array($prod_id_is_there, $item_id_list)) {
                foreach ($cart as $keys => $values) {
                    if ($cart[$keys]["pro_id"] == $pro_id) {
                        $cart[$keys]["quantity"] = $quantity;
                        $item_data = json_encode($cart);
                        return response()->json(['status' => '"' . $cart[$keys]["pro_title"] . '" Quantity Updated']);
                    }
                }
            }
        } else {
            $pro_id = $request->id;
            $quantity = $request->quantity;

            if (Cookie::get('shopping_cart')) {
                $cookie_data = stripslashes(Cookie::get('shopping_cart'));
                $cart_data = json_decode($cookie_data, true);
                $item_id_list = array_column($cart_data, 'item_id');
                $prod_id_is_there = $pro_id;

                if (in_array($prod_id_is_there, $item_id_list)) {
                    foreach ($cart_data as $keys => $values) {
                        if ($cart_data[$keys]["item_id"] == $pro_id) {
                            $cart_data[$keys]["item_quantity"] = $quantity;
                            $item_data = json_encode($cart_data);
                            $minutes = 60;
                            Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                            return response()->json(['status' => '"' . $cart_data[$keys]["item_name"] . '" Quantity Updated']);
                        }
                    }
                }
            }
        }
    }


    public function delete_cart(Request $request)
    {
        if (Auth::check()) {
            $carts = Cart::findOrFail($request->id);
            $carts->delete();
            return response()->json(['status' => 'Item Removed from Cart']);
        } else {
            $pro_id = $request->id;

            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);

            $item_id_list = array_column($cart_data, 'item_id');
            $prod_id_is_there = $pro_id;

            if (in_array($prod_id_is_there, $item_id_list)) {
                foreach ($cart_data as $keys => $values) {
                    if ($cart_data[$keys]["item_id"] == $pro_id) {
                        unset($cart_data[$keys]);
                        $item_data = json_encode($cart_data);
                        $minutes = 60;
                        Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                        return response()->json(['status' => 'Item Removed from Cart']);
                    }
                }
            }
        }
    }


    public function clear_cart(Request $request)
    {
        if (Auth::check()) {
            $ids = explode(",", $request->id);
            Cart::whereIn('user_id', $ids)->delete();
        } else {
            Cookie::queue(Cookie::forget('shopping_cart'));
        }
        return response()->json(['status' => 'Your Cart is Cleared']);
    }


    public function wishlist()
    {
        return view('wishlist');
    }
}
