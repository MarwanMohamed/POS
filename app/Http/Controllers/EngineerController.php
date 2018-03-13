<?php

namespace App\Http\Controllers;

use App\Engineer;
use Illuminate\Http\Request;
use App\EndBill;
use App\Bill;

class EngineerController extends Controller
{
    public function index(Request $request)
    {

         if ($request->from && $request->to) {
            $from = \DateTime::createFromFormat('m-d-Y',$request->from);
            $to = \DateTime::createFromFormat('m-d-Y',$request->to);

            $engineers = EndBill::whereBetween('created_at', [$from->format('Y-m-d')." 00:00:00", $to->format('Y-m-d')." 23:59:59"])->get();
            return view('admin.engineers.fromTo', compact('engineers'))->withTitle('Engineers');

        } else{
            $engineers = Engineer::all();
            return view('admin.engineers.index', compact('engineers'))->withTitle('Engineers');
        }

    }

    public function create()
    {
        return view('admin.engineers.create', compact('categories'))->withTitle('Create Engineer');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'phone' => 'required',
            'percentage' => 'required',
        ]);
        Engineer::create($request->all());
        return redirect()->route('engineer.index')->with('message', 'تم اضافة المهندس بنجاح');
    }

    public function edit($id)
    {
        $engineer = Engineer::findOrFail($id);

        return view('admin.engineers.edit', compact('engineer', 'categories'))->withTitle('Edit Engineer');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'phone' => 'required',
            'percentage' => 'required',
        ]);

        Engineer::findOrFail($id)->update($request->all());
        return redirect()->back()->with('message', 'تم تعديل المهندس بنجاح');
    }

    public function destroy($id)
    {
        Engineer::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'تم حذف المهندس بنجاح');
    }

    public function days()
    {
        $days = EndBill::select('created_at')->groupBy('created_at')->get();
        return view('admin.engineers.days', compact('days'))->withTitle('Days');
    }

    public function showDay($day)
    {
        $bills = EndBill::whereRaw('date(created_at) = ?', [$day])->get()->groupBy('engineer_id');
        return view('admin.engineers.inDay', compact('bills'))->withTitle('Bills');
    }

}
