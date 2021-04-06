<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel;
use App\Models\AdminModel;
use Carbon\Carbon;

class EmployeeAdmin extends Controller
{
    public function input(){
        $employee = EmployeeModel::all();
        $depart = AdminModel::all();
        $data = [
            'nama' => 'Hadi Nurhidayat',
            'title' => 'Admin | Add New Employee'
        ];
        return view('pages.admin.employee.v_input',compact('employee','depart'),$data);
    }

    public function add(Request $request){
        //dd($request->all());
        EmployeeModel::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'start_contract' => $request->start_contract,
            'end_contract' => $request->end_contract,
            'title_job' => $request->title_job,
            'depart_id' => $request->depart_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return redirect('/employee')->with('toast_success', 'Data Created Successfully!');
    }

    public function edit($id){
        $data =[
            'nama' => 'Hadi Nurhidayat',
            'title' => 'Admin | Department List'
        ];
        $depart=AdminModel::all();
        $employee= EmployeeModel::findorfail($id);
        return view('pages.admin.employee.v_edit',compact('employee','depart'),$data);
    }

    public function update(Request $request, $id){
        // dd($request->all());
        $employee= EmployeeModel::findorfail($id);
        $employee->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'start_contract' => $request->start_contract,
            'end_contract' => $request->end_contract,
            'title_job' => $request->title_job,
            'depart_id' => $request->depart_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return redirect('/employee')->with('toast_success', 'Data Update Successfully!');
    }
    public function destroy($id){
        $employee = EmployeeModel::findorfail($id);
        $employee->delete();
        return back()->with('info', 'Data Delete Successfully!'); 
    }
}
