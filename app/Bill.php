<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = ['engineer_id', 'bill_type', 'customer_id', 'type', 'error', 'in', 'out', 'cost', 'note', 'end'];


    public function engineer()
    {
    	return $this->belongsTo(Engineer::class);
    }

    public function customer()
    {
    	return $this->belongsTo(Customer::class);
    }
}
