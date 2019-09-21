<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timetable;

class TimetableController extends Controller
{
    public function store(Request $request){
        $timetable=new Timetable;
        return redirect()->back();
    }
}
