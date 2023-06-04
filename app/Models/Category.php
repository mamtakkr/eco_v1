<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primarykey="id";
    protected $table = 'categories';
    protected $fillable=['id','parent_id','title','slug','is_parent','description','image_url1','image_url2','image_url3','image_url4',
    'status','is_deleted','created_at','updated_at']; 
    public $timestamps=true; 
    use HasFactory;
  
    public static function getChildByParentID($id){
        return Category::where('parent_id',$id)->pluck('title','id');
    }

    public function relProduct(){
        return $this->hasMany('App\Models\Product', 'cat_id', 'id')->where('status','show');
    }
    
    public function relProductChild(){
        return $this->hasMany('App\Models\Product', 'child_cat_id', 'id')->where('status','show');
    }
    
    public function relGeneralSetting(){
        return $this->hasOne('App\Models\GeneralSetting', 'cat_id', 'id');
    }

}
