<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use App\Models\MainJobModel;
use Carbon\Carbon;
use App\Helpers\Helper;

class MainJobAdmin extends Controller
{
    public function add()
    {
        $depart = AdminModel::all();
        $data = [
            'nama' => 'Hadi Nurhidayat',
            'title' => 'Admin | Add New Main Job List',
        ];
        return view('pages.admin.mainjob.v_input', compact('depart'), $data);
    }

    public function input(Request $request)
    {
        $depart = AdminModel::all();
        //  dd($request->all());
        $job_name = $request->job_name;
        $job_desc = $request->job_desc;
        $time = $request->process_time;
        $depart = $request->depart_id;
        $code = Helper::IDGenerator(new MainJobModel, 'code', 5, 'MJOB');

        $q = new MainJobModel;
        $q->code = $code;
        $q->job_name = $job_name;
        $q->job_desc = $job_desc;
        $q->process_time = $time;
        $q->depart_id = $depart;
        $q->save();
        return redirect('/data-management/main-job')->with('toast_success', 'Data Update Successfully!');
    }

    public function edit($id)
    {
        $data = [
            'nama' => 'Hadi Nurhidayat',
            'title' => 'Admin | Update Main Job List'
        ];

        $depart = AdminModel::all();
        $main = MainJobModel::findorfail($id);
        return view('pages.admin.mainjob.v_edit', compact('depart', 'main'), $data);
    }

    public function update(Request $request, $id)
    {
        $main = MainJobModel::findorfail($id);
        $main->update([
            'code' => $request->code,
            'job_name' => $request->job_name,
            'job_desc' => $request->job_desc,
            'process_time' => $request->process_time,
            'depart_id' => $request->depart_id,
            'created_at' => $request->created_at,
            'updated_at' => Carbon::now()
        ]);
        return redirect('/data-management/main-job')->with('toast_success', 'Data Update Successfully!');
    }

    public function destroy($id)
    {
        $main = MainJobModel::findorfail($id);
        $main->delete();
        return back()->with('info', 'Delete Data Successfully!');
    }
}
