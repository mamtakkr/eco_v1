<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use PDF;
use phpDocumentor\Reflection\Types\Null_;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function orders_show()
    {
        $orders=Order::where('is_deleted',0)->get();
        // dd($orders);
        return view('admin.orders.orders_show', compact('orders'));
    }
    
    public function order_view($id)
    {
        $order=Order::find($id);
        // dd($order);
        return view('admin.orders.order_view', compact('order'));
    }
    
    public function generate_invoice($id)
    {
        $order=Order::find($id);
        // return view('admin.orders.generate_invoice');
        
        $data = [
            'order' => $order
        ];
        $pdf = PDF::loadView('admin.orders.generate_invoice', $data);
        
        return $pdf->download('ecommerce_invoice.pdf');
    }
    
    public function order_edit($id)
    {
        $order=Order::find($id);
        // dd($order);
        return view('admin.orders.order_edit', compact('order'));
    }
    
    public function order_update_tracking_status(Request $request)
    {
        $orders = Order::find($request->get('id'));
        if($orders->order_status != "canceled"){
            $orders->tracking_msg = $request->get('tracking_msg');
            $orders->update();
            return redirect()->back()->with('success', 'Tracking Status Update');
        }else{
            return redirect()->back()->with('success', 'Order Is Canceled');
        }
    }
    
    public function order_cancel_order(Request $request)
    {
        $orders = Order::find($request->get('id'));
        if($orders->tracking_msg != null){
            $orders->cancel_reason = $request->get('cancel_reason');
            $orders->tracking_msg = "Canceled when ".$orders->tracking_msg;
            $orders->order_status = "Canceled";
            $orders->update();
            return redirect()->back()->with('success', 'Order Canceled');
        }else{
            return redirect()->back()->with('success', 'Update Your Tracking Status');
        }
    }
    
    public function order_complete_order(Request $request)
    {
        $orders = Order::find($request->get('id'));
        if($orders->tracking_msg != null){
            if($orders->order_status != "Canceled"){
                $orders->tracking_msg = "Completed when ".$orders->tracking_msg;
                if($orders->payment_status == "pending"){
                    $orders->payment_status = $request->get("cash_received") == TRUE ? "Approved" : "pending";
                }
                $orders->order_status = "Completed";
                $orders->update();
                return redirect()->back()->with('success', 'Order Completed');
            }else{
                return redirect()->back()->with('success', 'Your Order Is Canceled');
            }
        }else{
            return redirect()->back()->with('success', 'Update Your Tracking Status');
        }
    }


}
