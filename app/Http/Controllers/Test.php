<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
class Test extends Controller
{
    public function test(){
        Helper::test();
    }
}
