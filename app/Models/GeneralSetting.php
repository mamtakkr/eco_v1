<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    protected $primarykey="id";
    protected $table = 'general_settings';
    protected $fillable=['id','title','meta_description','meta_keywords','logo','favicon','address','email','phone','fax','footer',
                        'facebook_url','twitter_url','linkedin_url','pinterest_url','youtube_url','cat_id','created_at','updated_at'];
    
    public $timestamps=true; 

    use HasFactory;
    
    
    public function relCategory(){
        return $this->belongsTo(Category::class,'cat_id', 'id')->where('status','active');
    }
}
