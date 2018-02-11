<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['code', 'name', 'category_id', 'amount', 'buy_price', 'sell_price'];

    public function category()
    {
    	return $this->belongsTo(Category::class, 'category_id');
    }
}
