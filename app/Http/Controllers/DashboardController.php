<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function index()
    {
    	// $users = User::count();
    	// $notes = Note::count();
    	// $lastgroup = StudentGroup::orderBy('id', 'DESC')->first()->id;
    	// $students = Registration::where('student_group_id', $lastgroup)->count();
    	// $allExpenses = otherExpensePayments::whereNull('paid_on')->whereNull('amount')->get(); // get all not paid expenses 
    	// $expenses = 0;

    	// foreach ($allExpenses as $expense) {
    	// 	if($expense->expense->required == 1) { // get required not paid expenses 
     // 			$expenses++;
    	// 	}
    	// }
    	// $installments = StudentInstallment::whereNull('paid_on')->count();

    	return view('admin.dashboard', compact('users', 'notes', 'students', 'expenses', 'installments'));
    }
}
