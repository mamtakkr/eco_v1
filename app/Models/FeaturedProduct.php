<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedProduct extends Model
{
    protected $primarykey="id";
    protected $table = 'featured_products';
    protected $fillable=['id','pro_id','status','is_deleted','created_at','updated_at']; 
    public $timestamps=true; 

    use HasFactory;
    
    public function relProduct(){
        return $this->belongsTo(Product::class,'pro_id', 'id');
    }
}
