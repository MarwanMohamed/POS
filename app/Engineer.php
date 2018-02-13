<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Engineer extends Model
{
    protected $fillable = ['name', 'phone', 'percentage', 'bills'];

    public function bills()
    {
    	return $this->hasMany(Bills::class);
    }
}
