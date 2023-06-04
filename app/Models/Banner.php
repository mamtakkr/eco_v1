<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $primarykey="id";
    protected $table = 'banners';
    protected $fillable=['id','title','sub_title','link_title','link_url','image_url','status','created_at','updated_at']; 
    public $timestamps=true; 

    use HasFactory;
}
