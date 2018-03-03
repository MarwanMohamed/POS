<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Engineer extends Model
{
    protected $fillable = ['name', 'phone', 'percentage', 'bills'];

    public function bills()
    {
    	return $this->hasMany(Bill::class);
    }

    public function totalBill()
    {
    	$total = 0;
    	foreach ($this->bills as $bill) {
    		$total += $bill->cost;
    	}
    	return ($total * $this->percentage) / 100;
    }
}
