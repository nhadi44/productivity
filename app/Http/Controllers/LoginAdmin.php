<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;
use App\Models\EmployeeModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class LoginAdmin extends Controller
{
    public function index()
    {
        return view('v_login');
    }
    public function input()
    {
        $user = User::all();
        $employee = EmployeeModel::all();
        $data = [
            'title' => 'Admin | Add New Employee'
        ];
        return view('pages.admin.management.v_input', compact('user', 'employee'), $data);
    }
    public function add(Request $request)
    {
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level,
            'remember_token' => $request->_token,
        ]);
        return redirect('/umadmin')->with('toast_success', 'Data Update Successfully!');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Admin | Update Administrator'
        ];
        $employee = EmployeeModel::all();
        $madmin = User::findorfail($id);
        return view('pages.admin.management.v_edit', compact('employee', 'madmin'), $data);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $madmin = User::findorfail($id);
        $madmin->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level,
            'remember_token' => $request->_token,
        ]);
        return redirect('/umadmin')->with('toast_success', 'Data Update Successfully!');
    }

    public function destroy($id)
    {
        $madmin = User::findorfail($id);
        $madmin->delete();
        return back()->with('info', 'Data Successfully Deleted!');
    }
}
