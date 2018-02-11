<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;
use Image;
class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'cat_id';
    protected $fillable =  ['cat_image', 'cat_name', 'min_price', 'max_price', 'cat_desc'];


   
    public function setCatImageAttribute($value){
        $name = time() . '.' . $value->getClientOriginalExtension();
        $value->move('uploads', $name);
        $this->attributes['cat_image'] = $name;
    }
    
}
