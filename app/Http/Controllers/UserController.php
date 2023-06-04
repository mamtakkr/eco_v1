<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function user_account()
    {
        return view('user.my_account');
    }

    public function user_orders_show()
    {
        $orders = Order::where('user_id', Auth::user()->id)->get();
        // dd($orders);
        return view('user.orders_show', compact('orders'));
    }

    public function user_order_view($id)
    {
        $order = Order::find($id);
        // dd($order);
        return view('user.order_view', compact('order'));
    }

    public function user_order_edit($id)
    {
        $order = Order::find($id);
        // dd($order);
        return view('user.order_edit', compact('order'));
    }

    public function user_order_cancel_order(Request $request)
    {
        $orders = Order::find($request->get('id'));
        // if($orders->tracking_msg != null){
        $orders->cancel_reason = $request->get('cancel_reason');
        $orders->tracking_msg = "Canceled when " . $orders->tracking_msg;
        $orders->order_status = "Canceled";
        $orders->update();
        return redirect()->back()->with('success', 'Order Canceled');
        // }
        // else{
        //     return redirect()->back()->with('success', 'Update Your Tracking Status');
        // }
    }



    public function execelupdate()
    {

        $inputFileType = 'Xlsx';
        $inputFileName = public_path('products.xlsx');
        $reader = IOFactory::createReader($inputFileType);
        /* Load a specific sheet by name 
        $sheetname = 'Airline';
        $reader->setLoadSheetsOnly($sheetname);*/
        $spreadsheet = $reader->load($inputFileName);
        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, false);
        // dd($sheetData);
        foreach ($sheetData as $row) {
            if ($row[0] == 'code') {
                continue;
            }
            
        $slug = Str::slug($row[3]);
        $slug_count = Category::where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = time() . '-' . $slug;
        }else{
            $slug = time() . '--' . $slug;
        }
        $request['slug'] = $slug;

        // $sale_price = ($request->price-(($request->price*$request->discount)/100));

        $products = new Product([
            'title' => $row[3],
            'slug' => $request['slug'],
            // 'short_description' => $request->get('short_description'),
            // 'description' => $request->get('description'),
             'cat_id' => $row[1],
            // 'brand_id' => $request->get('brand_id'),
            // 'child_cat_id' => $request->get('child_cat_id'),
            // 'vendor_id' => $request->get('vendor_id'),
            'price'=>$row[4],
            'sale_price' => $row[4],
            // 'quantity' => $request->get('quantity'),
            'code' => $row[2],
            // 'discount' => $request->get('discount'),
            // 'size' => $request->get('size'),
            // 'conditions' => $request->get('conditions'),
            'image_url1' => $row[2].'.jpg',
            'image_url2' => $row[2].'.jpg',
            'image_url3' => $row[2].'.jpg',
            'image_url4' => $row[2].'.jpg',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
        $products->save();
        }
    }
}
