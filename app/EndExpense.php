<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EndExpense extends Model
{
    protected $table = 'endExpenses';
    
    public function expense()
    {
        return $this->belongsTo(Expense::class);
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
