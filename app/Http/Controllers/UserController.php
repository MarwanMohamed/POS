<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'))->withTitle('Users');
    }

    public function create()
    {
        return view('admin.users.create')->withTitle('Create User');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'username' => 'required|min:3',
            'password' => 'required|string|min:6|confirmed',
            'is_admin' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'salary' => $request->salary,
            'is_admin' => $request->is_admin,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('user.index')->with('message', 'تم اضافة المستخم بنجاح');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.edit', compact('user'))->withTitle('Edit User');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'username' => 'required|min:3',
            'is_admin' => 'required',
        ]);

        $user = User::findOrFail($id);
        if($request->input('password') != ''){
            $this->validate($request, ['password' => 'required|string|min:6|max:25|confirmed']);
            $user->password = bcrypt($request->input('password'));
        }
        $user->name = $request->name;
        $user->username = $request->username;
        $user->is_admin = $request->is_admin;
        $user->salary = $request->salary;
        $user->save();
        return redirect()->back()->with('message', 'تم تعديل المستخم بنجاح');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'تم حذف المستخم بنجاح');
    }
}
