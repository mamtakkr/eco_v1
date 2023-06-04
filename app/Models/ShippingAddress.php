<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    protected $primarykey="id";
    protected $table = 'shipping_addresses';
    protected $fillable=['id','user_id','name','contact','pincode','locality','address','city','state','landmark','contact2','address_type',
        'is_deleted','created_at','updated_at']; 
    
    public $timestamps=true; 

    use HasFactory;
    
    public function relUser(){
        return $this->belongsTo(User::class,'user_id', 'id');
    }
    
    
    public function relOrder(){
        return $this->hasMany('App\Models\Order', 'address_id', 'id');
    }
}
