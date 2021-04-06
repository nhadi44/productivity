<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Models\EmployeeModel;
use App\Models\ReportModel;
use App\Models\AdminModel;
use App\Models\ProcessModel;
use App\Models\UserJobModel;
use App\Models\MainJobModel;
use App\Models\Operation;
use Carbon\Carbon;
use App\Models\User;
// use App\Models\Operation;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Echo_;
use Illuminate\Support\Facades\Auth;

class ViewStaff extends Controller
{
    public function index()
    {
        $employee = EmployeeModel::all();
        $data = [
            'title' => 'Staff | Home'
        ];
        return view('pages.staff.v_home', compact('employee'), $data);
    }

    public function report()
    {
        $report = ReportModel::with('ujob')->simplePaginate(5);
        $data = [
            'title' => 'Staff | Report'
        ];
        return view('pages.staff.report.v_report', compact('report'), $data);
    }

    public function add()
    {
        $user = EmployeeModel::all();
        $depart = AdminModel::all();
        $process = ProcessModel::all();
        $ujob = UserJobModel::all();
        $main = MainJobModel::all();
        $data = [
            'title' => 'Staff | Report'
        ];
        return view('pages.staff.report.v_input', compact('user', 'depart', 'process', 'ujob', 'main'), $data);
    }

    public function input(Request $request)
    {
        // // return $request->input();
        // dd($request->all());
        $job_code = $request->job_code;
        $job_name = $request->job_name;
        $job_desc = $request->job_desc;
        $total_process = $request->total_process;
        $process_time = $request->process_time;
        $ujob_id = $request->ujob_id;
        $main_id = $request->main_id;
        $code = Helper::IDGenerator(new ReportModel, 'code', 5, 'RPT');
        $code2 = Helper::IDGenerator(new ProcessModel, 'code', 5, 'PRS');

        // input table report
        $q = new ReportModel;
        $q->code = $code;
        $q->job_code = $job_code;
        $q->job_name = $job_name;
        $q->job_desc = $job_desc;
        $q->total_process = $total_process;
        $q->process_time = $process_time;
        $q->ujob_id = $ujob_id;
        $q->main_id = $main_id;
        $q->save();

        $a = new ProcessModel;
        $a->code = $code2;
        $a->job_code = $job_code;
        $a->total_process = $total_process;
        $a->process_time = $process_time;
        $a->main_id = $main_id;
        $a->save();
        return redirect('/report-staff')->with('toast_success', 'Data Created Successfully!');
    }

    public function edit($id)
    {
        $main = MainJobModel::all();
        $ujob = UserJobModel::all();
        $report = ReportModel::findorfail($id);
        $data = [
            'title' => 'Report | Staff '
        ];
        return view('pages.staff.report.v_update', compact('report', 'main', 'ujob'), $data)->with('ujob', 'main', $report);;
    }

    // public function update(Request $request, $id)
    // {
    //     //dd($request->all());
    //     $report = ReportModel::findorfail($id);
    //     $report->update([
    //         'code' => $request->code,
    //         'job_code' => $request->job_name,
    //         'job_name' => $request->job_name,
    //         'job_desc' => $request->job_desc,
    //         'total_process' => $request->total_process,
    //         'process_time' => $request->process_time,
    //         'ujob_id' => $request->ujob_id,
    //         'main_id' => $request->main_id,
    //         'created_at' => $request->created_at,
    //         'updated_at' => Carbon::now()
    //     ]);

    //     return redirect('/report-staff')->with('toast_success', 'Data Updated Successfully!');
    // }

    // public function destroy($id)
    // {
    //     $report = ReportModel::findorfail($id);
    //     $report->delete();
    //     return back()->with('info', 'Data Deleted Successfully!');
    // }

    public function reportNew()
    {
        $user = Auth::user()->id;
        $data = Operation::with('user')->where('user_id', $user)->simplePaginate(10);
        return view('pages.staff.report.v_report-new', compact('data'));
    }

    public function addReport(Request $request)
    {
        //time static
        $Tcovernote = 3;
        $Trefund = 7;
        $TpolisA = 30; //belum ada data
        $TpolisB = 60; //belum ada data
        $Tsertifikat = 3;
        $Tenrollment = 10;
        $Tverifikasi = 6;
        $Tanalisa = 10; //belum ada data

        $covernote = $request->covernote;
        $refund = $request->refund;
        $polis_a = $request->polis_a;
        $polis_b = $request->polis_b;
        $sertifikat = $request->sertifikat;
        $enrollment = $request->enrollment;
        $verifikasi = $request->verifikasi;
        $analisa = $request->analisa;

        $a = $covernote * $Tcovernote;
        $b = $refund * $Trefund;
        $c = $polis_a * $TpolisA;
        $d = $polis_b * $TpolisB;
        $e = $sertifikat * $Tsertifikat;
        $f = $enrollment * $Tenrollment;
        $g = $verifikasi * $Tverifikasi;
        $h = $analisa * $Tanalisa;
        $code = Helper::IDGenerator(new Operation, 'code', 5, 'OPS');
        $user_id = $request->user_id;
        $i = $a + $b + $c + $d + $e + $f + $g + $h;

        $total = $i;
        $productivity = $i / 480 * 100;
        $int = (int)$productivity;

        $q = new Operation;
        $q->code = $code;
        $q->user_id = $user_id;
        $q->covernote = $a;
        $q->refund = $b;
        $q->polis_a = $c;
        $q->polis_b = $d;
        $q->sertifikat = $e;
        $q->enrollment = $f;
        $q->verifikasi = $g;
        $q->analisa = $h;
        $q->total = $total;
        $q->productivity = $productivity;
        $q->save();
        return redirect('/report-new')->with('info', 'Data berhasil ditambahkan');
        // dd($request->all(), $a, $b, $c, $d, $e, $f, $g, $h, $total, $productivity, $int, $code);
    }

    public function editReport($id)
    {
        // $user = Auth::user()->id;
        // $data = Operation::with('user')->where('user_id', $user);
        $data = Operation::findorfail($id);
        return view('pages.staff.report.v_report-update', compact('data'));
        // echo "hello";
    }

    // public function update(Request $request, $id)
    public function update(Request $request, $id)
    {
        //ddd($request->all());
        $Tcovernote = 3;
        $Trefund = 7;
        $TpolisA = 30; //belum ada data
        $TpolisB = 60; //belum ada data
        $Tsertifikat = 3;
        $Tenrollment = 10;
        $Tverifikasi = 6;
        $Tanalisa = 10; //belum ada data

        $covernote = $request->covernote;
        $refund = $request->refund;
        $polis_a = $request->polis_a;
        $polis_b = $request->polis_b;
        $sertifikat = $request->sertifikat;
        $enrollment = $request->enrollment;
        $verifikasi = $request->verifikasi;
        $analisa = $request->analisa;

        $a = $covernote * $Tcovernote;
        $b = $refund * $Trefund;
        $c = $polis_a * $TpolisA;
        $d = $polis_b * $TpolisB;
        $e = $sertifikat * $Tsertifikat;
        $f = $enrollment * $Tenrollment;
        $g = $verifikasi * $Tverifikasi;
        $h = $analisa * $Tanalisa;
        $code = $request->code;
        $user_id = $request->user_id;
        $i = $a + $b + $c + $d + $e + $f + $g + $h;

        $total = $i;
        $productivity = $i / 480 * 100;
        $int = (int)$productivity;

        // $q = new Operation;
        // $q->code = $code;
        // $q->user_id = $user_id;
        // $q->covernote = $a;
        // $q->refund = $b;
        // $q->polis_a = $c;
        // $q->polis_b = $d;
        // $q->sertifikat = $e;
        // $q->enrollment = $f;
        // $q->verifikasi = $g;
        // $q->analisa = $h;
        // $q->total = $total;
        // $q->productivity = $productivity;
        // $q->save();
        Operation::where('id', $id)
            ->update([
                'code' => $code,
                'user_id' => $user_id,
                'covernote' => $a,
                'refund' => $b,
                'polis_a' => $c,
                'polis_b' => $d,
                'sertifikat' => $e,
                'enrollment' => $f,
                'verifikasi' => $g,
                'analisa' => $h,
                'total' => $total,
                'productivity' => $productivity,
                'created_at' => $request->created_at,
            ]);
        return redirect('/report-new')->with('info', 'Data berhasil diupdate');
        // dd($request->all(), $a, $b, $c, $d, $e, $f, $g, $h, $total, $productivity, $int, $code);
        // echo "hello";
    }

    public function destroy($id)
    {
        Operation::where('id', $id)
            ->delete();
        return back()->with('info', 'Delete Data Successfully!');
    }
}
