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

    public function dateBills($from, $to)
    {
        $from = \DateTime::createFromFormat('m-d-Y',$from);
        $to = \DateTime::createFromFormat('m-d-Y',$to);
        return Bill::whereBetween('created_at', [$from->format('Y-m-d')." 00:00:00", $to->format('Y-m-d')." 23:59:59"])->where('engineer_id', $this->engineer_id)->count();
    }

    public function totalBills($from, $to)
    {
        $from = \DateTime::createFromFormat('m-d-Y',$from);
        $to = \DateTime::createFromFormat('m-d-Y',$to);
        $bills = Bill::whereBetween('created_at', [$from->format('Y-m-d')." 00:00:00", $to->format('Y-m-d')." 23:59:59"])->where('engineer_id', $this->engineer_id)->get();
        $total = 0;

        foreach ($bills as $bill) {
            $total += $bill->cost;
        }
        return $total;
    }
}
