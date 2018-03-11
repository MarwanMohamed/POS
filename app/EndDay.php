<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EndDay extends Model
{
    protected $table = 'endDay';
    protected $fillable = ['order_id', 'endDay'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function getDay($day)
    {
    	$days = [
	    	'Monday' => 'الاتنين',	
			'Tuesday' => 'الثلاثاء',
			'Wednesday' => 'الاربعاء',
			'Thursday' => 'الخميس',
			'Friday' => 'الجمعه',
			'Saturday' => 'السبت',
			'Sunday' => 'الاحد',
    	];

    	return $days[$day];
    }
}
