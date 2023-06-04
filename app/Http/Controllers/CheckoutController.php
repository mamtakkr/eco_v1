<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\ShippingAddress;
use App\Models\State;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $states = State::where('country_id',101)->get();
        $shipping_address = "";
        $carts = "";
        if(Auth::check()){
            $shipping_address = ShippingAddress::where('user_id', Auth::user()->id)->get();
        }
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id)->get();
        }
        return view('checkout',compact('states','shipping_address','carts'));
    }

    public function shipping_address_store(Request $request)
    {
        $this->validate($request, [
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required',
        ]);

        $shipping_address = new ShippingAddress([
            'user_id' => Auth::user()->id,
            'name' => $request->get('name'),
            'contact' => $request->get('contact'),
            'pincode' => $request->get('pincode'),
            'locality' => $request->get('locality'),
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'state' => $request->get('state'),
            'landmark' => $request->get('landmark'),
            'contact2' => $request->get('contact2'),
            'address_type' => $request->get('address_type'),
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
        $shipping_address->save();
        return redirect()->route('checkout');
    }

    public function shipping_address_update(Request $request)
    {dd('here');
        // $category=ShippingAddress::findOrFail($request->get('id'));
        // $category->parent_id=$request->get('parent_id');
        // $category->title=$request->get('title');
        // $category->description=$request->get('description');
        // $category->updated_at=date('Y-m-d');
        // $category->save();

        // $shipping_address = new ([
        //     'user_id' => Auth::user()->id,
        //     'name' => $request->get('name'),
        //     'contact' => $request->get('contact'),
        //     'pincode' => $request->get('pincode'),
        //     'locality' => $request->get('locality'),
        //     'address' => $request->get('address'),
        //     'city' => $request->get('city'),
        //     'state' => $request->get('state'),
        //     'landmark' => $request->get('landmark'),
        //     'contact2' => $request->get('contact2'),
        //     'address_type' => $request->get('address_type'),
        //     'created_at' => date('Y-m-d'),
        //     'updated_at' => date('Y-m-d'),
        // ]);
        // $shipping_address->save();
        return redirect()->route('checkout');
    }

    public function apply_coupon_code(Request $request)
    {
        $coupon_code = $request->coupon_code;

        if(Coupon::where('coupon_code', $coupon_code)->exists()){
            $coupon = Coupon::where('coupon_code',$coupon_code)->first();

            if($coupon->start_datetime <= Carbon::today()->format('Y-m-d H:i:s') && Carbon::today()->format('Y-m-d H:i:s') <= $coupon->end_datetime){
                $carts = Cart::where('user_id', Auth::user()->id)->get();
                $total = 0;
                foreach ($carts as $row) {
                    $product = Product::where('id', $row->pro_id)->first();
                    $total=$total+($row->quantity*$product->sale_price);
                }

                if($coupon->coupon_type == 'percent'){
                    $discount_price = ($total/100)*$coupon->coupon_price;
                }
                elseif($coupon->coupon_type == 'fixed'){
                    $discount_price = $coupon->coupon_price;
                }
                $grand_total = $total-$discount_price;
                
                return response()->json([
                    'discount_price' =>$discount_price,
                    'grand_total_price' => $grand_total,
                ]);

            }else{
                return response()->json([
                    'status' => 'Coupon Code has been Expired.',
                    'error_status' => 'error'
                ]);
            }
        }else{
            return response()->json([
                'status' => 'Coupon Code does  not exists.',
                'error_status' => 'error'
            ]);
        }
    }


}
