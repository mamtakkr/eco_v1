<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'contact',
        'user_type',
        'password',
        'approved_status',
        'is_deleted',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */

     
    
    public function relUserCart(){
        return $this->hasMany('App\Models\Cart', 'user_id', 'id');
    }

    public function relUserShippingAddress(){
        return $this->hasMany('App\Models\ShippingAddress', 'user_id', 'id');
    }
    
    public function relOrder(){
        return $this->hasMany('App\Models\Order', 'user_id', 'id');
    }
    
    public function relProduct(){
        return $this->hasMany('App\Models\Product', 'vendor_id', 'id');
    }
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
