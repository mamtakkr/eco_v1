<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $primarykey="id";
    protected $table = 'order_items';
    protected $fillable=['id','order_id','pro_id','price','quantity','amount','tax_amount'];
    public $timestamps=true; 

    use HasFactory;
    
    public function relOrder(){
        return $this->belongsTo(Order::class,'order_id', 'id');
    }

    public function relProduct(){
        return $this->belongsTo(Product::class,'pro_id', 'id');
    }
}
