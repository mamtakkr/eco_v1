<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $primarykey="id";
    protected $table = 'carts';
    protected $fillable=['id','user_id','pro_id','quantity','mode','is_deleted','created_at','updated_at']; 
    public $timestamps=true; 

    use HasFactory;
    
    public function relProduct(){
        return $this->belongsTo(Product::class,'pro_id', 'id');
    }
    public function relUser(){
        return $this->belongsTo(User::class,'user_id', 'id');
    }
}
