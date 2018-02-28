<?php

namespace App\Http\Controllers;

use App\Back;
use App\EndDay;
use App\Remainder;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
    	$days = EndDay::select('created_at')->groupBy('created_at')->get();
        return view('admin.reports.index', compact('days'))->withTitle('Days');
    }

    public function show($day)
    {
        $orders = EndDay::whereRaw('date(created_at) = ?', [$day])->select('order_number')->groupBy('order_number')->get(); // buy order number to get count only

        $Allorders = EndDay::whereRaw('date(created_at) = ?', [$day])->get(); // all orders
        
        $totalItemBuyPrice = $this->getTotalItemByBuyPrice($Allorders);
        $totalItemSellPrice = $this->getTotalItemBySellPrice($Allorders);
        $totalProfit = ($totalItemSellPrice - $totalItemBuyPrice);
        $remainder = $this->getRemainder($Allorders);
        $paidRemainderRow = Remainder::whereRaw('date(created_at) = ?', [$day])->select('remainder', 'order_number')->groupBy('remainder', 'order_number')->pluck('remainder');
        $totalPaidRemainder = $this->getTotalPaidRemainder($paidRemainderRow);
        $back = Back::whereRaw('date(created_at) = ?', [$day])->get();
        $totalBack = $this->getTotalBack($back);
        $netRevenue = $totalItemSellPrice - $totalBack + $remainder;
        return view('admin.reports.reports', compact('orders', 'totalItemBuyPrice', 'totalItemSellPrice', 'totalProfit', 'remainder', 'totalPaidRemainder', 'totalBack', 'netRevenue'))->withTitle('Reports');
    }

    private function getTotalPaidRemainder($Allorders)
    {
        $total = 0;
        foreach ($Allorders as $order) {
            $total += $order;
        }
        return $total;
    }

    private function getTotalBack($backs)
    {
        $total = 0;
        foreach ($backs as $back) {
            $total += $back->item->sell_price;
        }
        return $total * 2;
    }

    private function getRemainder($Allorders)
    {
        $total = 0;
        foreach ($Allorders as $order) {
            if ($order->order) {
                $total += $order->order->need_bill;
            }
        }
        return $total;
    }

    private function getTotalItemByBuyPrice($Allorders)
    {
        $total = 0;
        foreach ($Allorders as $order) {
            if ($order->order) {
                $total += $order->order->item[0]->buy_price;
            }
        }
        return $total * 2;
    }

    private function getTotalItemBySellPrice($Allorders)
    {
        $total = 0;
        foreach ($Allorders as $order) {
            if ($order->order) {
                $total += $order->order->t_cost_per_one;
            }
        }
        return $total;
    }
}
