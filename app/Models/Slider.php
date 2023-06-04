<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $primarykey="id";
    protected $table = 'sliders';
    protected $fillable=['id','title','sub_title','short_description','image_url','status','created_at','updated_at']; 
    public $timestamps=true; 

    use HasFactory;
}
