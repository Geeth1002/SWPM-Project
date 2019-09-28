<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Timetable;

class TimetableController extends Controller
{




    public function store(Request $request){
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
       return redirect()->back();

        $data = DB::table('timetables')->whereDate('date', '=', date('Y-m-d'))->get();
        return view('frontend.user.timetableview')->withTimeTable($data);

    }
    public function deleterecode($id){

        $timetable=Timetable::find($id);
        $timetable->delete();
        return redirect()->back();
    }

    public function updaterecode($id){
        $timetableById=Timetable::where('id',$id)->first();
        return view('backend.editrecode',['timetableById'=>$timetableById]);
    }

    public function storeupdate(Request $request){
        $id=$request->uid;
        $batch=$request->ubatch;
        $hall=$request->uhall;
        $module=$request->umodule;
        $lecturer=$request->ulecture;
        $date=$request->udate;
        $time=$request->utime;

        $timetable=Timetable::find($id);

        $timetable->batch=$batch;
        $timetable->hall=$hall;
        $timetable->module=$module;
        $timetable->lecturer=$lecturer;
        $timetable->date=$date;
        $timetable->time=$time;

       $timetable->save();
       return redirect('/admin/dashboard/')->with('msg','Data Updated Sucessfully');

     }

}
