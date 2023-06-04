<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    protected $primarykey="id";
    protected $table = 'products';
    protected $fillable=['id','title','slug','short_description','description','stock','cat_id','brand_id','child_cat_id',
    'price','sale_price','quantity','code','discount','size','conditions','vendor_id','status','image_url1','image_url2',
    'image_url3','image_url4','is_deleted','created_at','updated_at']; 
    public $timestamps=true; 

    use HasFactory;

    
    public function relCategory(){
        return $this->belongsTo(Category::class,'cat_id', 'id')->where('status','active');
    }
    public function relBrand(){
        return $this->belongsTo(Brand::class,'brand_id', 'id');
    }
    
    public function relCart(){
        return $this->hasMany('App\Models\Cart', 'pro_id', 'id');
    }

    public function relOrderItem(){
        return $this->hasMany('App\Models\OrderItem', 'pro_id', 'id');
    }
    
    public function relChildCategory(){
        return $this->belongsTo(Category::class,'child_cat_id', 'id')->where('status','active');
    }
    
    public function relDealOfDay(){
        return $this->hasMany('App\Models\DealOfDay', 'pro_id', 'id');
    }
    
    public function relFeaturedProduct(){
        return $this->hasMany('App\Models\FeaturedProduct', 'pro_id', 'id');
    }
    
    public function relPopularProduct(){
        return $this->hasMany('App\Models\PopularProduct', 'pro_id', 'id');
    }
}
