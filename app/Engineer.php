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

    public function totalBill($bills)
    {
        $total = 0;
        foreach ($bills as $bill) {
    		$total += $bill->bill->cost;
    	}
    	return ($total * $this->percentage) / 100;
    }

    
}
