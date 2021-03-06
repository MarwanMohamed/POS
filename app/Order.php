<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = ['end'];
	
    public function customer()
    {
    	return $this->belongsTo(Customer::class);
    }

    public function item()
    {
    	return $this->hasMany(Item::class, 'id', 'item_id');
    }
}
