<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $primarykey="id";
    protected $table = 'blogs';
    protected $fillable=['id','title','description','author_name','image_url','status','created_at','updated_at']; 
    public $timestamps=true; 

    use HasFactory;
}
