<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel;
use App\Models\UserJobModel;
use App\Models\MainJobModel;
use App\Helpers\Helper;
use Carbon\Carbon;

class UserJobAdmin extends Controller
{
  public function add()
  {
    $employee = EmployeeModel::all();
    $main = MainJobModel::all();
    $user = UserJobModel::all();
    $data = [
      'nama' => 'Hadi Nurhidayat',
      'title' => 'Admin | Add New User Job List',
    ];
    return view('pages.admin.userjob.v_input', compact('employee', 'main', 'user'), $data);
  }
  public function input(Request $request)
  {
    // dd($request->all());
    $job_name = $request->job_name;
    $job_desc = $request->job_desc;
    $main = $request->main_id;
    $user = $request->user_id;
    $code = Helper::IDGenerator(new UserJobModel, 'code', 5, 'UJOB');

    $q = new UserJobModel;
    $q->code = $code;
    $q->job_name = $job_name;
    $q->job_desc = $job_desc;
    $q->user_id = $user;
    $q->main_id = $main;
    $q->save();
    return redirect('/data-management/user-job')->with('toast_success', 'Data Created Successfully!');
  }

  public function edit($id)
  {
    $user = UserJobModel::findorfail($id);
    $employee = EmployeeModel::all();
    $main = MainJobModel::all();
    $data = [
      'nama' => 'Hadi Nurhidayat',
      'title' => 'Admin | Update Main Job List'
    ];
    return view('pages.admin.userjob.v_edit', compact('main', 'employee', 'user'), $data);
  }

  public function update(Request $request, $id)
  {
    // dd($request->all());
    $user = UserJobModel::findorfail($id);
    $user->update([
      'code' => $request->code,
      'job_name' => $request->job_name,
      'job_desc' => $request->job_desc,
      'created_at' => $request->created_at,
      'updated_at' => Carbon::now(),
      'user_id' => $request->user_id,
      'main_id' => $request->main_id
    ]);
    return redirect('/data-management/user-job')->with('toast_success', 'Data Updated Successfully!');
  }

  public function destroy($id)
  {
    $user = UserJobModel::findorfail($id);
    $user->delete();
    return back()->with('info', 'Delete Data Successfully!');
  }
}
