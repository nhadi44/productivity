<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProcessModel;
use App\Models\MainJobModel;
use App\Models\EmployeeModel;
use Carbon\Carbon;
use App\Helpers\Helper;

class ProcessAdmin extends Controller
{
    public function process()
    {
        $process = ProcessModel::with('user')->simplePaginate(4);
        $data = [
            'nama' => 'Hadi Nurhidayat',
            'title' => 'Admin | Productivity Report'
        ];
        return view('pages.admin.v_process', compact('process'), $data);
    }

    public function add()
    {
        $main = MainJobModel::all();
        $employee = EmployeeModel::all();
        $data = [
            'nama' => 'Hadi Nurhidayat',
            'title' => 'Admin | Productivity Report'
        ];
        return view('pages.admin.process.v_input', compact('main', 'employee'), $data);
    }

    public function input(Request $request)
    {
        $job_code = $request->job_code;
        $process = $request->total_process;
        $time = $request->process_time;
        $main = $request->main_id;
        // $user = $request->user_id;
        $code = Helper::IDGenerator(new ProcessModel, 'code', 5, 'PRS');

        $q = new ProcessModel;
        $q->code = $code;
        $q->job_code = $job_code;
        $q->total_process = $process;
        $q->process_time = $time;
        $q->main_id = $main;
        // $q->user_id = $user;
        $q->save();
        return redirect('/process')->with('toast_success', 'Data Created Successfully!');
    }

    public function edit($id)
    {
        $main = MainJobModel::all();
        $employee = EmployeeModel::all();
        $process = ProcessModel::findorfail($id);
        $data = [
            'nama' => 'Hadi Nurhidayat',
            'title' => 'Admin | Productivity Report'
        ];
        return view('pages.admin.process.v_edit', compact('main', 'employee', 'process'), $data)->with('user', 'main', $process);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $process = ProcessModel::findorfail($id);
        $process->update([
            'code' => $request->code,
            'job_code' => $request->job_code,
            'total_process' => $request->total_process,
            'process_time' => $request->process_time,
            'main_id' => $request->main_id,
            'created_at' => $request->created_at,
            'updated_at' => Carbon::now(),
            'user_id' => $request->user_id
        ]);
        return redirect('/process')->with('toast_success', 'Data Updated Successfully!');
    }

    public function destroy($id)
    {
        $process = ProcessModel::findorfail($id);
        $process->delete();
        return back()->with('info', ' Data Deleted Successfully!');
    }
    // //test input code
    // public function code(){
    //     $data = [
    //         'nama' => 'Hadi Nurhidayat',
    //         'title' => 'Admin | Productivity Report'
    //     ];
    //     return view('pages.admin.v_test',$data);
    // }

    // public function test(){

    // }


}
