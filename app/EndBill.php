<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EndBill extends Model
{
    protected $table = 'endBills';

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

    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }
}
