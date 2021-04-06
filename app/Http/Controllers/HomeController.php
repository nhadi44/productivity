<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = ['title' => 'Admin | Productivity'];
        return view('pages.admin.v_home', $data);
    }

    public function staff()
    {
        $data = [
            'title' => 'Staff | Productivity Report'
        ];
        return view('pages.staff.v_home', $data);
    }
    public function spv()
    {
        $data = [
            'title' => 'Supervisor | Productivity Report'
        ];
        return view('pages.spv.v_home', $data);
    }
}
