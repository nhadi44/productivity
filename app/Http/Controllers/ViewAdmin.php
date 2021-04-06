<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\EmployeeModel;
use App\Models\AdminModel;
use App\Models\LoginModel;
use App\Models\MainJobModel;
use App\Models\User;
use App\Models\UserJobModel;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ViewAdmin extends Controller
{
    public function __construct()
    {
        // $this->ViewEmployee = new ViewEmployee();
        $this->AdminModel = new AdminModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin | Productivity Report'
        ];
        return view('pages.admin.v_home', $data);
    }

    public function employee()
    {
        $employee = EmployeeModel::with('depart', 'main')->simplePaginate(3);
        $data = [
            'nama' => 'Hadi Nurhidayat',
            'title' => 'Admin | View Employee'
        ];
        return view('pages.admin.v_employee', compact('employee'), $data);
    }

    public function report()
    {
        $data = [
            'nama' => 'Hadi Nurhidayat',
            'title' => 'Admin | Report Data'
        ];
        return view('pages.admin.v_report', $data);
    }

    public function umadmin()
    {
        $user = User::all();
        $data = [
            'title' => 'Admin | User Managemet'
        ];
        return view('pages.admin.v_management', compact('user'), $data);
    }

    public function resetPassword()
    {
        $data = [
            'nama' => 'Hadi Nurhidayat',
            'title' => 'Admin | Reset Password'
        ];
        return view('pages.admin.v_rpwd', $data);
    }

    public function dataManagement()
    {
        $data = [
            'nama' => 'Hadi Nurhidayat',
            'title' => 'Admin | Data Management'
        ];
        return view('pages.admin.v_data_management', $data);
    }

    public function Department()
    {
        $depart = AdminModel::simplePaginate(2);
        $data = [
            'nama' => 'Hadi Nurhidayat',
            'title' => 'Admin | Department List',
        ];
        return view('pages.admin.v_department', compact('depart'), $data);
    }

    public function mainJob()
    {
        $main = MainJobModel::with('depart')->simplePaginate('3');
        $data = [
            'nama' => 'Hadi Nurhidayat',
            'title' => 'Admin | Department List'
        ];
        return view('pages.admin.v_mainJob', compact('main'), $data);
    }

    public function userJob()
    {
        $ujob = UserJobModel::with('user', 'main')->simplePaginate(3);
        $data = [
            'nama' => 'Hadi Nurhidayat',
            'title' => 'Admin | Department List'
        ];
        return view('pages.admin.v_userjob', compact('ujob'), $data);
    }

    public function input()
    {
        $data = [
            'title' => 'Admin | Department List'
        ];
        return view('pages.admin.department.v_insert', $data);
    }

    public function inputPost(Request $request)
    {
        // dd($request->all());
        // $current_date_time = date('Y-m-d');
        // AdminModel::create([
        //     'code' => $request->code,
        //     'nama' => $request->nama,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        $nama = $request->nama;
        $code = Helper::IDGenerator(new AdminModel, 'code', 5, 'DPT');

        $q = new AdminModel;
        $q->code = $code;
        $q->nama = $nama;
        $q->save();
        return redirect('/data-management/department')->with('toast_success', 'Data Created Successfully!');
    }

    public function edit($id)
    {
        $data = [
            'nama' => 'Hadi Nurhidayat',
            'title' => 'Admin | Department List'
        ];
        $depart = AdminModel::findorfail($id);
        return view('pages.admin.department.v_edit', compact('depart'), $data);
    }

    public function update(Request $request, $id)
    {
        $depart = AdminModel::findorfail($id);
        $depart->update($request->all());
        return redirect('/data-management/department')->with('toast_success', 'Data Update Successfully!');
    }
    // public function insertDepart(){
    //     $time = Carbon\Carbon::now();
    //     $data=[
    //         'id' => Request()->inputID,
    //         'nama_department' => Request()->inputName,
    //         'created_at' => $time,
    //         'updated_at' => $time
    //     ];
    //     return redirect()->route('department')->with('pesan','Data berhasil ditambahkan'); 
    // }

    public function destroy($id)
    {
        $depart = AdminModel::findorfail($id);
        $depart->delete();
        return back()->with('info', 'Data Delete Successfully!');
    }
}
