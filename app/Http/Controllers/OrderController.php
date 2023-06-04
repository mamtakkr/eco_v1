<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private function insert_orderitem($order_id, $net_amount=0){
        
        $carts = Cart::where(['user_id' => Auth::user()->id])->get();
        if (!empty($carts)) {
            foreach ($carts as $row) {
                $product = Product::where('id', $row->pro_id)->first();
                $net_amount=$net_amount+($row->quantity*$product->sale_price);
                $order_item = new OrderItem([
                    'order_id' => $order_id,
                    'pro_id' => $row->pro_id,
                    'price' => $product->sale_price,
                    'quantity' => $row->quantity,
                    'amount' => $product->sale_price*$row->quantity,
                    'tax_amount' => $product->tax_amount,
                    'created_at' => date('Y-m-d'),
                    'updated_at' => date('Y-m-d'),
                ]);
                $order_item->save();
            }
            Order::where('id',$order_id)->update(['total_amount'=>$net_amount]);
            Cart::where('user_id', Auth::user()->id)->delete();
        }
    }

    public function place_order(Request $request){
        if(isset($_POST['place_order_btn'])){
            $this->validate($request, [
                'address_id' => 'required',
            ]);
            // dd($request->input());
            $tracking_no = rand(111111, 999999);
            $net_amount=0; 
            $place_order = new Order([
                'user_id' => Auth::user()->id,
                'address_id' => $request->get('address_id'),
                'tracking_no' => $tracking_no,
                'payment_mode' => $request->get('payment_mode'),
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ]);
            $status=$place_order->save();
            $order_id = $place_order->id;
            
            $this->insert_orderitem($order_id, $net_amount);
            if($status){
                session()->put('order_id', $order_id);
            }
            //dd($place_order['payment_mode']);
            if($place_order['payment_mode']=='paypal'){
                $paypal=new PaypalController;
                return $paypal->getCheckout();
            }
            return redirect()->route('thank-you')->with('success','Order Placed successfully');
        }

        // if(isset($_POST['place_order_razorpay'])){
        //     // dd($request->input());
        //     $tracking_no = rand(111111, 999999);
        //     $net_amount=0; 
        //     $place_order = new Order([
        //         'user_id' => Auth::user()->id,
        //         'address_id' => $request->address_id,
        //         'tracking_no' => $tracking_no,
        //         'payment_id' => $request->razorpay_payment_id,
        //         'payment_mode' => $request->payment_mode,
        //         'online_payment_type' => 'Razorpay',
        //         'payment_status' => "approved",
        //         'created_at' => date('Y-m-d'),
        //         'updated_at' => date('Y-m-d'),
        //     ]);
        //     $place_order->save();
        //     $order_id = $place_order->id;
        //     $this->insert_orderitem($order_id, $net_amount);

        //     return redirect()->route('thank-you')->with('success','Order Placed successfully');
        // }

    }

    // public function razorpay_payment(Request $request){
    //     // dd($request->id);
    //     $carts = Cart::where('user_id', Auth::user()->id)->get();
    //     $total = 0;
    //     foreach ($carts as $row) {
    //         $product = Product::where('id', $row->pro_id)->first();
    //         $total=$total+($row->quantity*$product->sale_price);
    //     }
    //     return response()->json([
    //         'address_id'=>$request->id,
    //         'name'=>Auth::user()->name,
    //         'contact'=>Auth::user()->contact,
    //         'email'=>Auth::user()->email,
    //         'total_price'=>$total,
    //         'payment_mode'=>$request->payment_mode,
    //     ]);
    // }

    
    public function checkout_done($order_id,$payment){
        $order=Order::findOrFail($order_id);
        $order->payment_status='approved';
        $order->payment_details=$payment;
        $status=$order->save();
        if($status){
            return redirect()->route('thank-you')->with('success','Order Placed successfully');
        }
    }


    public function thank_you(){
        return view('thank_you');
    }

}
