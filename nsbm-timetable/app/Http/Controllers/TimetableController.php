<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timetable;

class TimetableController extends Controller
{
    public function store(Request $request){
       //dd($request->all());
       $timetable=new Timetable;
       $timetable->batch=$request->mbatch;
       $timetable->hall=$request->mhall;
       $timetable->module=$request->mmodule;
       $timetable->lecturer=$request->mlecture;
       $timetable->date=$request->mdate;
       $timetable->time=$request->mtime;
       $timetable->save();
       return redirect()->back();
    }
}
