<?php
namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Coupon;
use App\Models\DealOfDay;
use App\Models\FeaturedProduct;
use App\Models\PopularProduct;
use App\Models\Product;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class IndexController extends Controller
{
    public function index(){
        $cat_id = get_setting('cat_id');
        $main_category = get_categories()->where('id',$cat_id)->first()->toArray();
        // dd($main_category['rel_product']);
        $categories = get_categories()->toArray();
        // dd($categories[0]['rel_product']);
        $banners = Banner::where('status', 'active')->inRandomOrder()->limit(3)->get();
        $blogs = Blog::where('status', 'show')->orderBy('updated_at', 'desc')->get();
        $sliders = Slider::where('status', 'show')->orderBy('updated_at', 'desc')->get();
        $result = Product::where(['is_deleted'=>0, 'status'=>'show'])->where('discount','>','60')->inRandomOrder()->limit(9)->get();
        $special_offer_sets=$result->chunk(3);
        $result1 = DealOfDay::where(['is_deleted'=>0, 'status'=>'active'])->inRandomOrder()->limit(9)->get();
        $deal_of_daysets=$result1->chunk(3);
        $featured_products = FeaturedProduct::where(['is_deleted'=>0, 'status'=>'active'])->inRandomOrder()->get();
        return view('index', compact('banners', 'blogs','sliders','special_offer_sets','deal_of_daysets','categories','featured_products','main_category'));
    }


    public function shop(){
        $products = Product::query();
        if(!empty($_GET['category'])){
            $slugs = explode(',',$_GET['category']);
            $cat_ids = Category::select('id')->whereIn('slug', $slugs)->pluck('id')->toArray();
            $products = $products->whereIn('cat_id',$cat_ids);
        }

        //brand filter
        if(!empty($_GET['brand'])){
            $slugs = explode(',',$_GET['brand']);
            $brand_ids = Brand::select('id')->whereIn('slug', $slugs)->pluck('id')->toArray();
            $products = $products->whereIn('brand_id',$brand_ids);
        }

        //Size filter
        if(!empty($_GET['size'])){
            $products = $products->where('size',$_GET['size']);
        }
        
        if(!empty($_GET['sortBy'])){
        // $sort = $_GET['sortBy'];
            if($_GET['sortBy']=='priceAsc'){
                $products = $products->where(['status'=>'show'])->orderBy('sale_price','ASC');
            }
            if($_GET['sortBy']=='priceDesc'){
                $products = $products->where(['status'=>'show'])->orderBy('sale_price','DESC');
            }
            if($_GET['sortBy']=='discAsc'){
                $products = $products->where(['status'=>'show'])->orderBy('price','ASC');
            }
            if($_GET['sortBy']=='discDesc'){
                $products = $products->where(['status'=>'show'])->orderBy('price','DESC');
            }
            if($_GET['sortBy']=='titleAsc'){
                $products = $products->where(['status'=>'show'])->orderBy('title','ASC');
            }
            if($_GET['sortBy']=='titleDesc'){
                $products = $products->where(['status'=>'show'])->orderBy('title','DESC');
            }
        }
        
        if(!empty($_GET['price'])){
            $price = explode('-',$_GET['price']);
            $price[0]=floor($price[0]);
            $price[1]=ceil($price[1]);
            $products=$products->whereBetween('sale_price', $price)->where(['is_deleted'=>0, 'status'=>'show'])->get();
        }

        else{
            $products = $products->where(['is_deleted'=>0, 'status'=>'show'])->get()->toArray();
        }
        return view('shop', compact('products'));
    }


    public function shop_filter(Request $request){
        $data = $request->all();
        //Category Filter
        $catUrl = "";
        if(!empty($data['category'])){
            foreach($data['category'] as $category){
                if(empty($catUrl)){
                    $catUrl .='&category='.$category;
                }else{
                    $catUrl .=','.$category;
                }
            }
        }
        //Sort Filter
        $sortByUrl = "";
        if(!empty($data['sortBy'])){
            $sortByUrl .='&sortBy='.$data['sortBy'];
        }
        //Price Filter
        $price_range_url = "";
        if(!empty($data['price_range'])){
            $price_range_url .='&price='.$data['price_range'];
        }
        //Brand Filter
        $brandUrl = "";
        if(!empty($data['brand'])){
            foreach($data['brand'] as $brand){
                if(empty($brandUrl)){
                    $brandUrl .='&brand='.$brand;
                }else{
                    $brandUrl .=','.$brand;
                }
            }
        }
        //Size Filter
        $sizeUrl = "";
        if(!empty($data['size'])){
            $sizeUrl .='&size='.$data['size'];
        }
        return redirect()->route('shop', $catUrl.$sortByUrl.$price_range_url.$brandUrl.$sizeUrl);
    }

    public function product_detail($slug){
        $product_detail = Product::where('slug',$slug)->first();
        // dd($product_detail);
        $result = PopularProduct::where(['is_deleted'=>0, 'status'=>'active'])->inRandomOrder()->limit(9)->get();
        $popular_productsets=$result->chunk(3);
        $related_products = Product::where(['cat_id'=>$product_detail->cat_id,'status'=>'show'])->inRandomOrder()->limit(9)->get();
        // dd($related_products);
        return view('product_detail', compact('product_detail', 'popular_productsets', 'related_products'));
    }

    public function product_cat(Request $request, $slug){
        // $categories = Category::with('relProduct','relProductChild')->where('slug',$slug)->first();
        $categories = Category::with('relProduct')->where('slug',$slug)->first();
        $sort = "";
        if($request->sort != null){
            $sort = $request->sort;
        }
        if($categories == null){
            return view('errors.404');
        }
        else
        {
            if($sort=='priceAsc'){
                // $products = Product::where(['status'=>'show', 'cat_id'=>$categories->id])->orWhere('child_cat_id',$categories->id)->orderBy('sale_price','ASC')->paginate(8);
                $products = Product::where(['status'=>'show', 'cat_id'=>$categories->id])->orderBy('sale_price','ASC')->paginate(8);
            }
            elseif($sort=='priceDesc'){
                // $products = Product::where(['status'=>'show', 'cat_id'=>$categories->id])->orWhere('child_cat_id',$categories->id)->orderBy('sale_price','DESC')->paginate(8);
                $products = Product::where(['status'=>'show', 'cat_id'=>$categories->id])->orderBy('sale_price','DESC')->paginate(8);
            }
            elseif($sort=='discAsc'){
                // $products = Product::where(['status'=>'show', 'cat_id'=>$categories->id])->orWhere('child_cat_id',$categories->id)->orderBy('price','ASC')->paginate(8);
                $products = Product::where(['status'=>'show', 'cat_id'=>$categories->id])->orderBy('price','ASC')->paginate(8);
            }
            elseif($sort=='discDesc'){
                // $products = Product::where(['status'=>'show', 'cat_id'=>$categories->id])->orWhere('child_cat_id',$categories->id)->orderBy('price','DESC')->paginate(8);
                $products = Product::where(['status'=>'show', 'cat_id'=>$categories->id])->orderBy('price','DESC')->paginate(8);
            }
            elseif($sort=='titleAsc'){
                // $products = Product::where(['status'=>'show', 'cat_id'=>$categories->id])->orWhere('child_cat_id',$categories->id)->orderBy('title','ASC')->paginate(8);
                $products = Product::where(['status'=>'show', 'cat_id'=>$categories->id])->orderBy('title','ASC')->paginate(8);
            }
            elseif($sort=='titleDesc'){
                // $products = Product::where(['status'=>'show', 'cat_id'=>$categories->id])->orWhere('child_cat_id',$categories->id)->orderBy('title','DESC')->paginate(8);
                $products = Product::where(['status'=>'show', 'cat_id'=>$categories->id])->orderBy('title','DESC')->paginate(8);
            }
            else{
                // $products = Product::where(['status'=>'show', 'cat_id'=>$categories->id])->orWhere('child_cat_id',$categories->id)->paginate(8);
                $products = Product::where(['status'=>'show', 'cat_id'=>$categories->id])->paginate(8);
            }
        }
        $route = 'product-cat';
        return view('product_categories', compact('categories','route','products'));
    }


    public function autoSearch(Request $request){
        $query=$request->get('term','');
        $products=Product::where('title','LIKE','%'.$query.'%')->where('status','show')->get();

        $data=array();
        foreach($products as $product){
            $data[]=array('value'=>$product->title, 'id'=>$product->id);
        }
        if(count($data)){
            return $data;
        }else{
            return ['value'=>'No Result Found', 'id'=>''];
        }
    }


    public function search(Request $request){
        $searchingdata=$request->input('search_product');
        $products = Product::where('title','LIKE','%'.$searchingdata.'%')->where(['is_deleted'=>0, 'status'=>'show'])->get();
        return view('shop', compact('products'));
    }
    



}
