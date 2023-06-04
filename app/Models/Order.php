<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primarykey="id";
    protected $table = 'orders';
    protected $fillable=['id','user_id','address_id','tracking_no','tracking_msg','payment_mode','payment_id','total_amount','payment_status',
    'payment_details','online_payment_type','order_status','cancel_reason','notify','is_deleted','created_at','updated_at'];
    public $timestamps=true; 

    use HasFactory;
    
    public function relUser(){
        return $this->belongsTo(User::class,'user_id', 'id');
    }
    
    public function relOrderItem(){
        return $this->hasMany('App\Models\OrderItem', 'order_id', 'id');
    }
    
    public function relShippingAddress(){
        return $this->belongsTo(ShippingAddress::class,'address_id', 'id');
    }
}
