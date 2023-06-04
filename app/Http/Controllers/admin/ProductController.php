<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function products_show()
    {
        $products=Product::orderBy('id','DESC')->where('is_deleted',0)->get();
        // dd($products);
        return view('admin.products.products_show', compact('products'));
    }

    public function product_create()
    {
        $categories=Category::where(['is_deleted'=>0, 'is_parent'=> 1])->get();
        $brands=Brand::where('is_deleted',0)->get();
        $vendors=User::where(['is_deleted'=>0, 'user_type'=>'vendor'])->get();
        // dd($categories);
        return view('admin.products.product_create', compact('categories','brands','vendors'));
    }

    public function product_create_action(Request $request)
    {
        $this->validate($request, [
            'cat_id' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $new_name1 = "";
        $image1=$request->file('image_url1');
        if($image1!=''){
            $new_name1=preg_replace('/[^A-Za-z0-9\-]/', '-', $request->get('title')) . "---" . rand() . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('images/products/'),$new_name1);
        }
        $new_name2 = "";
        $image2=$request->file('image_url2');
        if($image2!=''){
            $new_name2=preg_replace('/[^A-Za-z0-9\-]/', '-', $request->get('title')) . "---" . rand() . '.' . $image2->getClientOriginalExtension();
            $image2->move(public_path('images/products/'),$new_name2);
        }
        $new_name3 = "";
        $image3=$request->file('image_url3');
        if($image3!=''){
            $new_name3=preg_replace('/[^A-Za-z0-9\-]/', '-', $request->get('title')) . "---" . rand() . '.' . $image3->getClientOriginalExtension();
            $image3->move(public_path('images/products/'),$new_name3);
        }
        $new_name4 = "";
        $image4=$request->file('image_url4');
        if($image4!=''){
            $new_name4=preg_replace('/[^A-Za-z0-9\-]/', '-', $request->get('title')) . "---" . rand() . '.' . $image4->getClientOriginalExtension();
            $image4->move(public_path('images/products/'),$new_name4);
        }
        
        $slug = Str::slug($request->input('title'));
        $slug_count = Category::where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = time() . '-' . $slug;
        }
        $request['slug'] = $slug;

        $sale_price = ($request->price-(($request->price*$request->discount)/100));

        $products = new Product([
            'title' => $request->get('title'),
            'slug' => $request['slug'],
            'short_description' => $request->get('short_description'),
            'description' => $request->get('description'),
            'cat_id' => $request->get('cat_id'),
            'brand_id' => $request->get('brand_id'),
            'child_cat_id' => $request->get('child_cat_id'),
            'vendor_id' => $request->get('vendor_id'),
            'price' => $request->get('price'),
            'sale_price' => $sale_price,
            'quantity' => $request->get('quantity'),
            'code' => $request->get('code'),
            'discount' => $request->get('discount'),
            'size' => $request->get('size'),
            'conditions' => $request->get('conditions'),
            'image_url1' => $new_name1,
            'image_url2' => $new_name2,
            'image_url3' => $new_name3,
            'image_url4' => $new_name4,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
        $products->save();
        return redirect()->route('products-show')->with('success','Data Added Successfully');
    }

    public function product_edit ($id)
    {
        $product=Product::find($id);
        $categories=Category::where(['is_deleted'=>0, 'is_parent'=> 1])->get();
        $brands=Brand::where('is_deleted',0)->get();
        $vendors=User::where(['is_deleted'=>0, 'user_type'=>'vendor'])->get();
        return view('admin.products.product_edit', compact('product', 'categories','brands','vendors'));
    }

    public function product_update_action(Request $request)
    {
        $image_name1=$request->old_image_url1;
        $image1=$request->file('new_image_url1');
	    if($image1!=''){
            $image_name1=preg_replace('/[^A-Za-z0-9\-]/', '-', $request->get('title')) . "---" . rand() . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('images/products/'),$image_name1);
        }
        $image_name2=$request->old_image_url2;
        $image2=$request->file('new_image_url2');
	    if($image2!=''){
            $image_name2=preg_replace('/[^A-Za-z0-9\-]/', '-', $request->get('title')) . "---" . rand() . '.' . $image2->getClientOriginalExtension();
            $image2->move(public_path('images/products/'),$image_name2);
        }
        $image_name3=$request->old_image_url3;
        $image3=$request->file('new_image_url3');
	    if($image3!=''){
            $image_name3=preg_replace('/[^A-Za-z0-9\-]/', '-', $request->get('title')) . "---" . rand() . '.' . $image3->getClientOriginalExtension();
            $image3->move(public_path('images/products/'),$image_name3);
        }
        $image_name4=$request->old_image_url4;
        $image4=$request->file('new_image_url4');
	    if($image4!=''){
            $image_name4=preg_replace('/[^A-Za-z0-9\-]/', '-', $request->get('title')) . "---" . rand() . '.' . $image4->getClientOriginalExtension();
            $image4->move(public_path('images/products/'),$image_name4);
        }      
        else{
            $this->validate($request,[
                'cat_id' => 'required',
                'title' => 'required',
                'description' => 'required',
		]);
        }         

        $slug = Str::slug($request->input('title'));
        $slug_count = Category::where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = time() . '-' . $slug;
        }
        $request['slug'] = $slug;

        $sale_price = ($request->price-(($request->price*$request->discount)/100));

        $product=Product::findOrFail($request->get('id'));
        $product->title=$request->get('title');
        $product->slug=$request['slug'];
        $product->description=$request->get('description');
        $product->short_description=$request->get('short_description');
        $product->cat_id=$request->get('cat_id');
        $product->brand_id=$request->get('brand_id');
        $product->child_cat_id=$request->get('child_cat_id');
        $product->vendor_id=$request->get('vendor_id');
        $product->price=$request->get('price');
        $product->sale_price=$sale_price;
        $product->quantity=$request->get('quantity');
        $product->code=$request->get('code');
        $product->discount=$request->get('discount');
        $product->size=$request->get('size');
        $product->conditions=$request->get('conditions');

        if($request->file('new_image_url1')){
            $file1=public_path('/images/products/'."/".$request->old_image_url1);
                if(file_exists($file1)){
                        unlink($file1);
                }
            $product->image_url1=$image_name1;
        }
        if($request->file('new_image_url2')){
            $file2=public_path('/images/products/'."/".$request->old_image_url2);
                if(file_exists($file2)){
                        unlink($file2);
                }
            $product->image_url2=$image_name2;
        }
        if($request->file('new_image_url3')){
            $file3=public_path('/images/products/'."/".$request->old_image_url3);
                if(file_exists($file3)){
                        unlink($file3);
                }
            $product->image_url3=$image_name3;
        }
        if($request->file('new_image_url4')){
            $file4=public_path('/images/products/'."/".$request->old_image_url4);
                if(file_exists($file4)){
                        unlink($file4);
                }
            $product->image_url4=$image_name4;
        }

        $product->updated_at=date('Y-m-d');
        $product->save();
        return redirect()->route('products-show')->with('success','Data Updated Successfully');
    }


    public function product_delete($id){
		$product=Product::where('id', $id)->first();
		$product=Product::where('id', $id)->update(['is_deleted' => 1]);
        return redirect()->route('products-show')->with('error','Data Deleted');
    }

    public function product_status_update(Request $request){
        if($request->mode == 'true'){
            Product::where('id',$request->id)->update(['status'=>'show']);
        }else{
            Product::where('id',$request->id)->update(['status'=>'hide']);
        }
        return response()->json(['msg'=>'Successfully Updated Status', 'status'=>true]);
    }

}
