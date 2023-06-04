<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $primarykey="id";
    protected $table = 'brands';
    protected $fillable=['id','title','slug','image_url','status','is_deleted','created_at','updated_at']; 
    public $timestamps=true; 
    use HasFactory;
    
    
    public function relProduct(){
        return $this->hasMany('App\Models\Product', 'brand_id', 'id')->where('status','show');
    }
}
