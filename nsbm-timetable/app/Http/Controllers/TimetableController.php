<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timetable;

class TimetableController extends Controller
{
    public function store(Request $request){
       //dd($request->all());
       $timetable=new Timetable;

        $this->validate($request,[
           'mbatch'=>'required|max:100|min:3',
           'mhall'=>'required|max:100|min:3',
           'mmodule'=>'required|max:100|min:3',
           'mlecture'=>'required|max:100|min:3',
           'mdate'=>'required|max:100|min:3',
           'mtime'=>'required|max:100|min:3',

        ]);

       $timetable->batch=$request->mbatch;
       $timetable->hall=$request->mhall;
       $timetable->module=$request->mmodule;
       $timetable->lecturer=$request->mlecture;
       $timetable->date=$request->mdate;
       $timetable->time=$request->mtime;
       $timetable->save();

       $data=Timetable::all();
       dd($data);
      // return redirect()->back();
    }
}
